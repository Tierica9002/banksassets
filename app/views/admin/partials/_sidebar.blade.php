<!-- BEGIN SIDEBAR -->
    <div class="page-sidebar" data-pages="sidebar">
      <div id="appMenu" class="sidebar-overlay-slide from-top">
      </div>
        <!-- BEGIN SIDEBAR HEADER -->
        <div class="sidebar-header">
            <img src="{{asset('admin/assets/img/logo_white.png')}}" alt="logo" class="brand" data-src="{{asset('admin/assets/img/logo_white.png')}}" data-src-retina="{{asset('admin/assets/img/logo_white_2x.png')}}" width="93" height="25">
           <div class="sidebar-header-controls">
            <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" type="button"><i class="fa fa-angle-down fs-16"></i></button>
            <button data-toggle-pin="sidebar" class="btn btn-link visible-lg-inline" type="button"><i class="fa fs-12"></i></button>
          </div>
        </div>
        <!-- END SIDEBAR HEADER -->
        <!-- BEGIN SIDEBAR MENU -->
        <div class="sidebar-menu">
            <ul class="menu-items">
                <li class="m-t-30">                                        
                    <a href="{{ URL::route('administrator.dashboard') }}" class="detailed">
                        <span class="title">Home</span>                        
                    </a>
                    <span class="icon-thumbnail "><i class="pg-home"></i>
                    </span>
                </li>
                <li class>                                        
                    <a href="{{ URL::route('administrator.user.index') }}" class="detailed">
                        <span class="title">Users</span>                        
                    </a>
                    <span class="icon-thumbnail "><i class="fa fa-user"></i>
                    </span>
                </li>           
                <li class>                                        
                    <a href="{{ URL::route('administrator.complex.index') }}" class="detailed">
                        <span class="title">Complexes</span>                        
                    </a>
                    <span class="icon-thumbnail "><i class="pg-mail"></i>
                    </span>
                </li>               
                <li class="m-t-30">                                        
                    <a href="{{ URL::route('administrator.message.index') }}" class="detailed">
                        <span class="title">Messages</span>                        
                    </a>
                    <span class="icon-thumbnail "><i class="pg-mail"></i>
                    </span>
                </li>               
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->