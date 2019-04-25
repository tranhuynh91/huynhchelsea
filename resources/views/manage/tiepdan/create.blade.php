@extends('main')

@section('custom-style')
    <link href="{{url('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('vendors/bootstrap-datepicker/css/datepicker.css') }}">
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/admin/pages/scripts/form-wizard.js')}}"></script>
    <script src="{{url('js/jquery.inputmask.bundle.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            FormWizard.init();
        });
    </script>
@stop

@section('content')
    <h3 class="page-title">
        Thông tin hồ sơ tiếp dân<small> thêm mới</small>
    </h3>
    <div class="row">
        {!! Form::open(['url'=>'tiepdan','method'=>'post' , 'files'=>true, 'id' => 'create_hscd','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <div class="col-md-12">
            <div class="portlet box blue" id="form_wizard_1">
                <div class="portlet-body form" id="form_wizard">
                    <div class="form-body">
                        <ul class="nav nav-pills nav-justified steps">
                            <li><a href="#tab1" data-toggle="tab" class="step">
                                        <span class="badge badge-default">
                                        1 </span>
                                    <p class="description">Thông tin hồ sơ</p>
                                </a>
                            </li>
                            <li><a href="#tab2" data-toggle="tab" class="step">
                                    <span class="badge badge-default">
                                        2 </span>
                                    <p class="description">Thông tin công dân</p></a>
                            </li>
                            <li><a href="#tab3" data-toggle="tab" class="step">
                                     <span class="badge badge-default">
                                        3 </span>
                                    <p class="description">Thông tin giải quyết</p></a>
                            </li>
                            <li><a href="#tab4" data-toggle="tab" class="step">
                                     <span class="badge badge-default">
                                        4 </span>
                                    <p class="description">Thông tin đính kèm</p></a>
                            </li>
                        </ul>
                        <div id="bar" class="progress progress-striped" role="progressbar">
                            <div class="progress-bar progress-bar-blue">
                            </div>
                        </div>

                        <div class="tab-content">
                            @include('manage.tiepdan.include.tths')
                            @include('manage.tiepdan.include.ttcd')
                            @include('manage.tiepdan.include.cqgq')
                            @include('manage.tiepdan.include.tldk')
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-1" style="text-align: left">
                                <button type="button" name="previous" value="Previous" class="btn default button-previous">
                                    <i class="fa fa-arrow-circle-o-left mrx"></i>&nbsp;Trước
                                </button>
                            </div>
                            <div class="col-md-offset-8 col-md-1" style="text-align: right">
                                <button id="btnnext" type="button" name="next" value="Next" class="btn blue button-next">
                                    Tiếp&nbsp;<i class="fa fa-arrow-circle-o-right mlx"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center">
                <a href="{{url('tiepdan')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i>Hoàn thành</button>
            </div>
            <div id="tiepdan"></div>
        </div>
        {!! Form::close() !!}
    </div>
    <script>
        function validateForm(){

            var str = '',strb1='',strb2='',strb3='',strb4='';
            var ok = true;

            if($('#mavuviectd').val()==''){
                strb1 += ' - Ngày đăng ký\n';
                ok = false;
            }
            if($('#canbotd').val()==''){
                strb1 += ' - cán bộ tiếp dân\n';
                ok = false;
            }
            if($('#canbotd1').val()==''){
                strb1 += '  - cán bộ tiếp dân 2\n';
                ok = false;
            }
            if($('#canbotd2').val()==''){
                strb1 += '  - cán bộ tiếp dân 3\n';
                ok = false;
            }
            if($('#ngaythangtd').val()==''){
                strb1 += '  - ngày tháng tiếp dân \n';
                ok = false;
            }
            if($('#phanloaitd').val()==''){
                strb1 += '  - Phân loại tiếp dân \n';
                ok = false;
            }


            if($('#phanloaivc').val()==''){
                strb2 += ' - Phân loại vụ việc \n';
                ok = false;
            }
            if($('#hotencd').val()==''){
                strb2 += '  - họ tên công dân \n';
                ok = false;
            }
            if($('#ngaysinh').val()==''){
                strb2 += '  - ngày sinh \n';
                ok = false;
            }
            if($('#cmnd').val()==''){
                strb2 += '  - chứng minh nhân dân \n';
                ok = false;
            }
            if($('#ngaycapcmnd').val()==''){
                strb2 += '  - Ngày cấp CMND \n';
                ok = false;
            }
            //b3

            if($('#noicapcmnd').val()==''){
                strb3 += '  - Nơi cấp CMND \n';
                ok = false;
            }
            if($('#diachicd').val()==''){
                strb3 += '  - Địa chỉ công dân \n';
                ok = false;
            }
            if($('#plnoidung').val()==''){
                strb3 += '  - Phân loại nội dung \n';
                ok = false;
            }
            if($('#plchitiet').val()==''){
                strb3 += '  - Phân loại nội dung chi tiết\n';
                ok = false;
            }
            if($('#noidungtbcd').val()==''){
                strb3 += '  - Nội dung trình bày \n';
                ok = false;
            }
            if($('#coquandgq').val()=='') {
                strb3 += '  - Cơ quan giải quyết \n';
                ok = false;
            }
            if($('#huongxl').val()==''){
                strb4 += ' - Hướng xử lý \n';
                ok = false;
            }
            if($('#kqtd').val()==''){
                strb4 += '  - Kết quả tiếp dân\n';
                ok = false;
            }
            if($('#tdgq').val()==''){
                strb4+= '  - Theo dõi giải quyết \n';
                ok = false;
            }

            //Kết quả
            if ( ok == false){
                if(strb1!='')
                    str+='Bước 1: Thông tin hồ sơ \n '+strb1 ;
                if(strb2!='')
                    str+='Bước 2: Thông tin công dân \n '+strb2 ;
                if(strb3!='')
                    str+='Bước 3: Thông tin giải quyết \n '+strb3 ;
                if(strb4!='')
                    str+='Bước 4: Thông tin đính kèm \n '+strb4 ;

                alert('Thông tin không được để trống \n' + str );
                $("form").submit(function (e) {
                    e.preventDefault();
                });
            }
            else{
                $("form").unbind('submit').submit();
            }

        }
    </script>
@stop