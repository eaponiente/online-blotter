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
                <div class="card-body" style="font-size:1.2rem">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('surveys.download', ['uuid' => $survey->uuid]) }}" target="_blank" class="btn btn-info text-white text-center">Print to PDF</a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center">View Survey</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row ">
                                    <label class="control-label col-md-2 font-weight-medium">Name</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $survey->name }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row ">
                                    <label class="control-label col-md-2 font-weight-medium">Age</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $survey->age }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row ">
                                    <label class="control-label col-md-2 font-weight-medium">Gender</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $survey->gender }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row ">
                                    <label class="control-label col-md-2 font-weight-medium">Answers</label>
                                    <div class="col-md-12">
                                        <?php $count = 0; ?>
                                        @foreach(config('questions') as $key => $questions)
                                            <h4>{{ strtoupper(str_replace('_', ' ', $key)) }}</h4>
                                        <table class="table table-bordered">
                                            @foreach($questions as $question)
                                                <tr>
                                                    <td>{{ $question }}</td>
                                                    <td>{{ $answers[$count] == 'yes' ? 'Accepted' : 'Not Accepted' }}</td>
                                                </tr>
                                                <?php $count++; ?>
                                            @endforeach
                                        </table>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

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