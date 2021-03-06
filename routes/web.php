<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts\postController;
use App\Http\Controllers\category\categoryController;
use App\Http\Controllers\testController;
use App\Models\category;
use App\Models\post;
use PhpParser\Node\Expr\PostDec;
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
    //get all post. form posts model
    $posts = post::orderBy('created_at','desc')->get();

    //get all category
    $categories = category::get();


    //get latest post by ordering 'created_at' and it should be descending.
    $latestPost = Post::orderBy('created_at', 'desc')->first();

    //get alll post by asec
    $allPost = Post::orderBy('created_at', 'asc')->get();

    //report
    $report = Post::where('category',8)->orderBy('created_at','desc')->first();

    //codiv category's post
    $covid = Post::where('category',13)->get();

    // return view('front_end.category.index', compact('posts','latestPost'));
    return view('welcome', compact('latestPost','posts', 'categories', 'allPost', 'covid', 'report'));


    //return view('front_end.post.index', compact('latestPost','posts'));



    //for testing
    //return view('back_end.posts.test', compact('latestPost'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//test 
Route::get('/test',[testController::class, 'test']);

Route::post('/image_test', function(Request $request) {

    //php built in image upload function.
    if (move_uploaded_file($_FILES["image"]["tmp_name"], public_path('images/'). basename($_FILES['image']['name']))){
        echo "file uploded";
      } else {
        $_SESSION['alert'] = $_SESSION['image']['error'];
        echo $_FILES['image']['error'];
      }

})->name('image_test');

//summernote test
Route::view('/note', 'back_end.posts.note');