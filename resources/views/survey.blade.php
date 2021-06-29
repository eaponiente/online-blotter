@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="margin:3% 0;max-width:1200px">
            <div>
                <div class="logo text-center">
                <span class="db"><img src="./assets/images/logo.png" width="150" alt="logo"></span>
                    <h1 class="font-weight-medium mb-3 mt-1">Questionnaire</h1>
                    <h4>(Online Police Blotter System in Davao Region)</h4>
                </div>
                <p class="mt-5 text-center">Hi respondents! This survey is for you to rate how often you experienced
                the listed situations. Select "Yes" or "No". <br/>Please do not
                leave any question unanswered. The following scale will be your reference in
                answering this survey.</p>
                <!-- Form -->
                <form class="form-horizontal" method="POST" id="report-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="station_id" value="">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="first_name" class="form-control form-input-bg form-first_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Name (Optional)</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="date" name="last_name" class="form-control form-input-bg form-last_name" id="tb-rfname" placeholder="john deo">
                                <label for="tb-rfname">Date</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" name="others" class="form-control form-input-bg form-others" id="tb-rfname" placeholder="">
                                <label for="tb-rfname">Age</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
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
                        <div class="col-sm-12 col-md-12 col-lg-6">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <h4 class="text-center">PERCEIVED USEFULNESS</h4>
                        <div class="col-sm-12 col-md-12 col-lg-6 text-center mt-3">
                                Using the online police blotter system helps me in sending my complaints.
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
                            <div class="form-group mb-3">
                                <input id="answerYes" type="checkbox" class="chk-col-indigo material-inputs">
                                <label for="answerYes">Yes</label>

                                <input id="answerNo" type="checkbox" class="chk-col-indigo material-inputs">
                                <label for="answerNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
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
                                                <h4 class="modal-title text-success" id="myModalLabel">Success!</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Submitted and assigned to <span class="police-station"></span></h4>
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
                </form>
            </div>
        </div>
    </div>
@endsection