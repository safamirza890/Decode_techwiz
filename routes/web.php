<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('forms');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/news', function () {
    return view('news');
});
Route::get('/info', function () {
    return view('soccerinfo');
});
Route::get('/matches', function () {
    return view('matches');
});
Route::POST('/index',[admincontroller::class,('InsertSignupRecord')]);
