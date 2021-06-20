@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded">
            <div>
                <div class="logo text-center">
                    <span class="db"><img src="{{ url('assets/images/logo.png') }}" width="150" alt="logo"></span>
                    <h5 class="font-weight-medium mb-3 mt-4">Search Control Number</h5>
                </div>
                <!-- Form -->
                <div class="row mt-4">
                    <div class="col-12">
                        <form id="search-form" class="form-horizontal" method="POST">
                            {{ csrf_field() }}
                            <div class="alert alert-danger search-notification hide" role="alert">
                                The code you entered is not found
                            </div>
                            <div class="form-floating mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-light-info text-info btn-lg" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="code" class="form-control form-control-lg" placeholder="Ex. 119087992" aria-label="" aria-describedby="basic-addon1">
                                    <button class="btn btn-light-info text-info font-weight-medium" type="submit">Go!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection