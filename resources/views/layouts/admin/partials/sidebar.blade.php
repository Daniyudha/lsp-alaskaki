<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard.admin') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
              
                <li>
                    <a href="{{ route('registrant.index') }}" class="waves-effect">
                        <i class="mdi mdi-google-pages"></i>
                        <span>Data Registrant</span>
                    </a>
                </li>
                <li class="menu-title">Alat</li>
                <li>
                    <a href="{{ route('logout') }}" class=" waves-effect">
                        <i class="mdi mdi-logout"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
