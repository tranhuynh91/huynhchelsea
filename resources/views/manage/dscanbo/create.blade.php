@extends('main')

@section('custom-style')

@stop


@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <!--cript src="{{url('assets/admin/pages/scripts/form-validation.js')}}"></script-->

@stop

@section('content')
    <h3 class="page-title">
        Thông tin dannh sách cán bộ<small> thêm mới</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row center">
        <div class="col-md-12 center">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box blue">
                <!--div class="portlet-title">
                </div-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['url'=>'dscanbo', 'id' => 'create_dscanbo', 'class'=>'horizontal-form']) !!}
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Mã cán bộ<span class="require">*</span></label>
                                    {!!Form::text('macb', null, array('id' => 'macb','class' => 'form-control required','autofocus'=>'autofocus'))!!}
                                </div>
                            </div>
                            <!--/span-->
                            <!--/span-->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tên cán bộ</label>
                                    {!!Form::text('tencb', null, array('id' => 'tencb','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Chức vụ</label>
                                    {!!Form::text('chucvu', null , array('id' => 'chucvu','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Phòng ban</label>
                                    {!!Form::text('phongban', null , array('id' => 'phongban','class' => 'form-control'))!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nhiệm vụ</label>
                                    {!!Form::text('nhiemvu', null , array('id' => 'nhiemvu','class' => 'form-control'))!!}
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END FORM-->
                </div>
            </div>

            <div style="text-align: center">
                <a href="{{url('dscanbo')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Hoàn thành</button>
            </div>
            {!! Form::close() !!}
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    <script type="text/javascript">
        function validateForm(){

            var validator = $("#create_dscanbo").validate({
                rules: {
                    ten :"required"
                },
                messages: {
                    ten :"Chưa nhập dữ liệu"
                }
            });
        }
    </script>
    <script>
        $('#macb').change(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'GET',
                url: '/checkmacb',
                data: {
                    _token: CSRF_TOKEN,
                    maxa:$(this).val()
                },
                success: function (respond) {
                    if(respond != 'ok'){
                        toastr.error("Bạn cần nhập lại mã cán bộ", "Mã cán bộ nhập vào đã tồn tại!!!");
                        $('#macb').val('');
                        $('#mac').focus();
                    }else
                        toastr.success("Mã cán bộ sử dụng được!", "Thành công!");
                }

            });
        });
    </script>
    @include('includes.script.create-header-scripts')
@stop