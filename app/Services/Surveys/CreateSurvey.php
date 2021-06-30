<?php

namespace App\Services\Surveys;

use App\Models\Survey;
use Illuminate\Support\Str;

class CreateSurvey
{
    /**
     * @param $param
     * @return Survey
     */
    public function execute($param): Survey
    {
        $param['uuid'] = Str::uuid();
        return Survey::create($param);
    }
}
