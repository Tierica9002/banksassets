<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Pages - Admin Dashboard UI Kit</title>
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
        <div class="register-container full-height sm-p-t-30">
            <div class="container-sm-height full-height">
                <div class="row row-sm-height">
                    <div class="col-sm-12 col-sm-height col-middle">
                        <img src="{{asset('admin/img/logo.png')}}" alt="logo" data-src="{{asset('admin/img/logo.png')}}" data-src-retina="{{asset('admin/img/logo_2x.png')}}" width="78" height="22">
                        <h3>Pages makes it easy to enjoy what matters the most in your life</h3>
                        <p>
                            <small>
                                Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
                            </small>
                        </p>
                        <form id="form-register" class="p-t-15" role="form" action="index.html">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>First Name</label>
                                        <input type="text" name="fname" placeholder="John" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Last Names</label>
                                        <input type="text" name="lname" placeholder="Smith" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Pages User name</label>
                                        <input type="text" name="uname" placeholder="yourname.pages.com (this can be changed later)" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Password</label>
                                        <input type="password" name="pass" placeholder="Minimum of 4 Charactors" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="We will send loging details to you" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-10">
                                <div class="col-md-6">
                                    <p>I agree to the <a href="#" class="text-info small">Pages Terms</a> and <a href="#" class="text-info small">Privacy</a>.</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#" class="text-info small">Help? Contact Support</a>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" full-width">
            <div class="register-container m-b-10 clearfix">
                <div class="inline pull-left">
                    <img src="{{asset('admin/img/demo/pages_icon.png')}}" alt="" class="m-t-5 " data-src="{{asset('admin/img/demo/pages_icon.png')}}" data-src-retina="{{asset('admin/img/demo/pages_icon_2x.png')}}" width="60" height="60">
                </div>
                <div class="col-md-10 m-t-15">
                    <p class="hinted-text small inline ">No part of this website or any of its contents may be reproduced, copied, modified or adapted, without the prior written consent of the author, unless otherwise indicated for stand-alone materials.</p>
                </div>
            </div>
        </div>
        <!-- START OVERLAY -->
        <div class="overlay hide" data-pages="search">
            <!-- BEGIN Overlay Content !-->
            <div class="overlay-content has-results m-t-20">
                <!-- BEGIN Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Logo !-->
                    <img class="overlay-brand" src="{{asset('admin/img/logo.png')}}" alt="logo" data-src="{{asset('admin/img/logo.png')}}" data-src-retina="{{asset('admin/img/logo_2x.png')}} width="78" height="22">
                    <!-- END Overlay Logo !-->
                    <!-- BEGIN Overlay Close !-->
                    <a href="#" class="close-icon-light overlay-close text-black fs-16">
                        <i class="pg-close"></i>
                    </a>
                    <!-- END Overlay Close !-->
                </div>
                <!-- END Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Controls !-->
                    <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
                    <br>
                    <div class="inline-block">
                        <div class="checkbox right">
                            <input id="checkboxn" type="checkbox" value="1" checked="checked">
                            <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                        </div>
                    </div>
                    <div class="inline-block m-l-10">
                        <p class="fs-13">Press enter to search</p>
                    </div>
                    <!-- END Overlay Controls !-->
                </div>
                <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
                <div class="container-fluid">
                    <span>
                        <strong>suggestions :</strong>
                    </span>
                    <span id="overlay-suggestions"></span>
                    <br>
                    <div class="search-results m-t-40">
                        <p class="bold">Pages Search Results</p>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div>
                                            <img width="50" height="50" src="{{asset('admin/img/profiles/avatar.jpg')}}" data-src="{{asset('admin/img/profiles/avatar.jpg')}}" data-src-retina="a{{asset('admin/img/profiles/avatar2x.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                        <p class="hint-text">via john smith</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div>T</div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                        <p class="hint-text">via pages</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div><i class="fa fa-headphones large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                        <p class="hint-text">via pagesmix</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                            </div>
                            <div class="col-md-6">
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                        <div><i class="fa fa-facebook large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                        <p class="hint-text">via facebook</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                        <div><i class="fa fa-twitter large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                        <p class="hint-text">via twitter</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                        <div><i class="fa fa-google-plus large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                        <p class="hint-text">via google plus</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Overlay Search Results !-->
            </div>
            <!-- END Overlay Content !-->
        </div>
        <!-- END OVERLAY -->
        <!-- BEGIN VENDOR JS -->
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
                $('#form-register').validate()
            })
        </script>
    </body>
</html>