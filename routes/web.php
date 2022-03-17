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

// default route
Route::get('/', function () {
    return view('welcome');
});

// return string
Route::get('/hello', function() {
    return 'Hello World';
});

// return json - great for api
Route::get('/json', function(){
    return ['name' => 'laravel'];
});
