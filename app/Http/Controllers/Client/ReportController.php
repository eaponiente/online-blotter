<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreReportRequest;
use App\Models\Barangay;
use App\Models\Report;
use App\Services\Reports\CreateReport;
use App\Services\Reports\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReportController extends Controller
{
    public function create(Request $request)
    {
        if($request->method() == 'GET') {
            return redirect('/');
        }

        $barangay = Barangay::find($request->barangay_id);

        return view('form', ['station_id' => $barangay->station_id]);
    }

    public function store(StoreReportRequest $storeReportRequest, CreateReport $createReport, UploadFiles $uploadFiles)
    {
        $report = $createReport->execute($storeReportRequest->except('filename'));
        $filePath = $uploadFiles->execute($storeReportRequest->file('filename'));

        $report->filename = $filePath;
        $report->save();

        return response()->json([
            'data' => [
                'control_no' => $report->control_no
            ]
        ], Response::HTTP_CREATED);
    }

    public function show(Request $request)
    {
        $report = Report::where('control_no', $request->input('code'))->first();

        abort_if(!$report, 403);

        return view('overview', compact('report'));
    }

    public function search()
    {
        return view('search');
    }

    public function processSearch(Request $request)
    {
        $report = Report::where('control_no', $request->input('code'))->first();

        if(!$report) {
            return response()->json([
                'data' => null,
                'message' => 'Control no. not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'data' => [
                'control_no' => $report->control_no
            ],
            'message' => 'Control no. found'
        ], Response::HTTP_OK);
    }
}
