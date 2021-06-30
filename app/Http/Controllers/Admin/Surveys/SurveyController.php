<?php

namespace App\Http\Controllers\Admin\Surveys;

use App\Models\Survey;
use PDF;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Reports\StoreSignatureRequest;
use App\Models\Report;
use App\Services\Reports\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SurveyController extends Controller
{
    public function index()
    {
        return view('admin.surveys.index');
    }

    public function show($uuid)
    {
        $survey = Survey::where('uuid', $uuid)->first();

        $answers = json_decode($survey->answers, true);

        return view('admin.surveys.show', compact('survey', 'answers'));
    }

    public function list(Request $request)
    {
        $sortColumn = $request->input('order')[0]['column'];

        $sortDirection = $request->input('order')[0]['dir'];

        switch ($sortColumn) {
            case 1:
                $sortField = 'id';
                break;
            case 2:
                $sortField = 'name';
                break;
            default:
                $sortField = 'created_at';
                break;
        }

        if ($request->ajax()) {

            $survey = Survey::query();

            return DataTables::of($survey->orderBy($sortField, $sortDirection)->get())
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('surveys.show', [$row->uuid]) . '" class="edit btn btn-success btn-sm text-white">Show</a>';
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->tz('Asia/Manila')->format('Y-m-d h:i A');
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function download($uuid)
    {
        $survey = Survey::where('uuid', $uuid)->first()->toArray();

        $pdf = PDF::loadView('pdf.admin-survey-pdf', $survey);
        return $pdf->stream();
       // return view('pdf.admin-survey-pdf', compact('survey'));
    }
}