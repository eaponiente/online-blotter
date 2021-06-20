<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function index()
    {
        $authUser = auth()->user();

        $dailyReport = Report::where('station_id', $authUser->station_id)
            ->whereDate('created_at', Carbon::today())
            ->count();

        $weeklyReport = Report::where('station_id', $authUser->station_id)
            ->whereBetween('created_at', [Carbon::now()->subWeek()->format("Y-m-d H:i:s"), Carbon::now()])
            ->count();

        return view('admin.statistics.index', compact('dailyReport', 'weeklyReport'));
    }
}