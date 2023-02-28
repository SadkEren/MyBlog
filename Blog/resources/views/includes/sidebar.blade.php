<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Panel</div>
        </a>


        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Addons
        </div>

   

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/posts')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Posts</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/contactAbout')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Contact</span></a>
        </li>

    
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->
