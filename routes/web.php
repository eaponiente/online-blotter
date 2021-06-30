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
    Route::get('/survey', 'SurveyController@index')->name('client.survey');
    Route::post('/survey/store', 'SurveyController@store')->name('survey.store');
    Route::get('/survey/success', 'SurveyController@success')->name('survey.success');
    Route::get('/how-to', 'MainController@howTo');
    Route::get('/search', 'ReportController@search')->name('report.search');
    Route::post('/search', 'ReportController@processSearch')->name('report.search.process');
    Route::get('/view-report', 'ReportController@show')->name('report.show');
    Route::get('/report', 'ReportController@create');
    Route::get('/download-report/{uuid}', 'ReportController@download')->name('report.download');
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
            Route::get('logout', 'AuthController@logout')->name('admin.logout');
            Route::get('statistics', 'StatisticsController@index')->name('admin.statistics.index');

            Route::get('reports/{uuid}/download', 'Reports\ReportController@download')->name('reports.admin.download');
            Route::get('reports/{uuid}/change-status/{status}', 'Reports\ReportController@changeStatus')->name('reports.change.status');
            Route::get('reports/list', 'Reports\ReportController@getReports')->name('reports.list');
            Route::post('reports/{uuid}/upload/{role}', 'Reports\ReportController@uploadAdmin')->name('reports.upload.admin');
            Route::resource('reports', 'Reports\ReportController');

            Route::get('dashboard', 'MainController@index')->name('admin.dashboard.index');

            Route::middleware('superadmin')->group(function() {
                Route::get('users/list', 'Users\UserController@getUsers')->name('users.list');
                Route::resource('users', 'Users\UserController');

                Route::get('surveys/{uuid}/download', 'Surveys\SurveyController@download')->name('surveys.download');
                Route::get('surveys/list', 'Surveys\SurveyController@list')->name('surveys.list');
                Route::resource('surveys', 'Surveys\SurveyController');
            });
        });
    });
});