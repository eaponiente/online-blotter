<?php

namespace App\Services\Reports;

use App\Models\Report;

class CreateReport
{
    /**
     * @param $param
     * @return Report
     */
    public function execute($param): Report
    {
        return Report::create($param);
    }
}
