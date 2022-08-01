<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CityController;

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


Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'show']);
    Route::get('/all', [UserController::class, 'all']);
    Route::get('/{user}', [UserController::class, 'ShowCity']);
});

Route::get('/city', [CityController::class, 'show']);

Route::get('/test', [UserController::class, 'TestView']);

/**
 * Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число,
 * а вместо :name - строка, состоящая из маленьких латинских букв количеством более 2-х.
 */
Route::get('/user/{id}/{name}', function ($id, $name){
    return "Hey $name! Your ID id $id";
})->where('id', '[0-9]+')->where('name', '[a-z][a-z]');


/**
 * Сделайте маршрут вида /posts/:date,
 * где вместо :date должна быть дата в формате год-месяц-день.
 */

Route::get('/post/', [PostController::class, 'show']);

Route::get('/form', [PostController::class, 'form']);
Route::get('/result', [PostController::class, 'result']);

Route::get('/form-1', [PostController::class, 'form1']);
Route::post('/result-1', [PostController::class, 'result1']);

