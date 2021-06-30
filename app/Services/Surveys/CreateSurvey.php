<?php

namespace App\Services\Surveys;

use App\Models\Survey;

class CreateSurvey
{
    /**
     * @param $param
     * @return Survey
     */
    public function execute($param): Survey
    {
        return Survey::create($param);
    }
}
