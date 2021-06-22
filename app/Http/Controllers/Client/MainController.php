<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreReportRequest;
use App\Models\Barangay;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $barangays = Barangay::oldest('name')->get();

        return view('index', compact('barangays'));
    }
}