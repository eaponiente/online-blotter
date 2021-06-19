@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded">
            <div>
                <div class="logo text-center">
                    <span class="db"><img src="./assets/images/logo.png" width="150" alt="logo"></span>
                    <h5 class="font-weight-medium mb-3 mt-1">Welcome to Davao Online Blotter</h5>
                </div>
                <!-- Form -->
                <div class="row mt-4">
                    <div class="col-12">
                        <form class="form-horizontal" method="POST" action="{{ route('report.create') }}">
                            {{ csrf_field() }}
                                <div class="form-floating mb-3">
                                    <select type="text" name="barangay_id" class="form-control form-input-bg" id="tb-rfname" placeholder="john deo" required="">
                                        <option value="">Please choose a barangay</option>
                                        @foreach($barangays as $barangay)
                                            <option value="{{ $barangay->id }}">{{ $barangay->name }}</option>
                                        @endforeach

                                    </select>
                                    <label for="tb-rfname">Select Barangay</label>
                                    <div class="invalid-feedback">
                                        Full name is required
                                    </div>
                                </div>
                                <div class="d-flex align-items-stretch">
                                    <button type="submit" class="btn btn-info d-block w-100 text-white">Next</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection