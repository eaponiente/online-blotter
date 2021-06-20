@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daily Reports</h4>
                    <div class="text-end">
                        <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i>{{ $dailyReport }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Weekly Reports</h4>
                    <div class="text-end">
                        <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i>{{ $weeklyReport }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
@endsection