@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="max-width:600px;margin:3% 0">
            <div>
                <div class="buttons align-right">
                    <button type="submit" class="btn btn-lg btn waves-effect waves-light btn-light-info text-info"><i
                                class="fas fa-print"></i> Print
                    </button>
                </div>
                <div class="logo text-center">
                    <span class="db"><img src="{{ url('assets/images/logo.png') }}" width="150" alt="logo"></span>
                    <h4 class="mt-4">{{ $report->control_no }}</h4>
                    <h5 class="font-weight-medium mb-3 mt-1 text-dark-success">{{ strtoupper($report->status) }}</h5>
                </div>
                <!-- Form -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">First Name:</label>
                            <p>{{ $report->first_name }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="example-email" class="col-md-12">Last Name:</label>
                            <p>{{ $report->last_name }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">Address:</label>
                            <p>{{ $report->present_address }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">Type:</label>
                            <p>{{ strtoupper($report->type) }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">Who:</label>
                            <p>{{ $report->who }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">Where:</label>
                            <p>{{ $report->where }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">When:</label>
                            <p>{{ $report->when }}</p>
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-md-12 mb-0">Synopsis:</label>
                            <p>{{ $report->synopsis }}</p>
                        </div>

                        <div class="row">
                            @if(filled($report->prepared_by_signature_filename))
                            <div class="col-6 col-md-7">
                                <div class="form-group mb-3 mt-5">
                                    <label class="col-md-12 mb-0">Prepared by:</label>
                                    <img src="{{ asset('storage/' . $report->prepared_by_signature_filename) }}" width="150"> <br/>
                                    SPO1 Cardo Marasigan
                                </div>
                            </div>
                            @endif

                            @if(filled($report->incharge_signature_filename))
                            <div class="col-6 col-md-5">
                                <div class="form-group mb-3 mt-5">
                                    <label class="col-md-12 mb-0">Station commander:</label>
                                    <img src="{{ asset('storage/' . $report->incharge_signature_filename) }}" width="150"> <br/>
                                    SPO1 Cardo Marasigan
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection