<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if(auth()->check()) {
            if(filled(auth()->user()->station_id)) {
                return redirect()
                    ->route('admin.dashboard.index')
                    ->with([
                        'error' => 'You don\'t have access to this page.'
                    ]);
            }
        }

        return $next($request);
    }
}
