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

Route::get('/post',function (){
    return view('post');
});

// second method for creating route which is more easy 
// Route::view('/post' ,'firstpost');

Route::get('/post/firstpost' , function(){
    return view('firstpost');
});


