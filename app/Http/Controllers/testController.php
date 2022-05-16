<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use App\Models\category;
use Illuminate\Support\Facades\Auth;


class testController extends Controller
{
    //test

    public function test(Request $rquest)
    {   
        // // $post = post::where('author',1)->get();
        $post = Post::find(1)->get();
        // // $post = Auth::user()->posts()->get();
        // foreach ($post as $key => $value) {
        //     dd($value->user_name);
            
        // }
        return view('back_end.posts.test', compact('post'));
    }
}
