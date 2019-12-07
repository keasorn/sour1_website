<?php

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

use App\JobLevel;
use App\JobType;
use App\WorkPlace;

Route::group(['middleware' => 'checkLogin'], function () {
    Route::get('/so-manage', 'AdminDashboardController@index');


    Route::resource('/so-manage/my-account', 'CompanyController');
    Route::post('/so-manage/my-account/search', 'CompanyController@search')->name('my-account.search');
    Route::get('/so-manage/my-account/preview', 'CompanyController@show')->name("my-account.show");
    Route::post('/so-manage/my-account/{id}', 'CompanyController@update');

    Route::resource('/so-manage/job', 'JobController');
    Route::post('/so-manage/job/search', 'JobController@search')->name('job.search');
    Route::get('/so-manage/job/preview', 'JobController@show')->name("job.show");
    Route::post('/so-manage/job/store', 'JobController@store')->name("job.store");
    Route::post('/so-manage/job/{id}', 'JobController@update')->name('job.update');


    Route::resource('/so-manage/user-type', 'UserTypeController');
    Route::post('/so-manage/user-type/search', 'UserTypeController@search')->name('user-type.search');
    Route::get('/so-manage/user-type/preview', 'UserTypeController@show')->name("user-type.show");
    Route::post('/so-manage/user-type/{id}', 'UserTypeController@update');

    Route::resource('/so-manage/job-level', 'JobLevelController');
    Route::post('/so-manage/job-level/search', 'JobLevelController@search')->name('job-level.search');
    Route::get('/so-manage/job-level/preview', 'JobLevelController@show')->name("job-level.show");
    Route::post('/so-manage/job-level/{id}', 'JobLevelController@update');

    Route::resource('/so-manage/job-type', 'JobTypeController');
    Route::post('/so-manage/job_type/search', 'JobTypeController@search')->name('job_type.search');
    Route::get('/so-manage/job_type/preview', 'JobTypeController@show')->name("job_type.show");
    Route::post('/so-manage/job-type/{id}', 'JobTypeController@update');

    Route::resource('/so-manage/address', 'AddressController');
    Route::post('/so-manage/address/search', 'AddressController@search')->name('position.search');
    Route::get('/so-manage/address/preview', 'AddressController@show')->name("position.show");
    Route::post('/so-manage/address/{id}', 'AddressController@update');
});



Route::get('/so-manage/add-more-job', function (){
    $jobLevels = JobLevel::all();
    $jobTypes = JobType::all();
    $pows = WorkPlace::all();

    $data = array(
        "jobLevels" => $jobLevels,
        "jobTypes" => $jobTypes,
        "pows" => $pows,
    );
    return view("back_end.page_job.form")->with($data);
});
Route::get('/all_jobs', 'JobListController@allJob');
Route::get('/job/{id}/apply', 'JobListController@allJob')->name("job.apply");
Route::resource('/job', 'JobListController');

Route::get('/password/request', function () {
    return view('auth.login');
})->name('login');
Route::get('/login', function () {
    return view('auth.login');
})->name('password.request');
Route::get('/logout', function () {
    session()->put("user","");
    session()->put('url', "/so-manage");
    return redirect("login");
})->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', 'Auth\RegisterController@create')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');