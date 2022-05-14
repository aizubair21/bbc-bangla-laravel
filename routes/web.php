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




//create method
Route::get('/add-post', function() {
    
    $category = category::get();

    return view('back_end.posts.add_new', compact('category'));
})->name('post.add');

Route::get('/add-category', function() {
    return view('back_end.category.add');
})->name('category.add');


//show method
Route::get('/post/edit', function($id) {

    $category = category::get();
    $post = post::where('id', $id)->get();

    return view('back_end.posts.edit', compact('category','post'));
    
})->name('post_edit');


//post store
//store resource not working
Route::post('/post/store',[postController::class, 'post_store'])->name('post.store');



//post resource controller
Route::resource('post',postController::class);

//category 
Route::resource('category', categoryController::class);