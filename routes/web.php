<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts\postController;
use App\Http\Controllers\category\categoryController;
use App\Models\category;
use App\Models\post;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;
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
    $post = post::get();
    return view('welcome', compact('post'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//post controller
Route::get('/post', [postController::class, 'index'])->name('post.index');
Route::get('/post/create', [postController::class, 'create'])->name('post.create');
Route::post('/post/store', [postController::class, 'store'])->name('post.store');
Route::post('/post/{id}/update',[postController::class, 'updated'])->name('post.update');
Route::get('/post/{id}/edit', [postController::class, 'edit'])->name('post.edit');
Route::get('post/{id}/destroy/', [postController::class, 'destroy'])->name('destroy');

//category resource controller 
Route::resource('category', categoryController::class);



//test 
Route::get('/test', function() {
    return view('back_end.posts.test');
});

Route::post('/image_test', function(Request $request) {

    if (move_uploaded_file($_FILES["image"]["tmp_name"], public_path('images/'). basename($_FILES['image']['name']))){
        echo "file uploded";
      } else {
        $_SESSION['alert'] = $_SESSION['image']['error'];
        echo $_FILES['image']['error'];
      }
})->name('image_test');