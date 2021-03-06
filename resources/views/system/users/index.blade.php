@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <!-- END THEME STYLES -->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
        function  getSelectedCheckboxes(){

            var ids = '';
            $.each($("input[name='ck_value']:checked"), function(){
                ids += ($(this).attr('value')) + '-';
            });
            return ids = ids.substring(0, ids.length - 1);

        }
        function multiLock() {

            var ids = getSelectedCheckboxes();
            var pl = $('#phanloai').val();
            if(ids == '') {
                $('#btnMultiLockUser').attr('data-target', '#notid-modal-confirm');
            }else {

                $('#btnMultiLockUser').attr('data-target', '#lockuser-modal-confirm');
                $('#frmLockUser').attr('action', "{{ url('users/lock')}}/" + ids + '/' + pl);
            }

        }
        function multiUnLock() {

            var ids = getSelectedCheckboxes();
            var pl = $('#phanloai').val();
            if(ids == '') {
                $('#btnMultiUnLockUser').attr('data-target', '#notid-modal-confirm');
            }else {
                $('#btnMultiUnLockUser').attr('data-target', '#unlockuser-modal-confirm');
                $('#frmUnLockUser').attr('action', "{{ url('users/unlock')}}/" + ids + '/' + pl);
            }

        }
        function confirmDelete(id) {
            $('#frmDelete').attr('action', "/delete/" + id);
        }
        function getId(id){
            document.getElementById("iddelete").value=id;
        }

        function ClickDelete(){
            $('#frm_delete').submit();
        }
    </script>
@stop

@section('content')
    <h3 class="page-title">
        Quản lý tài khoản <small>&nbsp;sử dụng</small>
    </h3>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="actions">

                        <button id="btnMultiLockUser" type="button" onclick="multiLock()" class="btn btn-default btn-sm" data-target="#lockuser-modal-confirm" data-toggle="modal"><i class="fa fa-lock"></i>&nbsp;
                            Khóa</button>
                        <button id="btnMultiUnLockUser" type="button" onclick="multiUnLock()" class="btn btn-default btn-sm" data-target="#unlockuser-modal-confirm" data-toggle="modal"><i class="fa fa-unlock"></i>&nbsp;
                            Mở khóa</button>
                        <!--a href="{{url('users/print/level='.$level)}}" class="btn btn-default btn-sm" target="_blank">
                            <i class="fa fa-print"></i> Print </a-->
                    </div>

                </div>

                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" name="select_level" id="select_level">
                                    <option value="T" {{($level == 'T') ? 'selected' : ''}}>Cấp tỉnh</option>
                                    <option value="H" {{($level == 'H') ? 'selected' : ''}}>Cấp quận/huyện</option>
                                    <option value="X" {{($level == 'X') ? 'selected' : ''}}>Cấp xã/phường</option>
                                </select>
                            </div>
                        </div>
                        @if($level == 'X')
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="select_huyen" id="select_huyen">
                                        <option value="all">--Chọn quận huyện--</option>
                                        @foreach ($listhuyen as $huyen)
                                            <option {{ ($huyen->mahuyen == $mahuyen) ? 'selected' : '' }} value="{{ $huyen->mahuyen }}">{{ $huyen->tenhuyen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">

                        </div>
                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                            <thead>
                            <tr>
                                <th class="table-checkbox">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
                                </th>
                                <th style="text-align: center" width="2%">STT</th>
                                <th style="text-align: center">Tên tài khoản</th>
                                <th style="text-align: center">Username</th>
                                <th style="text-align: center">Tel</th>
                                <th style="text-align: center">Email</th>
                                <th style="text-align: center" width="5%">Trạng thái</th>
                                <th style="text-align: center" width="25%">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($model as $key=>$tt)
                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="{{$tt->id}}" name="ck_value" id="ck_value"/>
                                    </td>
                                    <td style="text-align: center">{{$key + 1}}</td>
                                    <td>{{$tt->name}}</td>
                                    <td class="active">{{$tt->username}}</td>
                                    <td>{{$tt->phone}}</td>
                                    <td>{{$tt->email}}</td>
                                    <td style="text-align: center">
                                        @if($tt->status == 'Kích hoạt')
                                            <span class="label label-sm label-success">{{$tt->status}}</span>
                                        @else
                                            <span class="label label-sm label-danger">{{$tt->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('users/'.$tt->id.'/edit')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-edit"></i>&nbsp;Chỉnh sửa</a>
                                        @if($tt->sadmin != 'sa')
                                            <a href="{{url('users/'.$tt->id.'/permission')}}" class="btn btn-default btn-xs mbs"><i class="fa fa-cogs"></i>&nbsp;Phân quyền</a>
                                        @endif
                                        <button type="button" onclick="getId('{{$tt->id}}')" class="btn btn-default btn-xs mbs" data-target="#delete-modal" data-toggle="modal"><i class="fa fa-trash-o"></i>&nbsp;
                                            Xóa</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

        <!-- BEGIN DASHBOARD STATS -->

        <!-- END DASHBOARD STATS -->
        <div class="clearfix"></div>
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {!! Form::open(['url'=>'users/delete','id' => 'frm_delete'])!!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Đồng ý xóa?</h4>
                    </div>
                    <input type="hidden" name="iddelete" id="iddelete">
                    <div class="modal-footer">
                        <button type="submit" class="btn blue" onclick="ClickDelete()">Đồng ý</button>
                        <button type="button" class="btn default" data-dismiss="modal">Hủy</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

    <script>
        $(function(){
            $('#select_level, #select_huyen').change(function() {
                var current_path_url = '/users?';
                var level = '&level='+$('#select_level').val();
                if($(this).attr('id') == 'select_level'){
                    $('#select_huyen').val('all');
                }
                var mahuyen = '';
                if($('#select_huyen').length > 0 ){
                    var mahuyen = '&mahuyen='+$('#select_huyen').val();
                }
                var url = current_path_url+level+mahuyen;
                window.location.href = url;
            });
        })


    </script>

    @include('includes.e.modal-confirm')


@stop