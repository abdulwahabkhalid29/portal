<!-- ========== App Menu ========== -->

<div class="app-menu navbar-menu">

    <!-- LOGO -->

    <div class="navbar-brand-box">

        <!-- Dark Logo-->

        <a href="{{ route('home') }}" class="logo logo-dark">

            <span class="logo-sm">

                <img src="assets/images/logo-sm.png" alt="" height="22">

            </span>

            <span class="logo-lg">

                <img src="{{ asset('') }}assets/images/baws-logo-white.png" alt="" height="50">

            </span>

        </a>

        <!-- Light Logo-->

        <a href="{{ route('home') }}" class="logo logo-light">

            <span class="logo-sm">

                <img src="assets/images/logo-sm.png" alt="" height="22">

            </span>

            <span class="logo-lg">

                <img src="{{ asset('') }}assets/images/baws-logo-white.png" alt="" height="50">

            </span>

        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">

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

                    <a class="nav-link menu-link" href="{{ route('home') }}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards1">

                        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>

                    </a>


                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">

                    <a class="nav-link menu-link" href="#sidebarApps2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps2">

                        <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Membership</span>

                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps2">

                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">

                                <a href="{{ route('member.index') }}" class="nav-link" data-key="t-calendar"> View All </a>

                            </li>

                            <li class="nav-item">

                                <a href="{{ route('member.create') }}" class="nav-link" data-key="t-calendar"> Create </a>

                            </li>

                        </ul>

                    </div>

                </li>


                <li class="nav-item">

                    <a class="nav-link menu-link" href="#sidebarApps5" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps5">

                        <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Businesses</span>

                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps5">

                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">

                                <a href="{{ route('admin.business.index') }}" class="nav-link" data-key="t-calendar"> View All </a>

                            </li>

                            <li class="nav-item">

                                <a href="{{ route('admin.business.create') }}" class="nav-link" data-key="t-calendar"> Add New </a>

                            </li>

                        </ul>

                    </div>

                </li>

                <li class="nav-item">

                    <a class="nav-link menu-link" href="#sidebarApps7" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps7">

                        <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Jobs</span>

                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps7">

                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">

                                <a href="{{ route('admin.job.index') }}" class="nav-link" data-key="t-calendar"> View All </a>

                            </li>

                            <li class="nav-item">

                                <a href="{{ route('admin.job.create') }}" class="nav-link" data-key="t-calendar"> Post a Job </a>

                            </li>

                        </ul>

                    </div>

                </li>


                <li class="nav-item">

                    <a class="nav-link menu-link" href="#sidebarApps8" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps7">

                        <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Job Seekers</span>

                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps8">

                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">

                                <a href="{{ route('admin.job-seeker.index') }}" class="nav-link" data-key="t-calendar"> View All </a>

                            </li>

                            <li class="nav-item">

                                <a href="{{ route('admin.job-seeker.create') }}" class="nav-link" data-key="t-calendar"> Add Job Seeker </a>

                            </li>

                        </ul>

                    </div>

                </li>


                <li class="nav-item">

                    <a class="nav-link menu-link" href="#sidebarApps3" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps3">

                        <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Fees</span>

                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps3">

                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">

                                <a href="{{ route('admin.fees.index') }}" class="nav-link" data-key="t-calendar"> View All </a>

                            </li>

                            <li class="nav-item">

                                <a href="{{ route('admin.fees.create') }}" class="nav-link" data-key="t-calendar"> Create </a>

                            </li>

                        </ul>

                    </div>

                </li>



            </ul>

        </div>

        <!-- Sidebar -->

    </div>



    <div class="sidebar-background"></div>

</div>

<!-- Left Sidebar End -->