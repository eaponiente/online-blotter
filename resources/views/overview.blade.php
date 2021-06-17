@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="max-width:600px;margin:3% 0">
            <div>
                <div class="buttons align-right">
                    <button type="submit" class="btn btn-lg btn waves-effect waves-light btn-light-info text-info"> <i class="fas fa-print"></i> Print</button>
                </div>
                <div class="logo text-center">
                    <span class="db"><img src="./assets/images/logo.png" width="150" alt="logo"></span>
                    <h4 class="mt-4">Control No. 119087992</h4>
                    <h5 class="font-weight-medium mb-3 mt-1">Please review the following details.</h5>
                </div>
                <!-- Form -->
                <div class="row mt-4">
                    <div class="col-12">
                        <form class="form-horizontal form-material" action="index.html">
                                <div class="form-group mb-3">
                                    <label class="col-md-12 mb-0">First Name:</label>
                                    <p>Edgar Allan</p>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-email" class="col-md-12">Last Name:</label>
                                    <p>Poniente</p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="col-md-12 mb-0">Address:</label>
                                    <p>Taga Mintal tiw tiw tiw!</p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="col-md-12 mb-0">Report Summary</label>
                                    <p class="text-justify">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices nisi a mi finibus mollis. Pellentesque justo ligula, consectetur eu lectus et, lacinia cursus erat. Phasellus eget odio at sem fringilla vehicula sed vitae risus. Aenean vehicula consequat ante id congue. Proin condimentum nulla augue, quis fermentum elit blandit eget. Quisque feugiat porta lacinia. Vestibulum placerat pharetra congue. Vivamus eget laoreet augue. Sed id dapibus orci, quis posuere mi. Donec eu congue risus. Fusce eu fermentum ipsum. Aliquam nec feugiat quam. Maecenas ac hendrerit magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis odio id metus ullamcorper ultricies lobortis in urna. 
                                    </p>
                                </div>
                                <div class="form-group mb-3 mt-5">
                                    <label class="col-md-12 mb-0">Prepared by:</label>
                                    <img src="./assets/images/signature.svg" width="150"> <br/>
                                    SPO1 Cardo Marasigan
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection