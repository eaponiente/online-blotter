<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreSurveyRequest;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey');
    }

    public function store(StoreSurveyRequest $request)
    {
        dd($request->validated());
    }

    public function success()
    {
        return view('success');
    }
}
