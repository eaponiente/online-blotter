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

            <!-- Column -->
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal form-material mx-2" method="POST" action="{{ isset($edit) ? route('users.update', [$edit->id]) : route('users.store') }}">
                            {{ csrf_field() }}
                            {{ isset($edit) ? method_field('PUT'): method_field('POST') }}
                            <div class="form-group">
                                <label class="col-md-12 mb-0">First Name</label>
                                <div class="col-md-12">
                                    <input type="text"
                                           class="form-control ps-0 form-control-line"
                                           name="first_name" value="{{ $edit->first_name ?? old('first_name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Middle Name</label>
                                <div class="col-md-12">
                                    <input type="text" 
                                           name="middle_name" value="{{ $edit->middle_name ?? old('middle_name') }}"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Last Name</label>
                                <div class="col-md-12">
                                    <input type="text" 
                                           name="last_name" value="{{ $edit->last_name ?? old('last_name') }}"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Username</label>
                                <div class="col-md-12">
                                    <input type="text" 
                                           name="username" value="{{ $edit->username ?? old('username') }}"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Mobile</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890"
                                           name="mobile" value="{{ $edit->mobile ?? old('mobile') }}"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Position</label>
                                <div class="col-sm-12 border-bottom">
                                    <input type="text" placeholder="123 456 7890"
                                           name="position" value="{{ $edit->position ?? old('position') }}"
                                           class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Station</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                        <option value=""></option>
                                        @foreach($stations as $station)
                                            <option value="{{ $station->id }}" {{ isset($edit) && $edit->station_id == $station->id ? 'selected' : '' }}> {{ $station->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Submit</button>
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