<?php
/**
 * Created by PhpStorm.
 * User: kea
 * Date: 10/13/19
 * Time: 1:16 PM
 */


use Illuminate\Http\Request;

Route::get("/test",function (Request $request){

    session()->put("key","");


    return session()->get("key");
    return "okay";

});