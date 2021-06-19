<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreReportRequest;
use App\Models\Barangay;
use Illuminate\Http\Request;

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

    public function store(StoreReportRequest $storeReportRequest)
    {

    }
}
