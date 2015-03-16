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
Route::get('/test',function(){
    return "test";
});
Route::get('/home',function(){
    return View::make('contents.home');
});
Route::any('/updateSave',function(){
    return View::make('contents.update');
});
Route::controller('/register', 'RegisterController');
Route::controller('/', 'HomeController');




