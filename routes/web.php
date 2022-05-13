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
    return view('dashboard');
});

//login 
Route::view('/login', 'back_end.component.login');

//register
Route::view('/register', 'back_end.component.register');


//post 
route::view('/post.create','back_end.posts.add_new')->name('post.create');