@extends('layouts.admin')
@section('content')
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
                    <!--<a href="https://www.wrappixel.com/templates/monsteradmin/"
                        class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to
                        Pro</a>-->
                        <a href="{{ route('admin.users.create') }}" class="btn btn-info text-white"> <i class="fas fa-user-plus"></i> Add User</a>
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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of Users</h4>
                        <div id="basicgrid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection