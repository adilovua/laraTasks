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

Route::get('/user/{id}', function($id){
    return "Your ID is $id";
})->where('id', '[0-9]+');

Route::get('/{surname}/{name}', function($surname, $name){

    switch ($surname) {
        case "city":
            return "Cityname is: $name";
            break;
        default:
            return "Your name is $surname $name";
    }
});

