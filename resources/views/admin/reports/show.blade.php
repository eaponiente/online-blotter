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
                        <h4 class="mb-0 text-white">{{ $report->first_name }} {{ $report->last_name }}</h4>
                    </div>
                </div>
                <form class="form-horizontal form-details">
                    <input type="hidden" name="uuid" id="show-report-uuid" value="{{ $report->uuid }}">
                    <div class="form-body">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Control No: {{ $report->control_no }}</h4>
                            <br>
                            <a href="{{ route('reports.admin.download', ['uuid' => $report->uuid]) }}" target="_blank" class="btn btn-info text-white">Print to PDF</a>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group row">
                                        <label class="control-label col-md-2 font-weight-medium">Status:</label>
                                        <div class="col-md-10">
                                            <div class="button-group">
                                                @foreach(['Pending', 'For Verification', 'Closed'] as $value)
                                                    <button
                                                            type="button"
                                                            onclick="location.href='{{ route('reports.change.status', [$report->uuid, 'status' => strtolower($value)]) }}'"
                                                            class="btn waves-effect waves-light btn-secondary {{ $report->status == strtolower($value) ? 'btn-success text-white' : 'btn-secondary' }}">
    {!! ($report->status == strtolower($value) ? '<i class="fas fa-check"></i>' : '')  !!} {{ $value }} </button>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Person Info <a href="{{ route('report.show', ['code' => $report->control_no]) }}" target="_blank" class="btn btn-danger text-white">View as complainant</a></h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">First Name:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->first_name }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Last Name:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->last_name }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Middle Initial:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->middle_name }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Citizenship:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->citizenship }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Suffix:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->suffix }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Email:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->email }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Gender:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->gender }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Date of Birth:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->date_of_birth }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Age:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ \Carbon\Carbon::parse($report->date_of_birth)->age }} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-4 font-weight-medium">Civil Status:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $report->civil_status }}  </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Case Details</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-2 font-weight-medium">Type:</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static"> {{ ucfirst($report->type) }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 font-weight-medium">Status:</label>
                                        <div class="col-md-7">
                                            <p class="form-control-static"> {{ ucfirst($report->status) }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 font-weight-medium">Station:</label>
                                        <div class="col-md-7">
                                            <p class="form-control-static"> {{ ucfirst($report->station->name) }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Contact Info</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 font-weight-medium">Present Address:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{ $report->present_address }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 font-weight-medium">Permanent Address:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{ $report->permanent_address }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <!--/row-->
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row ">
                                            <label class="control-label col-md-4 font-weight-medium">Contact #:</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{ $report->mobile }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Incident Report</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-2 font-weight-medium">Who:</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static"> {{ $report->who }} </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-2 font-weight-medium">Where:</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static"> {{ $report->where }} </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-2 font-weight-medium">When:</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static"> {{ $report->when }} </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-2 font-weight-medium">Synopsis:</label>
                                        <div class="col-md-10">
                                            <p class="form-control-static"> {{ $report->synopsis }} </p>
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
                                        <!--<label class="control-label col-md-2 font-weight-medium"></label>-->
                                        <div class="col-md-12 text-center">
                                            @if(filled($report->filename))
                                            <a href="#" style="padding-right:30px"><img src="{{ asset('storage/' .$report->filename) }}" width="400px"></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title mb-0">Signatures</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <div class="alert alert-danger admin-notification hide"></div>
                                        <label class="control-label col-md-4 font-weight-medium">Admin Signature:</label>
                                        <div class="col-md-8">
                                            <input type="file" class="admin-file form-control">
                                            @if(filled($report->prepared_by_signature_filename))
                                            <img src="{{asset('storage/'.$report->prepared_by_signature_filename)}}" alt="" class="user-uploaded-signature" width="200px">
                                            @else
                                                <img src="" alt="" class="user-uploaded-signature" width="200px" style="display: none;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row ">
                                        <div class="alert alert-danger commander-notification hide"></div>
                                        <label class="control-label col-md-4 font-weight-medium">Commander Signature:</label>
                                        <div class="col-md-8">
                                            <input type="file" class="commander-file form-control">

                                            @if(filled($report->incharge_signature_filename))
                                                <img src="{{asset('storage/'.$report->incharge_signature_filename)}}" alt="" class="commander-uploaded-signature" width="200px">
                                            @else
                                                <img src="" alt="" class="commander-uploaded-signature" width="200px" style="display: none;">
                                            @endif                                        </div>
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