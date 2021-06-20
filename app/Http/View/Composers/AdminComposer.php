<?php

namespace App\Http\View\Composers;

use App\Models\Report;
use Illuminate\View\View;

class AdminComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $unreadReports = Report::query()
            ->where('is_read', 0)
            ->where('station_id', auth()->user()->station_id)
            ->count();

        $view->with([
            'unreadReports' => $unreadReports
        ]);
    }
}