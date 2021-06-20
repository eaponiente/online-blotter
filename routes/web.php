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

    Route::get('/search', 'ReportController@search')->name('report.search');
    Route::post('/search', 'ReportController@processSearch')->name('report.search.process');
    Route::get('/view-report', 'ReportController@show')->name('report.show');
    Route::get('/report', 'ReportController@create');
    Route::post('/report', 'ReportController@create')->name('report.create');
    Route::post('/reports/store', 'ReportController@store')->name('report.store');

    // View form submitted
    Route::get('/overview', function () {
        return view('overview');
    });

// Blotter form

    Route::post('reports', 'ReportController@store');

});

Route::group(['namespace' => 'Admin'], function() {

    Route::prefix('admin')->group(function() {
        Route::get('/', 'AuthController@index')->name('admin.login.index');
        Route::post('login', 'AuthController@login')->name('admin.login.store');
        Route::middleware('auth')->group(function() {
            Route::post('logout', 'AuthController@login')->name('admin.logout');

            Route::resource('reports', 'Reports\ReportController');

            Route::get('dashboard', 'MainController@index')->name('admin.dashboard.index');
            Route::get('users', 'UserController@index')->name('admin.users.index');
            Route::get('users/create', 'UserController@create')->name('admin.users.create');
        });
    });
});