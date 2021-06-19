<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['namespace' => 'Client'], function() {
    // Select country form
    Route::get('/', 'MainController@index');

    Route::get('/report', 'ReportController@create');
    Route::post('/report', 'ReportController@create')->name('report.create');
    Route::post('/reports/store', 'ReportController@store')->name('report.store');

    // Search form
    Route::get('/search', function () {
        return view('search');
    });
// View form submitted
    Route::get('/overview', function () {
        return view('overview');
    });

// Blotter form

    Route::post('reports', 'ReportController@store');

});

Route::group(['namespace' => 'Admin'], function() {

    Route::prefix('staff')->group(function() {
        Route::post('login', 'AuthController@login');
    });
});

/* User */

/* Admin */
// Login
Route::get('/admin/login', function () {
    return view('admin.login.index');
});
// Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
});
// Blotters
Route::get('/admin/blotters', function () {
    return view('admin.blotters.index');
});
Route::get('/admin/blotters/details', function () {
    return view('admin.blotters.show');
});