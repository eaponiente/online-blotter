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
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="mt-4"> <img src="../assets/images/users/5.jpg"
                                class="rounded-circle" width="150" />
                            <h4 class="card-title mt-2">Hanna Gover</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link">
                                        <i class="icon-people" aria-hidden="true"></i>
                                        <span class="font-normal">254</span>
                                    </a></div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link">
                                        <i class="icon-picture" aria-hidden="true"></i>
                                        <span class="font-normal">54</span>
                                    </a></div>
                            </div>
                            <form class="form">
                                <div class="row mt-4">
                                    <div class="form-group">
                                        <label class="col-form-label col-md-4">Upload photo:</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2">
                            <div class="form-group">
                                <label class="col-md-12 mb-0">First Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Middle Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Last Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Username</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="password"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control ps-0 form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Position</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Station</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection