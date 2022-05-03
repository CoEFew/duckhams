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
// Laravel v8.83.9 (PHP v7.4.27)
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('index');
});

Route::get('th',function(){
    return view('indexth');
});

