<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any("/", [
    "as"   => "index",
    "uses" => "HomeController@index"
]);

//Solution
Route::any("solution/ict-support", [
    "as"   => "ict-support",
    "uses" => "HomeController@ict_support"
]);
Route::any("solution/security", [
    "as"   => "security",
    "uses" => "HomeController@security"
]);
Route::any("solution/consultancy", [
    "as"   => "consultancy",
    "uses" => "HomeController@consultancy"
]);
Route::any("solution/web-design", [
    "as"   => "web-design",
    "uses" => "HomeController@web_design"
]);

//COURSE
Route::any("course/communication-it", [
    "as"   => "communication-it",
    "uses" => "HomeController@communication_it"
]);
Route::any("course/english-language", [
    "as"   => "english-language",
    "uses" => "HomeController@english_language"
]);

//CLIENT
Route::any("client/service", [
    "as"   => "client/service",
    "uses" => "HomeController@service"
]);
Route::any("client/student", [
    "as"   => "client/student",
    "uses" => "HomeController@student"
]);

//REGISTRATION
Route::any("registration", [
    "as"   => "registration",
    "uses" => "HomeController@registration"
]);

//ECIES
Route::any("overview", [
    "as"   => "overview",
    "uses" => "HomeController@overview"
]);
Route::any("partner", [
    "as"   => "partner",
    "uses" => "HomeController@partner"
]);
Route::any("career", [
    "as"   => "career",
    "uses" => "HomeController@career"
]);
Route::any("contact", [
    "as"   => "contact",
    "uses" => "HomeController@contact"
]);

//others
Route::any("privacy-policy", [
    "as"   => "privacy-policy",
    "uses" => "HomeController@privacy_policy"
]);
Route::any("terms-of-service", [
    "as"   => "terms-of-service",
    "uses" => "HomeController@terms_of_service"
]);


// FAQ
Route::any("/faq", [
    "as"   => "faq",
    "uses" => "HomeController@faq"
]);


//LOGIN
Route::any("/login", [
    "as"   => "login",
    "uses" => "AdminController@login"
]);


Route::any("admin/dashboard", [
    "as"   => "admin/dashboard",
    "uses" => "AdminController@dashboard"
]);

Route::any("admin/logout", [
    "as"   => "admin/logout",
    "uses" => "AdminController@logout"
]);






Route::group( array('after' => 'auth'), function(){
    Route::group(['prefix' => 'admin'], function() {

        //Admin Login
        Route::any("/login", [
            "as"   => "login",
            "uses" => "AdminController@login"
        ]);



    });
});




// if Missing any error
App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});
