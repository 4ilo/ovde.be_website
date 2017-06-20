<?php


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
    // Website routes
    Route::get("/","pagesController@home");
    Route::get("over","pagesController@over");
    Route::get("projecten","pagesController@projecten");
    Route::get("contact","pagesController@contact");
    Route::post("mail","pagesController@sendMail");

    // Admin routes
    Route::get("dashboard","adminController@dashboard");
    Route::get("login","adminController@authenticate");
    Route::post("login", "adminController@login");
    Route::get("logout", "adminController@logout");
    
    // Solution routes
    Route::resource("solution","SolutionController");
    
    // Tag routes
    Route::get("tag/create","TagController@create");
    Route::get("tags","TagController@index");
    Route::post("tags","TagController@store");
    Route::get("tag/{tag}/delete", "TagController@destroy");

    // Afspraken
    Route::get("klant/{klant}/afspraak/create","AfsprakenController@create");
    Route::post("klant/{klant}/afspraak", "AfsprakenController@store");
    Route::delete("klant/{klant}/afspraak/{afspraak}","AfsprakenController@destroy");
    
    // Klanten routes
    Route::resource("klant","KlantController");
    Route::patch("klant/{klant}/password", "KlantController@updatePassword");