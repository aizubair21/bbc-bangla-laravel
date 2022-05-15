<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts\postController;
use App\Http\Controllers\category\categoryController;
use App\Models\category;
use App\Models\post;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';





//post resource controller
Route::resource('post',postController::class);
//post update 
Route::post('/post/{$id}/update', [postController::class, 'updated'])->name('post.update');


//category resource controller 
Route::resource('category', categoryController::class);



//test 
Route::get('/test', function() {
    return view('back_end.posts.test');
});