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



Route::group( array('after' => 'auth'), function(){
    #Route::group(['prefix' => 'admin'], function() {

        //Admin Login
        Route::any("admin/login", [
            "as"   => "admin/login",
            "uses" => "AdminController@login"
        ]);

        //admin dashboard
        Route::any("admin/dashboard", [
            "as"   => "admin/dashboard",
            "uses" => "AdminController@dashboard"
        ]);


        // Logout
        Route::any("admin/logout", [
            "as"   => "admin/logout",
            "uses" => "AdminController@logout"
        ]);


        // Store all type of POST
        Route::any("store-post/{id}", [
            "as"   => "store-post",
            "uses" => "AdminController@store_post"
        ]);


        // ICT Support
        Route::any("solution/ict-support", [
            "as"   => "solution/ict-support",
            "uses" => "AdminController@ict_support"
        ]);

        // Index POST
        Route::any("index-post/{type}", [
            "as"   => "index-post",
            "uses" => "AdminController@index_post"
        ]);

        // View type of POST
        Route::any("view-post/{type}/{id}", [
            "as"   => "view-post",
            "uses" => "AdminController@view_post"
        ]);


        // edit type of POST
        Route::any("edit-post/{type}/{id}", [
            "as"   => "edit-post",
            "uses" => "AdminController@edit_post"
        ]);

        // edit type of POST
        Route::any("destroy-post/{id}", [
            "as"   => "destroy-post",
            "uses" => "AdminController@destroy_post"
        ]);





        // solution/security
        Route::any("solution/security", [
            "as"   => "solution/security",
            "uses" => "AdminController@security"
        ]);

        // solution/consultancy
        Route::any("solution/consultancy", [
            "as"   => "solution/consultancy",
            "uses" => "AdminController@consultancy"
        ]);

        // solution/web-design
        Route::any("solution/web-design", [
            "as"   => "solution/web-design",
            "uses" => "AdminController@web_design"
        ]);


        // solution/web-design
        Route::any("course/communication-it", [
            "as"   => "course/communication-it",
            "uses" => "AdminController@communication_it"
        ]);

        // course/english-language
        Route::any("course/english-language", [
            "as"   => "course/english-language",
            "uses" => "AdminController@english_language"
        ]);


        // client/service
        Route::any("client/service", [
            "as"   => "client/service",
            "uses" => "AdminController@service"
        ]);


        // client/student
        Route::any("client/student", [
            "as"   => "client/student",
            "uses" => "AdminController@student"
        ]);


        // ecies/overview
        Route::any("ecies/overview", [
            "as"   => "ecies/overview",
            "uses" => "AdminController@overview"
        ]);


        // ecies/partner
        Route::any("ecies/partner", [
            "as"   => "ecies/partner",
            "uses" => "AdminController@partner"
        ]);


        // ecies/career
        Route::any("ecies/career", [
            "as"   => "ecies/career",
            "uses" => "AdminController@career"
        ]);



    #});
});




// if Missing any error
App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});
