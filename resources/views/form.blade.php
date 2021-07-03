@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="margin:3% 0;max-width:1200px">
            <div>
                <div class="logo text-center">
                <span class="db"><img src="./assets/images/logo.png" width="150" alt="logo"></span>
                    <h1 class="font-weight-medium mb-3 mt-1">Blotter Report Form</h1>
                    <h4>Please fill out the from below.</h4>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-5" method="POST" id="report-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="station_id" value="{{ $station_id }}">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" name="first_name" class="form-control form-input-bg form-first_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">First name (Pangalan)</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <input type="text" name="middle_name" class="form-control form-input-bg form-middle_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Middle initial</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" name="last_name" class="form-control form-input-bg form-last_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Last name (Apelyido)</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="form-floating">
                                <input type="text" name="suffix" class="form-control form-input-bg form-suffix" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Suffix</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-civil_status" name="civil_status" id="tb-remail" placeholder="john@gmail.com">
                                    @foreach(config('constants.civil_status') as $type)
                                        <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                                    @endforeach
                                </select>
                                <label for="tb-remail">Civil status (Kahimtang sibil)</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-type" name="type" id="report_type" placeholder="john@gmail.com">
                                    @foreach(config('constants.report_types') as $type)
                                    <option value="{{ strtolower($type) }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Type of report</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-12 hide" id="others">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="others" class="form-control form-input-bg form-others" id="tb-rfname" placeholder="">
                                <label for="tb-rfname">Others</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="email" class="form-control form-input-bg form-email" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Email</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control form-permanent_address" name="permanent_address" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Permanent Address (Optional)</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="citizenship" class="form-control form-input-bg form-citizenship" id="text-rpassword" placeholder="*****">
                                <label for="text-rpassword">Citizenship</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="mobile" class="form-control form-input-bg form-mobile" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Contact #</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control form-present_address" name="present_address" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Present Address</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-gender" name="gender" id="tb-remail" placeholder="john@gmail.com">
                                    @foreach(config('constants.gender') as $type)
                                        <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                                    @endforeach
                                </select>
                                <label for="tb-remail">Gender (Kinatawo)</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <label>Date of Birth</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-birth_month" name="birth_month" id="type">
                                    @foreach(config('constants.month') as $key => $type)
                                    <option value="{{ $key + 1 }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Month</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <label></label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-birth_day" name="birth_day" id="type">
                                    @foreach(range(1, 31) as $day)
                                    <option value="{{ $day }}">{{ str_pad($day, '0', 2) }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Day</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <label></label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-birth_year" name="birth_year" id="type">
                                    @foreach(range( date('Y'), 1900) as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Year</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control form-who" name="who" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Name of Victim</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control form-where" name="where" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Where (Asa)</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label>When (Kanus-a)</label>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-when_month" name="when_month" id="type">
                                    @foreach(config('constants.month') as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Month</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-when_day" name="when_day" id="type">
                                    @foreach(config('constants.day') as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Day</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-when_year" name="when_year" id="type">
                                    @foreach(config('constants.year') as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Year</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-sm-4 col-lg-2 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-when_hours" name="when_hours" id="type">
                                    @foreach(range(1, 12) as $type)
                                        <option value="{{ $type }}">{{ str_pad($type, 2, '0', STR_PAD_LEFT) }}</option>
                                    @endforeach
                                </select>
                                <label for="tb-rfname">Hour</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-sm-4 col-lg-2 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-when_minutes" name="when_minutes" id="type">
                                    @foreach(range(1, 60) as $type)
                                        <option value="{{ $type }}">{{ str_pad($type, 2, '0', STR_PAD_LEFT) }}</option>
                                    @endforeach
                                </select>
                                <label for="tb-rfname">Minutes</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-4 col-sm-4 col-lg-2 col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-meridiem" name="meridiem" id="type">
                                    @foreach(config('constants.meridiem') as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Buntag/Hapon</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control form-synopsis" name="synopsis" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                                <label for="floatingTextarea2">Synopsis (Panghitabo)</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group mb-3">
                                <label for="text-rcpassword" class="mb-2">Upload ID (Pag-upload sa ID) <i class="fas fa-question-circle" data-bs-toggle="popover" data-bs-trigger="hover focus" title="LIST OF ACCEPTABLE IDS (At least 1 of the following)" data-bs-content="SSS ID, PHILHEALTH, PAG-IBIG ID/UMID, PASSPORT ID"></i></label>
                                <input type="file" name="filename" class="form-control form-filename" id="text-rcpassword" placeholder="*****">
                                <div class="invalid-feedback">
                                    File upload is required
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex mb-3">
                                <div class="checkbox checkbox-primary mb-3">
                                    <input id="checkbox-signup" type="checkbox" class="chk-col-indigo material-inputs">
                                    <label for="checkbox-signup"> I agree to <a href="#">Privacy Policy</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button type="submit" id="report-form-submit-btn" class="btn btn-lg btn waves-effect waves-light btn-light-info text-info">Submit</button>
                            <div>
                                <!-- ------------------------------------------ -->
                                <!-- Medium -->
                                <!-- ------------------------------------------ -->
                                <!-- sample modal content -->
                                <div id="bs-example-modal-md" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex align-items-center">
                                                <h4 class="modal-title text-black-50" id="myModalLabel">Assigned to <span class="police-station"></span></h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Control number: <span class="control-number"></span></strong></p>
                                                <p>Please copy the control number above to check updates regarding your case. To help us improve we'd like to ask you questions about your experience so far.
                                                    <br><br> Please go to this
                                                    <a href="{{ route('client.survey') }}">link</a> to fill up our survey. You're feedback will be highly appreciated.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-danger text-danger font-weight-medium waves-effect" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection