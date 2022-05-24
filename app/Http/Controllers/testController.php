<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\FileIterator\Factory;
use Faker;

class testController extends Controller
{
    //test

    public function test(Request $rquest)
    {   
       $posts = Post::where('category',13)->get();
       // $faker = Faker\Factory::create();
       // dd($faker->address);
       $str = "a qick brown fox jumps over the lazy dogs.a qick brown fox jumps over the lazy dogs.a qick brown fox jumps over the lazy dogs.a qick brown fox jumps over the lazy dogs." ;
       while (strlen($str) == 20) {
           dd(strlen($str));
    
       }
      //return view('back_end.posts.test', compact('post'));
    }
}
