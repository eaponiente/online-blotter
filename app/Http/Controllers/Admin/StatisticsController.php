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

        $dailyReport = Report::when(filled($authUser->station_id), function($query) use($authUser){
            return $query->where('station_id', $authUser->station_id);
        })
            ->whereDate('created_at', Carbon::today())
            ->count();

        $weeklyReport = Report::when(filled($authUser->station_id), function($query) use($authUser){
            return $query->where('station_id', $authUser->station_id);
        })
            ->whereBetween('created_at', [Carbon::now()->subWeek()->format("Y-m-d H:i:s"), Carbon::now()->toDateTimeString()])
            ->count();

        return view('admin.statistics.index', compact('dailyReport', 'weeklyReport'));
    }
}