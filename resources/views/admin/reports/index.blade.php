@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Blotters</h4>
                    <h6 class="card-subtitle">per region</h6>
                    <div class="table-responsive">
                        <table class="table user-table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Control #</th>
                                    <th class="border-top-0">First Name</th>
                                    <th class="border-top-0">Last Name</th>
                                    <th class="border-top-0">Middle Intial</th>
                                    <th class="border-top-0">Type of Report</th>
                                    <th class="border-top-0">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <td>{{ $report->control_no }}</td>
                                    <td>{{ $report->first_name }}</td>
                                    <td>{{ $report->last_name }}</td>
                                    <td>{{ $report->middle_name }}</td>
                                    <td>{{ $report->type }}</td>
                                    <td>
                                        <a href="{{ route('reports.show', [$report->uuid]) }}" class="btn btn-success text-white">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection