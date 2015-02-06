<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Banks & Assets Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />            
        <link rel="apple-touch-icon" href="{{asset('admin/ico/60.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/ico/76.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin/ico/120.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin/ico/152.png')}}">
        <link rel="shortcut icon" href="{{asset('admin/ico/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('admin/ico/favicon.ico')}}" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN Vendor CSS-->
        {{HTML::style('admin/plugins/pace/pace-theme-flash.css')}}
        {{HTML::style('admin/plugins/boostrapv3/css/bootstrap.min.css')}}
        {{HTML::style('admin/plugins/font-awesome/css/font-awesome.css')}}
        {{HTML::style('admin/plugins/jquery-scrollbar/jquery.scrollbar.css')}}
        {{HTML::style('admin/plugins/bootstrap-select2/select2.css')}}
        {{HTML::style('admin/plugins/switchery/css/switchery.min.css')}}
        {{HTML::style('admin/plugins/jquery-datatable/media/css/jquery.dataTables.css')}}
        {{HTML::style('admin/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}
        {{HTML::style('admin/plugins/datatables-responsive/css/datatables.responsive.css')}}

        <!-- BEGIN Pages CSS-->
        {{HTML::style('admin/css/pages-icons.css')}}
        {{HTML::style('admin/css/pages.css', ['class' => 'main-stylesheet'])}}

        <!--[if lte IE 9]>
            <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->
    </head>

    <body class="fixed-header" >            
        @include('admin.partials._sidebar')  
        <div class="page-container">
            <!-- START PAGE HEADER WRAPPER -->
            <!-- START HEADER -->
            <div class="header ">
                <!-- START MOBILE CONTROLS -->
                <!-- LEFT SIDE -->
                <div class="pull-left full-height visible-sm visible-xs">
                    <!-- START ACTION BAR -->
                    <div class="sm-action-bar">
                        <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
                            <span class="icon-set menu-hambuger"></span>
                        </a>
                    </div>
                    <!-- END ACTION BAR -->
                </div>
                <!-- RIGHT SIDE -->
                <div class="pull-right full-height visible-sm visible-xs">
                    <!-- START ACTION BAR -->
                    <div class="sm-action-bar">
                        <a href="#" class="btn-link" data-toggle="quickview" data-toggle-element="#quickview">
                            <span class="icon-set menu-hambuger-plus"></span>
                        </a>
                    </div>
                    <!-- END ACTION BAR -->
                </div>
                <!-- END MOBILE CONTROLS -->
                <div class=" pull-left sm-table">
                    <div class="header-inner">
                        <div class="brand inline">
                            <img src="{{asset('admin/img/logo.png')}}" alt="logo" data-src="{{asset('admin/img/logo.png')}}" data-src-retina="{{asset('admin/img/logo_2x.png')}}" width="93" height="25">
                        </div>
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
                            <li class="p-r-15 inline">
                                <div class="dropdown">
                                    <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                                        <span class="bubble"></span>
                                    </a>
                                    <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                        <div class="notification-panel">
                                            <!-- START Notification Body-->
                                            <div class="notification-body scrollable">
                                                <!-- START Notification Item-->
                                                <div class="notification-item  clearfix">
                                                    <div class="heading">
                                                        <a href="#" class="text-danger">
                                                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                            <span class="bold">98% Server Load</span>
                                                            <span class="fs-12 m-l-10">Take Action</span>
                                                        </a>
                                                        <span class="pull-right time">
                                                            2 mins ago
                                                        </span>
                                                    </div>
                                                    <div class="option">
                                                        <a href="#" class="mark"></a>
                                                    </div>
                                                </div>
                                                <!-- END Notification Item-->
                                            </div>
                                            <!-- END Notification Body-->
                                            <!-- START Notification Footer-->
                                            <div class="notification-footer text-center">
                                                <a href="#" class="">Read all notifications</a>
                                                <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                                    <i class="pg-refresh_new"></i>
                                                </a>
                                            </div>
                                            <!-- END Notification Footer-->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="p-r-15 inline">
                                <a href="#" class="icon-set clip "></a>
                            </li>
                            <li class="p-r-15 inline">
                                <a href="#" class="icon-set grid-box"></a>
                            </li>
                        </ul>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a> 
                    </div>
                </div>
                <div class=" pull-right">
                    <div class="header-inner">
                        <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
                    </div>
                </div>
                <div class=" pull-right">
                    <!-- START User Info-->
                    <div class="visible-lg visible-md m-t-10">
                        <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                            <span class="semi-bold">David</span>
                            <span class="text-master">Nest</span>
                        </div>
                        <div class="thumbnail-wrapper d32 circular inline m-t-5">
                            <img src="{{asset('admin/img/profiles/avatar.jpg')}}" alt="" data-src="{{asset('admin/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('admin/img/profiles/avatar2x.jpg')}}" width="32" height="32">
                        </div>
                    </div>
                    <!-- END User Info-->
                </div>
            </div>
            <!-- END HEADER -->
            <!-- END PAGE HEADER WRAPPER -->
            @yield('content')                
            <!--START QUICKVIEW -->
            <div id="quickview" class="quickview-wrapper" data-pages="quickview">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="">
                        <a href="#quickview-notes" data-toggle="tab">Notes</a>
                    </li>
                    <li>
                        <a href="#quickview-alerts" data-toggle="tab">Alerts</a>
                    </li>
                    <li class="active">
                        <a href="#quickview-chat" data-toggle="tab">Chat</a>
                    </li>
                </ul>
                <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- BEGIN Notes !-->
                    <div class="tab-pane fade  in no-padding" id="quickview-notes">
                        <div class="view-port clearfix quickview-notes" id="note-views">
                            <!-- BEGIN Note List !-->
                            <div class="view list" id="quick-note-list">
                                <div class="toolbar clearfix">
                                    <ul class="pull-right ">
                                        <li>
                                            <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
                                        </li>
                                    </ul>
                                    <button class="btn-remove-notes btn btn-xs btn-block" style="display:none"><i class="fa fa-times"></i> Delete</button>
                                </div>
                                <ul>
                                    <!-- BEGIN Note Item !-->
                                    <li data-noteid="1" data-navigate="view" data-view-port="#note-views" data-view-animation="push">
                                        <div class="left">
                                            <!-- BEGIN Note Action !-->
                                            <div class="checkbox check-warning no-margin">
                                                <input id="qncheckbox1" type="checkbox" value="1">
                                                <label for="qncheckbox1"></label>
                                            </div>
                                            <!-- END Note Action !-->
                                            <!-- BEGIN Note Preview Text !-->
                                            <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            <!-- BEGIN Note Preview Text !-->
                                        </div>
                                        <!-- BEGIN Note Details !-->
                                        <div class="right pull-right">
                                            <!-- BEGIN Note Date !-->
                                            <span class="date">12/12/14</span>
                                            <a href="#"><i class="fa fa-chevron-right"></i></a>
                                            <!-- END Note Date !-->
                                        </div>
                                        <!-- END Note Details !-->
                                    </li>
                                    <!-- END Note List !-->
                                </ul>
                            </div>
                            <!-- END Note List !-->
                            <div class="view note" id="quick-note">
                                <div>
                                    <ul class="toolbar">
                                        <li><a href="#" class="close-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-arrow_left"></i></a>
                                        </li>
                                        <li><a href="#" class="Bold"><i class="fa fa-bold"></i></a>
                                        </li>
                                        <li><a href="#" class="Italic"><i class="fa fa-italic"></i></a>
                                        </li>
                                        <li><a href="#" class=""><i class="fa fa-link"></i></a>
                                        </li>
                                    </ul>
                                    <div class="body">
                                        <div>
                                            <div class="top">
                                                <span>21st april 2014 2:13am</span>
                                            </div>
                                            <div class="content">
                                                <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Notes !-->
                    <!-- BEGIN Alerts !-->
                    <div class="tab-pane fade no-padding" id="quickview-alerts">
                        <div class="view-port clearfix" id="alerts">
                            <!-- BEGIN Alerts View !-->
                            <div class="view bg-white">
                                <!-- BEGIN View Header !-->
                                <div class="navbar navbar-default navbar-sm">
                                    <div class="navbar-inner">
                                        <!-- BEGIN Header Controler !-->
                                        <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                            <i class="pg-more"></i>
                                        </a>
                                        <!-- END Header Controler !-->
                                        <div class="view-heading">
                                            Notications
                                        </div>
                                        <!-- BEGIN Header Controler !-->
                                        <a href="#" class="inline action p-r-10 pull-right link text-master">
                                            <i class="pg-search"></i>
                                        </a>
                                        <!-- END Header Controler !-->
                                    </div>
                                </div>
                                <!-- END View Header !-->
                                <!-- BEGIN Alert List !-->
                                <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                                    <!-- BEGIN List Group !-->
                                    <div class="list-view-group-container">
                                        <!-- BEGIN List Group Header!-->
                                        <div class="list-view-group-header text-uppercase">
                                            Calendar
                                        </div>
                                        <!-- END List Group Header!-->
                                        <ul>
                                            <!-- BEGIN List Group Item!-->
                                            <li class="alert-list">
                                                <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                                <a href="javascript:;" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                                    <p class="col-xs-height col-middle">
                                                        <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                                                    </p>
                                                    <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12">
                                                        <span class="text-master">David Nester Birthday</span>
                                                    </p>
                                                    <p class="p-r-10 col-xs-height col-middle fs-12 text-right">
                                                        <span class="text-warning">Today <br></span>
                                                        <span class="text-master">All Day</span>
                                                    </p>
                                                </a>
                                                <!-- END Alert Item!-->
                                                <!-- BEGIN List Group Item!-->
                                            </li>
                                            <!-- END List Group Item!-->
                                        </ul>
                                    </div>
                                    <!-- END List Group !-->
                                </div>
                                <!-- END Alert List !-->
                            </div>
                            <!-- EEND Alerts View !-->
                        </div>
                    </div>
                    <!-- END Alerts !-->
                    <div class="tab-pane fade in active no-padding" id="quickview-chat">
                        <div class="view-port clearfix" id="chat">
                            <div class="view bg-white">
                                <!-- BEGIN View Header !-->
                                <div class="navbar navbar-default">
                                    <div class="navbar-inner">
                                        <!-- BEGIN Header Controler !-->
                                        <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                            <i class="pg-plus"></i>
                                        </a>
                                        <!-- END Header Controler !-->
                                        <div class="view-heading">
                                            Chat List
                                            <div class="fs-11">Show All</div>
                                        </div>
                                        <!-- BEGIN Header Controler !-->
                                        <a href="#" class="inline action p-r-10 pull-right link text-master">
                                            <i class="pg-more"></i>
                                        </a>
                                        <!-- END Header Controler !-->
                                    </div>
                                </div>
                                <!-- END View Header !-->
                                <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                                    <div class="list-view-group-container">
                                        <div class="list-view-group-header text-uppercase">
                                            a</div>
                                        <ul>
                                            <!-- BEGIN Chat User List Item  !-->
                                            <li class="chat-user-list clearfix">
                                                <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                                                    <span class="col-xs-height col-middle">
                                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                                            <img width="34" height="34" alt="" data-src-retina="{{asset('admin/img/profiles/1x.jpg')}}" data-src="{{asset('admin/img/profiles/1.jpg')}}" src="{{asset('admin/img/profiles/1x.jpg')}}" class="col-top">
                                                        </span>
                                                    </span>
                                                    <p class="p-l-10 col-xs-height col-middle col-xs-12">
                                                        <span class="text-master">ava flores</span>
                                                        <span class="block text-master hint-text fs-12">Hello there</span>
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- END Chat User List Item  !-->
                                        </ul>
                                    </div>
                                    <div class="list-view-group-container">
                                        <div class="list-view-group-header text-uppercase">b</div>
                                        <ul>
                                            <!-- BEGIN Chat User List Item  !-->
                                            <li class="chat-user-list clearfix">
                                                <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                                                    <span class="col-xs-height col-middle">
                                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                                            <img width="34" height="34" alt="" data-src-retina="{{asset('admin/img/profiles/2x.jpg')}}" data-src="{{asset('admin/img/profiles/1.jpg')}}" src="{{asset('admin/img/profiles/2x.jpg')}}" class="col-top">
                                                        </span>
                                                    </span>
                                                    <p class="p-l-10 col-xs-height col-middle col-xs-12">
                                                        <span class="text-master">bella mccoy</span>
                                                        <span class="block text-master hint-text fs-12">Hello there</span>
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- END Chat User List Item  !-->
                                            <!-- BEGIN Chat User List Item  !-->
                                            <li class="chat-user-list clearfix">
                                                <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                                                    <span class="col-xs-height col-middle">
                                                        <span class="thumbnail-wrapper d32 circular bg-success">
                                                            <img width="34" height="34" alt="" data-src-retina="{{asset('admin/img/profiles/3x.jpg')}}" data-src="{{asset('admin/img/profiles/3.jpg')}}" src="{{asset('admin/img/profiles/3x.jpg')}}" class="col-top">
                                                        </span>
                                                    </span>
                                                    <p class="p-l-10 col-xs-height col-middle col-xs-12">
                                                        <span class="text-master">bob stephens</span>
                                                        <span class="block text-master hint-text fs-12">Hello there</span>
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- END Chat User List Item  !-->
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- BEGIN Conversation View  !-->
                            <div class="view chat-view bg-white clearfix">
                                <!-- BEGIN Header  !-->
                                <div class="navbar navbar-default">
                                    <div class="navbar-inner">
                                        <a href="javascript:;" class="link text-master inline action p-l-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                            <i class="pg-arrow_left"></i>
                                        </a>
                                        <div class="view-heading">
                                            John Smith
                                            <div class="fs-11 hint-text">Online</div>
                                        </div>
                                        <a href="#" class="link text-master inline action p-r-10 pull-right ">
                                            <i class="pg-more"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- END Header  !-->
                                <!-- BEGIN Conversation  !-->
                                <div class="chat-inner" id="my-conversation">
                                    <!-- BEGIN From Me Message  !-->
                                    <div class="message clearfix">
                                        <div class="chat-bubble from-me">
                                            Hello there
                                        </div>
                                    </div>
                                    <!-- END From Me Message  !-->
                                    <!-- BEGIN From Them Message  !-->
                                    <div class="message clearfix">
                                        <div class="profile-img-wrapper m-t-5 inline">
                                            <img class="col-top" width="30" height="30" src="{{asset('admin/img/profiles/avatar_small.jpg')}}" alt="" data-src="{{asset('admin/img/profiles/avatar_small.jpg')}}" data-src-retina="{{asset('admin/img/profiles/avatar_small2x.jpg')}}">
                                        </div>
                                        <div class="chat-bubble from-them">
                                            Hey
                                        </div>
                                    </div>
                                    <!-- END From Them Message  !-->
                                    <!-- BEGIN From Me Message  !-->
                                    <div class="message clearfix">
                                        <div class="chat-bubble from-me">
                                            Did you check out Pages framework ?
                                        </div>
                                    </div>
                                    <!-- END From Me Message  !-->
                                    <!-- BEGIN From Me Message  !-->
                                    <div class="message clearfix">
                                        <div class="chat-bubble from-me">
                                            Its an awesome chat
                                        </div>
                                    </div>
                                    <!-- END From Me Message  !-->
                                    <!-- BEGIN From Them Message  !-->
                                    <div class="message clearfix">
                                        <div class="profile-img-wrapper m-t-5 inline">
                                            <img class="col-top" width="30" height="30" src="{{asset('admin/img/profiles/avatar_small.jpg')}}" alt="" data-src="{{asset('admin/img/profiles/avatar_small.jpg')}}" data-src-retina="{{asset('admin/img/profiles/avatar_small2x.jpg')}}">
                                        </div>
                                        <div class="chat-bubble from-them">
                                            Yea
                                        </div>
                                    </div>
                                    <!-- END From Them Message  !-->
                                </div>
                                <!-- BEGIN Conversation  !-->
                                <!-- BEGIN Chat Input  !-->
                                <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                                    <div class="row">
                                        <div class="col-xs-1 p-t-15">
                                            <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                        <div class="col-xs-8 no-padding">
                                            <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                                        </div>
                                        <div class="col-xs-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                                            <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Chat Input  !-->
                            </div>
                            <!-- END Conversation View  !-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICKVIEW-->
            <!-- START OVERLAY -->
            <div class="overlay" style="display: none" data-pages="search">
                <!-- BEGIN Overlay Content !-->
                <div class="overlay-content has-results m-t-20">
                    <!-- BEGIN Overlay Header !-->
                    <div class="container-fluid">
                        <!-- BEGIN Overlay Logo !-->
                        <img class="overlay-brand" src="{{asset('admin/img/logo.png')}}" alt="logo" data-src="{{asset('admin/img/logo.png')}}" data-src-retina="{{asset('admin/img/logo.png')}}" width="78" height="22">
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
                                                <img width="50" height="50" src="{{asset('admin/img/profiles/avatar.jpg')}}" data-src="{{asset('admin/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('admin/img/profiles/avatar.jpg')}}" alt="">
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
            <script>
                var BASE_URL = "{{URL::to('/');}}";
            </script>
            {{HTML::script('admin/plugins/pace/pace.min.js')}}
            {{HTML::script('admin/plugins/jquery/jquery-1.8.3.min.js')}}
            {{HTML::script('admin/plugins/modernizr.custom.js')}}
            {{HTML::script('admin/plugins/jquery-ui/jquery-ui.min.js')}}
            {{HTML::script('admin/plugins/boostrapv3/js/bootstrap.min.js')}}
            {{HTML::script('admin/plugins/jquery/jquery-easy.js')}}
            {{HTML::script('admin/plugins/jquery-unveil/jquery.unveil.min.js')}}
            {{HTML::script('admin/plugins/jquery-bez/jquery.bez.min.js')}}
            {{HTML::script('admin/plugins/jquery-ios-list/jquery.ioslist.min.js')}}
            {{HTML::script('admin/plugins/imagesloaded/imagesloaded.pkgd.min.js')}}
            {{HTML::script('admin/plugins/imagesloaded/imagesloaded.pkgd.min.js')}}
            {{HTML::script('admin/plugins/jquery-actual/jquery.actual.min.js')}}
            {{HTML::script('admin/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}         
            {{HTML::script('admin/plugins/bootstrap-select2/select2.min.js')}}
            {{HTML::script('admin/plugins/classie/classie.js')}}
            {{HTML::script('admin/plugins/switchery/js/switchery.min.js')}}
            {{HTML::script('admin/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}
            <!-- END VENDOR JS -->

            <!-- BEGIN CORE TEMPLATE JS -->
            {{HTML::script('admin/js/pages.js')}}
            {{HTML::script('admin/js/pages.email.js')}}
            <!-- END CORE TEMPLATE JS -->

            <!-- BEGIN PAGE LEVEL JS -->
            {{HTML::script('admin/js/scripts.js')}}
            <!-- END PAGE LEVEL JS -->
    </body>
</html>