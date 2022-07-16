<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return '<h1>This is the test page</h1>';
});

Route::get('/dir/test', function(){
    return '<h1>This is the test page on URL->/dir/test</h1>';
});

Route::get('/user/{name}', function($name){
    return "Your name is $name";
});

Route::get('/{surname}/{name}', function($surname, $name){
    if ($surname!='city') {
        return "Your name is $surname $name";}
    else
    {
        $name="Tashkent";
        return "Cityname is: $name";
    }
});

