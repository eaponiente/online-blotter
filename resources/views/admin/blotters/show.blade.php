@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row" style="font-size:1.2rem">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <div class="row">
                        <h4 class="mb-0 text-white">Juan Dela Cruz</h4>
                    </div>
                </div>
                <form class="form-horizontal form-details">
                    <div class="form-body">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Options</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Status:</label>
                                        <div class="col-md-8">
                                            <div class="button-group">
                                                <button type="button" class="btn waves-effect waves-light btn-success text-white"><i class="fas fa-check"></i> Active</button>
                                                <button type="button" class="btn waves-effect waves-light btn-secondary">Pending</button>
                                                <button type="button" class="btn waves-effect waves-light btn-secondary">Closed</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Upload Signature:</label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Person Info</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">First Name:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> John </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Last Name:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> Doe </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Middle Initial:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> K </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Citizenship:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> Filipino </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Gender:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> Male </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Date of Birth:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> 11/06/1987 </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Age:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> 33 </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Civil Status:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> Single </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Contact Info</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Address:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> E104, Dharti-2, Near silverstar mall </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">City:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> Bhavnagar </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">State:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> Gujarat </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Post Code:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> 457890 </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-4 font-weight-medium">Country:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> India </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Incident Report</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label text-end col-md-2 font-weight-medium">Content:</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices nisi a mi finibus mollis. Pellentesque justo ligula, consectetur eu lectus et, lacinia cursus erat. Phasellus eget odio at sem fringilla vehicula sed vitae risus. Aenean vehicula consequat ante id congue. Proin condimentum nulla augue, quis fermentum elit blandit eget. Quisque feugiat porta lacinia. Vestibulum placerat pharetra congue. Vivamus eget laoreet augue. Sed id dapibus orci, quis posuere mi. Donec eu congue risus. Fusce eu fermentum ipsum. Aliquam nec feugiat quam. Maecenas ac hendrerit magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis odio id metus ullamcorper ultricies lobortis in urna. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Valid ID</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <!--<label class="control-label text-end col-md-2 font-weight-medium"></label>-->
                                        <div class="col-md-12 text-center">
                                            <a href="#" style="padding-right:30px"><img src="./assets/images/pag-ibig.png" width="250"></a>
                                            <a href="#" style="padding-right:30px"><img src="./assets/images/passport.jpg" width="250"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn btn-lg btn-dark"><i class="fas fa-caret-left"></i> Go Back</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection