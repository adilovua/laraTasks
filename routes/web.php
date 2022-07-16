<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);

Route::get('/test', function(){
    return '<h1>This is the test page</h1>';
});

Route::get('/dir/test', function(){
    return '<h1>This is the test page on URL->/dir/test</h1>';
});

Route::get('/user/{id}', function($id){
    return "Your ID is $id";
})->where('id', '[0-9]+');

/**
 * Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число,
 * а вместо :name - строка, состоящая из маленьких латинских букв количеством более 2-х.
 */
Route::get('/user/{id}/{name}', function ($id, $name){
    return "Hey $name! Your ID id $id";
})->where('id', '[0-9]+')->where('name', '[a-z][a-z]');


Route::prefix('admin')->group(function (){
       Route::get('/post/all', function () {
            return 'all';
        });
        Route::get('/post/{id}', function ($id) {
            return $id;
        });

        Route::get('/users', function () {
            return 'all';
        });
        Route::get('/user/{id}', function ($id) {
            return $id;
        });
});

Route::get('/user/profile', function ($id) {
    return 'profile';
})->name('userProfile');

/**
 * Сделайте маршрут вида /posts/:date,
 * где вместо :date должна быть дата в формате год-месяц-день.
 */

Route::get('/post/{date}', function($date){
    return "Date is $date";
})->where('date', '(?:0[1-9]|[12][0-9]|3[01])[-/.](?:0[1-9]|1[012])[-/.](?:19\d{2}|20[01][0-9]|2020)\b');

Route::get('/{surname}/{name}', function($surname, $name){
    switch ($surname) {
        case "city":
            return "Cityname is: $name";
            break;
        default:
            return "Your name is $surname $name";
    }
});

