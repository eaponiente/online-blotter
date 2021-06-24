<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Reports\StoreSignatureRequest;
use App\Models\Report;
use App\Services\Reports\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
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

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function getReports(Request $request)
    {
        $sortColumn = $request->input('order')[0]['column'];
        $sortDirection = $request->input('order')[0]['dir'];
        $sortField = '';

        switch ($sortColumn) {
            case 1:
                $sortField = 'last_name';
                break;
            case 3:
                $sortField = 'status';
                break;
            case 4:
                $sortField = 'type';
                break;
            default:
                $sortField = 'created_at';
                break;
        }

        if ($request->ajax()) {
            $authUser = auth()->user();

            $reportQuery = Report::query();

            if(filled($authUser->station_id)) {
                $reportQuery = $reportQuery->where('station_id', $authUser->station_id);
            }

            return DataTables::of($reportQuery->orderBy($sortField, $sortDirection)->get())
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('reports.show', [$row->uuid]) . '" class="edit btn btn-success btn-sm text-white">Show</a>';
                    return $actionBtn;
                })
                ->addColumn('fullname', function ($row) {
                    return $row->last_name . ', ' . $row->first_name;
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->tz('Asia/Manila')->format('Y-m-d h:i A');
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function changeStatus($uuid, $status)
    {
        if(!in_array($status, ['pending', 'for verification', 'verified', 'closed'])) {
            return redirect()->back();
        }

        $report = Report::where('uuid', $uuid)->first();
        $report->status = $status;
        $report->save();

        return redirect()->back();
    }

    public function uploadAdmin(StoreSignatureRequest $request, $uuid, $role, UploadFiles $uploadFiles)
    {
        $userAuth = auth()->user();
        $report = Report::where('uuid', $uuid)->first();
        $path = $uploadFiles->execute($request->file('file'), 'signatures');

        if($role == 'user') {
            if(Storage::disk('local')->exists( $report->prepared_by_signature_filename)) {
                Storage::disk('local')->delete($report->prepared_by_signature_filename);
            }

            $report->update([
                'prepared_by_user_id' => $userAuth->id,
                'prepared_by_signature_filename' => $path
            ]);
        }

        if($role == 'commander') {
            if(Storage::disk('local')->exists( $report->incharge_signature_filename)) {
                Storage::disk('local')->delete($report->incharge_signature_filename);
            }

            $report->update([
                'incharge_signature_filename' => $path
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'path' => asset('storage/'. $path)
            ]
        ], Response::HTTP_OK);
    }
}