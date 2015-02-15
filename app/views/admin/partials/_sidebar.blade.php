<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" data-pages="sidebar">
    <div id="appMenu" class="sidebar-overlay-slide from-top">
    </div>
    <!-- BEGIN SIDEBAR HEADER -->
    <div class="sidebar-header">
        <img src="{{asset('admin/img/ba-logo-white-long.png')}}" alt="logo" class="brand" data-src="{{asset('admin/img/ba-logo-white-long.png')}}" data-src-retina="{{asset('admin/img/ba-logo-white-long.png')}}" width="108" height="25">
        <div class="sidebar-header-controls">
            <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link" type="button"><i class="fa fa-angle-down fs-16"></i></button>
            <button data-toggle-pin="sidebar" class="btn btn-link visible-lg-inline" type="button"><i class="fa fs-12"></i></button>
        </div>
    </div>
    <!-- END SIDEBAR HEADER -->
    <!-- BEGIN SIDEBAR MENU -->
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30 {{ (Request::is('administrator') ? 'open' : '') }}">                                        
                <a href="{{ URL::route('administrator.dashboard') }}" class="detailed">
                    <span class="title">Home</span>
                    <span class="details">{{ Request::path() }}</span>                         
                </a>
                <span class="icon-thumbnail "><i class="pg-home"></i>
                </span>
            </li>
            <li class="{{ (Request::is('administrator/user*') ? 'open' : '') }}">                                        
                <a href="{{ URL::route('administrator.user.index') }}" class="detailed">
                    <span class="title">Users</span>                        
                </a>
                <span class="icon-thumbnail "><i class="fa fa-user"></i>
                </span>
            </li>                                 
            <li class="{{ (Request::is('administrator/messages*') ? 'open' : '') }}">                                        
                <a href="{{ URL::route('administrator.messages') }}" class="detailed">
                    <span class="title">Messages</span>
                    <span class="details">{{$messages_counter}} Unread</span>                      
                </a>
                <span class="icon-thumbnail "><i class="pg-mail"></i>
                </span>
            </li>               
            <li class="{{ (Request::is('administrator/contacts*') ? 'open' : '') }}">                                        
                <a href="{{ URL::route('administrator.contact.index') }}" class="detailed">
                    <span class="title">Contacts</span>                        
                </a>
                <span class="icon-thumbnail "><i class="pg-contact_book"></i>
                </span>
            </li> 
            <li class="">
                <a href="javascript:;">
                    <span class="title">Assets</span>
                    <span class=" arrow"></span>
                </a>
                <span class="icon-thumbnail"><i class="fa fa-building"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="color.html">Villas</a>
                        <span class="icon-thumbnail">v</span>
                    </li>
                    <li class="">
                        <a href="typography.html">Lands</a>
                        <span class="icon-thumbnail">l</span>
                    </li>
                    <li class="">
                        <a href="icons.html">Offices</a>
                        <span class="icon-thumbnail">o</span>
                    </li>
                    <li class="">
                        <a href="buttons.html">Industrials</a>
                        <span class="icon-thumbnail">i</span>
                    </li>
                    <li class="">
                        <a href="notifications.html">Residential</a>
                        <span class="icon-thumbnail">r</span>
                    </li>                    
                </ul>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->