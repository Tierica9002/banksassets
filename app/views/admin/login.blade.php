<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Banks & Assets - Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="apple-touch-icon" href="{{asset('admin/ico/60.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/ico/76.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin/ico/120.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin/ico/152.png')}}">
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta content="" name="description" />
        <meta content="" name="author" />
        {{HTML::style('admin/plugins/pace/pace-theme-flash.css')}}
        {{HTML::style('admin/plugins/boostrapv3/css/bootstrap.min.css')}}
        {{HTML::style('admin/plugins/font-awesome/css/font-awesome.css')}}
        {{HTML::style('admin/plugins/jquery-scrollbar/jquery.scrollbar.css')}}
        {{HTML::style('admin/plugins/bootstrap-select2/select2.css')}}
        {{HTML::style('admin/plugins/switchery/css/switchery.min.css')}}
        {{HTML::style('admin/css/pages-icons.css')}}
        {{HTML::style('admin/css/pages.css', ['class' => 'main-stylesheet'])}}
        <!--[if lte IE 9]>
            <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->    
    </head>
    <body class="fixed-header   ">
        <!-- START PAGE-CONTAINER -->
        <div class="login-wrapper ">
            <!-- START Login Background Pic Wrapper-->
            <div class="bg-pic">
                <!-- START Background Pic-->
                <img src="{{asset('admin/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}" data-src="{{asset('admin/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}" data-src-retina="{{asset('admin/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}" alt="" class="lazy">
                <!-- END Background Pic-->
                <!-- START Background Caption-->
                <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                    <h2 class="semi-bold text-white">
                        Pages make it easy to enjoy what matters the most in the life</h2>
                    <p class="small">
                        images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © 2013-2014 REVOX.
                    </p>
                </div>
                <!-- END Background Caption-->
            </div>
            <!-- END Login Background Pic Wrapper-->
            <!-- START Login Right Container-->
            <div class="login-container bg-white">
                <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                    <img src="{{asset('admin/img/logo.png')}}" alt="logo" data-src="{{asset('admin/img/logo.png')}}" data-src-retina="{{asset('admin/img/logo_2x.png')}}" width="78" height="22">
                    <p class="p-t-35">Sign into your pages account</p>
                    <!-- START Login Form -->                      
                    {{Form::open(['route' => 'administrator.dologin', 'method' => 'post', 'class' => 'p-t-15', 'role' => 'form'])}}
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        {{Form::label('username', 'Login')}}
                        <div class="controls">
                            {{Form::text('username', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => ''])}}
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        {{Form::label('passwprd', 'Password')}}
                        <div class="controls">
                            {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Credentials', 'required' => ''])}}
                        </div>
                    </div>
                    <!-- START Form Control-->
                    <div class="row">
                        <div class="col-md-6 no-padding">
                            <div class="checkbox ">
                                {{Form::checkbox('remember-me', '1', false, ['id' => 'checkbox1'])}}
                                {{Form::label('checkbox1', 'Keep Me Signed In')}}
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="#" class="text-info small">Help? Contact Support</a>
                        </div>
                    </div>
                    <!-- END Form Control-->
                    {{Form::button('Sign In',['class' => 'btn btn-primary btn-cons m-t-10', 'type' => 'submit'])}}
                    {{$errors->first('name', '<label id="uname-error" class="error" for="uname">:message</label>')}}
                    {{Form::close()}}
                    <!--END Login Form-->
                    <div class="pull-bottom sm-pull-bottom">
                        <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                            <div class="col-sm-3 col-md-2 no-padding">
                                <img alt="" class="m-t-5" data-src="{{asset('admin/img/demo/pages_icon.png')}}" data-src-retina="{{asset('admin/img/demo/pages_icon_2x.png')}}" height="60" src="{{asset('admin/img/demo/pages_icon.png')}}" width="60">
                            </div>
                            <div class="col-sm-9 no-padding m-t-10">
                                <p><small>
                                        Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Login Right Container-->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- BEGIN VENDOR JS -->    
        {{HTML::script('admin/plugins/pace/pace.min.js')}}
        {{HTML::script('admin/plugins/jquery/jquery-1.8.3.min.js')}}
        {{HTML::script('admin/plugins/modernizr.custom.js')}}
        {{HTML::script('admin/plugins/jquery-ui/jquery-ui.min.js')}}
        {{HTML::script('admin/plugins/boostrapv3/js/bootstrap.min.js')}}
        {{HTML::script('admin/plugins/jquery/jquery-easy.js')}}
        {{HTML::script('admin/plugins/jquery-unveil/jquery.unveil.min.js')}}
        {{HTML::script('admin/plugins/jquery-bez/jquery.bez.min.js')}}
        {{HTML::script('admin/plugins/jquery-ios-list/jquery.ioslist.min.js')}}
        {{HTML::script('admin/plugins/jquery-actual/jquery.actual.min.js')}}
        {{HTML::script('admin/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}
        {{HTML::script('admin/plugins/bootstrap-select2/select2.min.js')}}
        {{HTML::script('admin/plugins/classie/classie.js')}}
        {{HTML::script('admin/plugins/switchery/js/switchery.min.js')}}
        {{HTML::script('admin/plugins/jquery-validation/js/jquery.validate.min.js')}}
        <!-- END VENDOR JS -->
        <!-- BEGIN CORE TEMPLATE JS -->
        {{HTML::script('admin/js/pages.js')}}
        <!-- END CORE TEMPLATE JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        {{HTML::script('admin/js/scripts.js')}}
        <!-- END PAGE LEVEL JS -->
        <script>
            $(function()
            {
                $('#form-login').validate()
            })
        </script>
    </body>
</html>