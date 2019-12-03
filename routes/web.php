<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
include("web-so.php");
include("test-route.php");

use App\Http\Controllers\AdminDashboard;
Route::resource('/', 'HomePageController');
Route::get('/so-manage/user-type', 'UserTypeController@index');

