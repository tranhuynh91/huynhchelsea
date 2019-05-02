@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')


    <h3 class="page-title">
        Thông tin <small>cấu hình hệ thống</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="actions">
                        <a href="{{url('cau_hinh_he_thong/'.$model->id.'/edit')}}" class="btn btn-default btn-sm">
                            <i class="fa fa-edit"></i>&nbsp;Chỉnh sửa </a>
                        @if(session('admin')->sadmin == 'ssa')
                        <a href="{{url('setting')}}" class="btn btn-default btn-sm">
                            <i class="icon-settings"></i>&nbsp;Setting </a>
                        @endif

                    </div>
                </div>
                <div class="portlet-body">
                    <table id="user" class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <td style="width:15%">
                                <b>Đơn vị</b>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted">{{$model->tendv}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:15%">
                                <b>Địa chỉ </b>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted">{{$model->diachi}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:15%">
                                <b>Số điện thoại</b>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted">{{$model->tel}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:15%">
                                <b>Thủ trưởng đơn vị</b>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted">{{$model->thutruong}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:15%">
                                <b>Kế toán</b>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted">{{$model->ketoan}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:15%">
                                <b>Người lập biểu</b>
                            </td>
                            <td style="width:35%">
                                <span class="text-muted">{{$model->nguoilapbieu}}
                                </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop