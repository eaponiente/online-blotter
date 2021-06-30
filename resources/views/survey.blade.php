@extends('layouts.main')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
        <div class="auth-box p-4 bg-white rounded" style="margin:3% 0;max-width:1200px">
            <div>
                <div class="logo text-center">
                <span class="db"><img src="{{ url('assets/images/logo.png') }}" width="150" alt="logo"></span>
                    <h1 class="font-weight-medium mb-3 mt-1">Survey</h1>
                    <h4>(Online Police Blotter System in Davao Region)</h4>
                </div>
                <p class="mt-5 text-center">Hi respondents! This survey is for you to rate how often you experienced
                the listed situations. Select "Yes" or "No". <br/>Please do not
                leave any question unanswered. The following scale will be your reference in
                answering this survey.</p>
                <!-- Form -->
                <form class="form-horizontal" method="POST" id="survey-form" action="{{ route('survey.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="station_id" value="">
                    <div class="row">
                        @if($errors->count())
                            <div class="alert alert-danger">
                                There are fields that do not have an answer.
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="first_name" class="form-control form-input-bg form-first_name" id="tb-rfname">
                                <label for="tb-rfname">Name (Optional)</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" name="age" class="form-control form-input-bg form-others" id="tb-rfname">
                                <label for="tb-rfname">Age</label>
                                <div class="invalid-feedback">
                                    First name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <select class="form-select form-input-bg form-gender" name="gender" id="tb-remail">
                                    @foreach(config('constants.gender') as $type)
                                        <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                                    @endforeach
                                </select>
                                <label for="tb-remail">Gender</label>
                                <div class="invalid-feedback">
                                    Last name is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col-sm-12 col-md-12 col-lg-6">
                        </div>
                    </div>
                    <?php $count = 0; ?>
                    @foreach(config('questions') as $label => $questions)
                    <div class="row mt-5">

                        <h4 class="text-center">{{ strtoupper(str_replace('_', ' ', $label)) }}</h4>
                        @foreach($questions as $question)
                        <div class="col-md-6 col-lg-6 mt-3 question-title">
                            {{$question}}
                        </div>
                        <div class="col-md-6 col-lg-3 mt-3 question-btn">
                            <div class="form-group mb-3">
                                <input id="answerYes_{{$count}}" type="radio" {{ old('answer.' . $count) == 'yes' ? 'checked' : false }} name="answer[{{$count}}]" value="yes" class="">
                                <label for="answerYes_{{$count}}">Accept</label>

                                <input id="answerNo_{{$count}}" type="radio" {{ old('answer.' . $count) == 'no' ? 'checked' : false }} name="answer[{{$count}}]" value="no" class="">
                                <label for="answerNo_{{$count}}">Not Accept</label>
                            </div>
                        </div>
                        <?php $count++; ?>
                        @endforeach
                    </div>
                    @endforeach

                    <div class="row mt-5">
                        <div class="d-flex">
                            <button type="submit" id="" class="btn btn-lg btn waves-effect waves-light btn-light-info text-info">Submit</button>
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