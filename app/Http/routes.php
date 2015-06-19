<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('PremiseMain');
//});
//
//Route::get('projects', function () {
//    return view('PremiseProjects');
//});
//
//Route::get('contact', function () {
//    return view('PremiseContact');
//});


get('/', 'PagesController@index');

get('projects', 'PagesController@projects');

get('contact', 'PagesController@contact');