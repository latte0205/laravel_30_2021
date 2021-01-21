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

// post 新增, put patch 修改, get 查詢, delete 刪除


// Route::get('/about', function () {
//     return 'hi';
// });

Route::get('/cats/{id}/{name}', function ($id, $name) {
    return "我是第幾 ".$id." 號的貓 ". $name;
});

Route::get('/about', 'WelcomeController@about');