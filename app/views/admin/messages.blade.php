@extends('layouts.admin.main')
@section('content')
<div class="page-container">
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
            <a href="#" class="toggle-email-sidebar">Inbox <span class="text-info">(12)</span> <span class="caret"></span></a>
            <div class="brand inline">
              <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            </div>
            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
              <li class="p-r-15 inline">
                <div class="dropdown">
                  <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                    <span class="bubble"></span>
                  </a>
                  <!-- START Notification Dropdown -->
                  <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                    <!-- START Notification -->
                    <div class="notification-panel">
                      <!-- START Notification Body-->
                      <div class="notification-body scrollable">
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <!-- START Notification Item-->
                          <div class="heading open">
                            <a href="#" class="text-complete">
                              <i class="pg-map fs-16 m-r-10"></i>
                              <span class="bold">Carrot Design</span>
                              <span class="fs-12 m-l-10">David Nester</span>
                            </a>
                            <div class="pull-right">
                              <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                <div><i class="fa fa-angle-left"></i>
                                </div>
                              </div>
                              <span class=" time">few sec ago</span>
                            </div>
                            <div class="more-details">
                              <div class="more-details-inner">
                                <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br> 
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                                <p class="small hint-text">
                                  Commented on john Smiths wall.
                                  <br> via pages framework.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- END Notification Item-->
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- START Notification Body-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-danger">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">98% Server Load</span>
                              <span class="fs-12 m-l-10">Take Action</span>
                            </a>
                            <span class="pull-right time">2 mins ago</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-warning-dark">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">Warning Notification</span>
                              <span class="fs-12 m-l-10">Buy Now</span>
                            </a>
                            <span class="pull-right time">yesterday</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <div class="heading">
                            <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                              <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
                            </div>
                            <a href="#" class="text-complete">
                              <span class="bold">Revox Design Labs</span>
                              <span class="fs-12 m-l-10">Owners</span>
                            </a>
                            <span class="pull-right time">11:00pm</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
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
                      <!-- START Notification Footer-->
                    </div>
                    <!-- END Notification -->
                  </div>
                  <!-- END Notification Dropdown -->
                </div>
              </li>
              <li class="p-r-20 inline">
                <a href="#" id="mark-email" class="mark-email text-info m-l-20"><i class="fa fa-pencil fs-16"></i></a>
              </li>
            </ul>
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
              <span class="semi-bold">David</span> <span class="text-master">Nest</span>
            </div>
            <div class="thumbnail-wrapper d32 circular inline m-t-5">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper full-height">
        <!-- START PAGE CONTENT -->
        <div class="content full-height">
          <!-- START EMAIL -->
          <div class="email-wrapper">
            <!-- START EMAIL SIDEBAR MENU-->
            <nav class="email-sidebar padding-30">             
              <p class="menu-title">BROWSE</p>
              <ul class="main-menu">
                <li class="active">
                  <a href="#">
                    <span class="title"><i class="pg-inbox"></i> Inbox</span>
                    <span class="badge pull-right">{{$messages_counter}}</span>
                  </a>
                </li>                                              
              </ul>                              
            </nav>
            <!-- END EMAL SIDEBAR MENU -->
            <!-- START EMAILS LIST -->
            <div class="email-list b-r b-grey"> <a class="email-refresh" href="#"><i class="fa fa-refresh"></i></a>
              <div id="emailList">
<!--                 START EMAIL LIST SORTED BY DATE 
                 END EMAIL LIST SORTED BY DATE -->
              </div>
            </div>
            <!-- END EMAILS LIST -->
            <!-- START OPENED EMAIL -->
            <div class="email-opened">
              <div class="no-email">
                <h1>No email has been selected</h1>
              </div>
              <div class="email-content-wrapper">
                <div class="actions-wrapper bg-master-lightest">
                  <ul class="actions no-margin p-l-20">
                    <li class="visible-sm-inline-block visible-xs-inline-block">
                      <a href="#" class="email-list-toggle"><i class="fa fa-angle-left"></i> All Inboxes
                                </a>
                    </li>
                    <li class="no-padding hidden-md hidden-xs"><a href="#" class="text-info">Reply</a>
                    </li>
                    <li class="no-padding hidden-md hidden-xs"><a href="#">Reply all</a>
                    </li>
                    <li class="no-padding hidden-md hidden-xs"><a href="#">Forward</a>
                    </li>
                    <li class="no-padding hidden-md hidden-xs"><a href="#">Mark as read</a>
                    </li>
                    <li class="no-padding hidden-md hidden-xs"><a href="#" class="text-danger">Delete</a>
                    </li>
                  </ul>
                  <div class="dropdown actions-dropdown visible-md-inline-block visible-xs-inline-block pull-right m-t-10 m-r-10 ">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu " role="menu" aria-labelledby="dropdownMenu1">
                      <li class="no-padding"><a href="#" class="text-info">Reply</a>
                      </li>
                      <li class="no-padding"><a href="#">Reply all</a>
                      </li>
                      <li class="no-padding"><a href="#">Forward</a>
                      </li>
                      <li class="no-padding"><a href="#">Mark as read</a>
                      </li>
                      <li class="no-padding"><a href="#" class="text-danger">Delete</a>
                      </li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="email-content">
                  <div class="email-content-header">
                    <div class="thumbnail-wrapper d48 circular bordered">
                      <img width="40" height="40" alt="" data-src-retina="assets/img/profiles/avatar2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar2x.jpg">
                    </div>
                    <div class="sender inline m-l-10">
                      <p class="name no-margin bold">
                        David Nester
                      </p>
                      <p class="datetime no-margin">Today at 1:23pm</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="subject m-t-20 m-b-20 semi-bold">
                      Pages compatibility level Increased,compatible for everyone!. Exclusively on themeforest.
                    </div>
                    <div class="fromto">
                      <div class="pull-left">
                        <div class="btn-group dropdown-default">
                          <a class="btn dropdown-toggle btn-small btn-rounded" data-toggle="dropdown" href="#">
                                        David Nester
                                        <span class="caret"></span>
                                        </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Friend</a>
                            </li>
                            <li><a href="#">Report</a>
                            </li>
                          </ul>
                        </div>
                        <label class="inline">
                          <span class="muted">&nbsp;&nbsp;to</span>
                          <span class=" small-text">johnsmith@skyace.com</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="email-content-body m-t-20">
                    <p>Thank you for taking the time to meet with me and other representatives of the last week regarding the challenges facing public transportation, especially. We enjoyed meeting with you and . I’m glad we had the opportunity to discuss an issue that affects so many people in [city/state/community]. We especially appreciate your commitment to [describe any commitment made by the official].</p>
                    <p>The [coalition name] believes that public transportation is vital to quality of life of our community. As we discussed …</p>
                    <p>Our coalition would greatly appreciate your support in ensuring that public transportation is widely available to all who need it – especially the people living in . On behalf of all our members and the thousands of citizens they represent, I want to thank you for taking the time out of your busy schedule to discuss this important matter.</p>
                  </div>
                  <div class="wysiwyg5-wrapper b-a b-grey m-t-30">
                    <textarea class="email-reply" placeholder="Reply"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- END OPENED EMAIL -->
            <!-- START COMPOSE BUTTON FOR TABS -->
            <div class="compose-wrapper visible-xs">
              <a class="compose-email text-info pull-right m-r-10 m-t-10"><i class="fa fa-pencil-square-o"></i></a>
            </div>
            <!-- END COMPOSE BUTTON -->
          </div>
          <!-- END EMAIL -->
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
@stop