@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="margin:3% 0;max-width:1200px">
            <div>
                <div class="logo text-center">
                <span class="db"><img src="./assets/images/logo.png" width="150" alt="logo"></span>
                    <h5 class="font-weight-medium mb-3 mt-1">Please fill out the form below.</h5>
                </div>
                <!-- Form -->
                <form class="form-horizontal" method="POST" id="report-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="station_id" value="{{ $station_id }}">
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-type" name="type" id="type" placeholder="john@gmail.com">
                                    @foreach(config('constants.report_types') as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <label for="type">Type of report</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
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
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" name="first_name" class="form-control form-input-bg form-first_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">First name (Panguna nga ngalan)</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="middle_name" class="form-control form-input-bg form-middle_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Middle inital</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" name="last_name" class="form-control form-input-bg form-last_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Last name (Apelyido)</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="text" name="suffix" class="form-control form-input-bg form-suffix_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Qualifiers</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
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
                                <label for="text-rpassword">Citizenship (Pagkalungsoranon)</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>

                            <div class="form-floating">
                                <input type="date" name="date_of_birth" class="form-control form-input-bg form-date_of_birth" id="text-rpassword" placeholder="*****">
                                <label for="text-rpassword">Date of Birth</label>
                                <div class="invalid-feedback">
                                    Address is required
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="mobile" class="form-control form-input-bg form-mobile" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Mobile number (Numero sa pagkontak)</label>
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
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="form-group form-material mb-3">
                                <label class="col-md-12 mb-0">Who (Kinsa)</label>
                                <div class="col-md-12">
                                    <textarea rows="1" name="who" class="form-control ps-0 form-control-line form-who" style="height:auto"></textarea>
                                    <div class="invalid-feedback">
                                        Last name is required
                                    </div>
                                </div>

                            </div>
                            <div class="form-group form-material mb-3">
                                <label class="col-md-12 mb-0">What (Unsa)</label>
                                <div class="col-md-12">
                                    <textarea rows="1" name="what" class="form-control ps-0 form-control-line form-what" style="height:auto"></textarea>
                                    <div class="invalid-feedback">
                                        Last name is required
                                    </div>
                                </div>

                            </div>
                            <div class="form-group form-material mb-3">
                                <label class="col-md-12 mb-0">Where (Asa)</label>
                                <div class="col-md-12">
                                    <textarea rows="1" name="where" class="form-control ps-0 form-control-line form-where" style="height:auto"></textarea>
                                    <div class="invalid-feedback">
                                        Last name is required
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-material mb-3">
                                <label class="col-md-12 mb-0">When (Kanus-a)</label>
                                <div class="col-md-12">
                                    <textarea rows="1" name="when" class="form-control ps-0 form-control-line form-when" style="height:auto"></textarea>
                                    <div class="invalid-feedback">
                                        Last name is required
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-material mb-3">
                                <label class="col-md-12 mb-0">How (Giunsa)</label>
                                <div class="col-md-12">
                                    <textarea rows="1" name="how" class="form-control ps-0 form-control-line form-how" style="height:auto"></textarea>
                                    <div class="invalid-feedback">
                                        Last name is required
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-material mb-3">
                                <label class="col-md-12 mb-0">Synopsis (Panghitabo)</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="synopsis" class="form-control ps-0 form-control-line form-synopsis" style="height:auto"></textarea>
                                    <div class="invalid-feedback">
                                        Last name is required
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="text-rcpassword" class="mb-2">Upload ID (Pag-upload sa ID) <i class="fas fa-question-circle" data-bs-toggle="popover" data-bs-trigger="hover focus" title="LIST OF ACCEPTABLE IDS (At least 1 of the following)" data-bs-content="SSS ID, PHILHEALTH, PAG-IBIG ID/UMID, PASSPORT ID"></i></label>
                                <input type="file" name="filename" class="form-control form-filename" id="text-rcpassword" placeholder="*****">
                                <div class="invalid-feedback">
                                    File upload is required
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="checkbox checkbox-primary mb-3">
                                    <input id="checkbox-signup" type="checkbox" class="chk-col-indigo material-inputs">
                                    <label for="checkbox-signup"> I agree to <a href="#">Privacy Policy</a></label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-lg btn waves-effect waves-light btn-light-info text-info">Submit</button>
                                <div>
                                    <!-- ------------------------------------------ -->
                                    <!-- Medium -->
                                    <!-- ------------------------------------------ -->
                                    <!-- sample modal content -->
                                    <div id="bs-example-modal-md" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex align-items-center">
                                                    <h4 class="modal-title text-success" id="myModalLabel">Success!</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Your case has been submitted...</h4>
                                                    <p><strong>Control number: <span class="control-number"></span></strong></p>
                                                    <p>Please copy the control number above to check updates regarding your case. Have a nice day!</p>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection