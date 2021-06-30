<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreSurveyRequest;
use App\Services\Surveys\CreateSurvey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey');
    }

    public function store(StoreSurveyRequest $request, CreateSurvey $createSurvey)
    {
        $request->merge([
            'answers' => json_encode($request->input('answer'))
        ]);

        $createSurvey->execute($request->all());

        return redirect()->route('survey.success');
    }

    public function success()
    {
        return view('success');
    }
}
