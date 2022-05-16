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
        $post = Post::find(1)->get();
        foreach ($post as $key => $value) {
            dd($value->categories->user);
        }
 //       dd($post);
        return view('back_end.posts.test', compact('post'));
    }
}
