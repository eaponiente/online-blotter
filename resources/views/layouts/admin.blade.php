<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Davao Online Blotter</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ url('assets/plugins/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/style.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/custom.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ url('assets/images/logo.png')}}" alt="homepage" width="50" class="dark-logo" />
                            Davao Online Blotter
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!--<span class="logo-text">
                            <!-- dark Logo text -->
                            <!--<img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />

                        </span>-->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark show" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> 
                                <i class="mdi mdi-bell"></i>
                                <span class="counter counter-lg">{{ $unreadReports }}</span>
                            </a>

                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ url('assets/images/users/1.jpg') }}" alt="user" class="profile-pic me-2">{{ auth()->user()->fullname }}
                            </a>
                            <!--<ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>-->
                            <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 bg-info text-white mb-2">
                                    <div class=""><img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle" width="60"></div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white">Marken Doe</h4>
                                        <p class=" mb-0">deo@gmail.com</p>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out feather-sm text-danger me-1 ms-1"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-2"><a href="#" class="btn d-block w-100 btn-info rounded-pill">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->segment(2) == 'reports' ? 'active' : '' }}" href="{{ route('reports.index') }}" aria-expanded="false">
                                <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                                <span class="hide-menu">Reports</span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link <?=request()->segment(2) === 'blotters' || request()->segment(2) === 'details' ? 'active' : ''?>" href="{{ route('admin.statistics.index') }}" aria-expanded="false">
                                <i class="me-3 fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Statistics</span>
                            </a>
                        </li>
                        <!--<li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/monsteradmin/"
                                class="btn btn-danger text-white mt-4" target="_blank">Upgrade to
                                Pro</a>
                        </li>-->
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">
                            <?php
                                switch(request()->segment(2)) {
                                    case "reports":
                                        echo "Reports";
                                        break;
                                    case "blotters":
                                    case "details":
                                        echo "Incident Reports";
                                        break;
                                }
                            ?>
                        </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                    <?php
                                        switch(request()->segment(2)) {
                                            case "reports":
                                                echo "Reports";
                                                break;
                                            case "blotters":
                                            case "details":
                                                echo "Incident Reports";
                                                break;
                                        }
                                    ?>
                                    </li>
                                    <?php
                                        if(request()->segment(2) === "details") {
                                    ?>
                                            <li class="breadcrumb-item active" aria-current="page">View Details</li>
                                    <?php
                                        }
                                    ?>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <?php
                                if (request()->segment(2) === "details") {
                            ?>
                                <h4>Control No. 119087992</h4>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2021 Davao Online Blotter by <a href="">Parokya ni Edgar</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('js/custom.js') }}"></script>
    <!--flot chart-->
    <script src="{{ url('assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ url('js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>