<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/	

Route::group(['middleware' => ['web']], function () {
    
    Route::get("/","pagesController@home");
    Route::get("over","pagesController@over");
    Route::get("projecten","pagesController@projecten");
    Route::get("contact","pagesController@contact");
    Route::post("mail","pagesController@sendMail");
    
    Route::get("status","specialController@status")->middleware("throttle:5","cors");


});

Route::post("github/webhook","specialController@github");