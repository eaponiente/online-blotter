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
        $param['status'] = 'for verification';
        $param['control_no'] = 'B' . mt_rand(1000, 9999) . mt_rand(1000, 9999) . mt_rand(1000, 9999);
        return Report::create($param);
    }
}
