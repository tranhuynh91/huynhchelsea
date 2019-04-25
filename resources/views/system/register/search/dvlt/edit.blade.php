<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.9.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{$pageTitle}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{url('assets/global/plugins/select2/select2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/pages/css/login-soft-register.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{url('assets/global/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="{{url('assets/admin/layout/css/themes/darkblue.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}"/>
    <!-- END THEME STYLES -->
    <!--link rel="shortcut icon" href="favicon.ico"/-->
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <style>
        option:first {
            color: #999;
        }
    </style>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="">
        <img src="{{ url('images/LIFESOFT.png')}}"  width="130" alt="Công ty TNHH phát triển phần mềm Cuộc Sống"/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN REGISTER FORM -->
    {!! Form::model($model, ['method' => 'PATCH', 'url'=>'/register_editdvlt/id='.$model->id, 'class'=>'horizontal-form','id'=>'update_register']) !!}
    <!--form class="register-form" action="index.html" method="post" novalidate="novalidate" style="display: block;"-->
    <div class="row">
    <div class="col-md-12">
        <p>Thông tin doanh nghiêp cung cấp dịch vụ lưu trú</p>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control required" type="text" placeholder="Tên doanh nghiệp" name="tendn" id="tendn" value="{{$model->tendn}}" autofocus>
                    </div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-key"></i>
                        <input class="form-control required" type="text" placeholder="Mã số thuế" name="masothue" id="masothue" value="{{$model->masothue}}">
                    </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-check"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Địa chỉ doanh nghiệp" name="diachidn" id="diachidn" value="{{$model->diachi}}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-phone"></i>
                        <input class="form-control placeholder-no-fix" type="tel" placeholder="Số điện thoại trụ sở" name="teldn" id="teldn" value="{{$model->tel}}">
                    </div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-fax"></i>
                        <input class="form-control placeholder-no-fix" type="tel" placeholder="Số fax trụ sở" name="faxdn" id="faxdn" value="{{$model->fax}}">
                    </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control required" type="text" placeholder="Email" name="emaildn" id="emaildn" value="{{$model->email}}">
                    </div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-check"></i>
                        <input class="form-control required" type="text" placeholder="Nơi đăng ký nộp thuế" name="noidknopthue" id="noidknopthue" value="{{$model->noidknopthue}}">
                    </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" name="cqcq" id="cqcq" required>
                        <option value="">--Chọn đơn vị quản lý--</option>
                        @foreach($cqcq as $tt)
                            <option value="{{$tt->maqhns}}" {{$model->cqcq == $tt->maqhns ? 'selected' : ''}}>{{$tt->tendv}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-file-pdf-o"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Số giấy phép đăng ký kinh doanh" name="giayphepkd" id="giayphepkd" value="{{$model->giayphepkd}}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-file"></i>
                        <input class="form-control required" type="text" placeholder="Link chia sẻ giấy đăng ký kinh doanh của doanh nghiệp" name="tailieu" id="tailieu" value="{{$model->tailieu}}">
                    </div>
                    <p class="help-block">
                        <span class="label label-success label-sm">
                        Help: </span>
                        <a target="_blank" href="http://help.csdlgia.vn/data/help/tienich/upfile/upfile.pdf">
                            Hướng dẫn cách chia sẻ giấy phép đăng ký kinh doanh </a>
                    </p>
                </div>
            </div>
        </div>

        <p>Thông tin đăng nhập</p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control required" type="text" autocomplete="off" placeholder="Username" name="username" id="username" value="{{$model->username}}">
                <span id="userror" style="color: red; font-weight: bold"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control required" type="password" autocomplete="off" id="password" placeholder="Password" name="password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control required" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" id="rpassword">
                </div>
            </div>
        </div>
        <div class="form-actions">
            <button id="register-back-btn" type="button" class="btn"><a href="{{url('search_register/show')}}">
                <i class="m-icon-swapleft"></i> Quay lại </a> </button>
            <button type="submit" id="register-submit-btn" class="btn blue pull-right" onclick="validate();">
                Thay đổi <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
    <!--/form-->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2016 &copy; LifeSoft <a href="" >Tiện ích hơn - Hiệu quả hơn</a>
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]-->
<script src="{{url('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{url('assets/global/plugins/excanvas.min.js')}}"></script>
<!--[endif]-->
<script src="{{url('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/pages/scripts/login-soft.js')}}" type="text/javascript"></script>
<!--Toastr-->
<script src="{{url('assets/global/plugins/bootstrap-toastr/toastr.min.js')}}"></script>
<!--End Toastr-->
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
        // init background slide images
        $.backstretch([
                    "{{url('assets/admin/pages/media/bg/3.jpg')}}",
                    "{{url('assets/admin/pages/media/bg/2.jpg')}}",
                    "{{url('assets/admin/pages/media/bg/1.jpg')}}",
                    "{{url('assets/admin/pages/media/bg/4.jpg')}}"
                ], {
                    fade: 1000,
                    duration: 8000
                }
        );
    });
</script>
<script>
    $('input[name="masothue"]').change(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'GET',
            url: '/checkrgmasothue',
            data: {
                _token: CSRF_TOKEN,
                masothue:$(this).val(),
                pl: 'DVLT'
            },
            success: function (respond) {
                //alert(respond);
                if(respond != 'ok'){
                    toastr.error("Bạn cần nhập lại mã số thuế", "Mã số thuế nhập vào đã tồn tại hoặc đã được đăng ký!!!");
                    $('input[name="masothue"]').val('');
                    $('input[name="masothue"]').focus();
                }else
                    toastr.success("Mã số thuế sử dụng được!", "Thành công!");
            }
        });
    });

    $('input[name="username"]').change(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'GET',
            url: '/checkrguser',
            data: {
                _token: CSRF_TOKEN,
                user:$(this).val(),
                pl: 'DVLT'
            },
            success: function (respond) {
                if(respond != 'ok'){
                    toastr.error("Bạn cần nhập lại tài khoản đăng ký", "Tài khoản đăng ký nhập vào đã tồn tại hoặc đã được đăng ký!!!");
                    $('input[name="username"]').val('');
                    $('#username').focus();
                }else
                    toastr.success("Tài khoản đăng ký sử dụng được!", "Thành công!");
            }

        });
    });
</script>
<script type="text/javascript">
    function validate(){
        var validator = $("#update_register").validate({
            rules: {
                tendn: "required",
                masothue:"required",
                diachidn:"required",
                emaildn:"required",
                noidknopthue:"required",
                tailieu: "required",
                password :"required",
                username:"required",
                cqcq:"required",
                rpassword:{
                    equalTo: "#password"
                }
            },
            messages: {
                tendn: "Nhập thông tin về doanh nghiệp!!!",
                masothue: "Nhập thông tin mã số thuế!!!",
                diachidn: "Nhập thông tin địa chỉ!!!",
                emaildn: "Nhập thông tin email!!!",
                noidknopthue: "Nhập thông tin nơi đăng ký nộp thuế!!!",
                tailieu: "Bạn cần chia sẻ giấy chứng nhận đăng ký kinh doanh!!!",
                username:"Nhập username đăng ký!!!",
                password :" Nhập mật khẩu!!!",
                cqcq:"Nhập thông tin cơ quan quản lý",
                rpassword :" Nhập lại mật khẩu không chính xác!!!!"
            }
        });
    }

</script>
</body>
<!-- END BODY -->
</html>