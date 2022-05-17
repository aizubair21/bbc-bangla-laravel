<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts\postController;
use App\Http\Controllers\category\categoryController;
use App\Http\Controllers\testController;
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
    $latestPost = Post::orderBy('created_at', 'desc')->first();
        return view('welcome', compact('post','latestPost'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//test 
Route::get('/test',[testController::class, 'test']);

Route::post('/image_test', function(Request $request) {

    if (move_uploaded_file($_FILES["image"]["tmp_name"], public_path('images/'). basename($_FILES['image']['name']))){
        echo "file uploded";
      } else {
        $_SESSION['alert'] = $_SESSION['image']['error'];
        echo $_FILES['image']['error'];
      }
})->name('image_test');

//summernote test
Route::view('/note', 'back_end.posts.note');