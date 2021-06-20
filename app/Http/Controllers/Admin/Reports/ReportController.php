<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::where('station_id', auth()->user()->station_id)->get();

        return view('admin.reports.index', compact('reports'));
    }

    public function show($uuid)
    {
        $report = Report::where('uuid', $uuid)->first();

        abort_if(!$report, 404);

        if($report->is_read != 1) {
            $report->is_read = 1;
            $report->save();
        }

        return view('admin.reports.show', compact('report'));
    }
}