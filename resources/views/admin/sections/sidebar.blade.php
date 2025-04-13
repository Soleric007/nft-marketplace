<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/admin/assets/images/mylogo-8.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="/admin/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <h1 class="text-xl md:text-[2rem] font-bold text-white mt-4">DigitalVault</h1>
                {{-- <img src="/templates/assets/images/logo/logo-8.png" alt="" height="17"> --}}
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    {{-- <a class="nav-link menu-link" href="{{ route('admin.add.category') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Add Category</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ route('admin.createproduct') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Create Product</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="{{ route('admin.nfts') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">NFTs</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ route('admin.wallets') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Wallets</span>
                    </a>
                    {{-- <a class="nav-link menu-link" href="{{ route('admin.productdetails') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Products Details</span>
                    </a> --}}
                    <a class="nav-link menu-link" href="{{ route('admin.deposits') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Deposits</span>
                    </a>

                    <a class="nav-link menu-link" href="{{ route('admin.withdrawals') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Withdrawals</span>
                    </a>
                    <a class="nav-link menu-link" href="{{ route('admin.users') }}"
                        aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Users</span>
                    </a>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
