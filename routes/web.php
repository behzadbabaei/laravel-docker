<?php

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

use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users',function (){
    $users=Cache::rememberForever('user-list',function (){
        return \App\User::all();
    });

    return $users;
});