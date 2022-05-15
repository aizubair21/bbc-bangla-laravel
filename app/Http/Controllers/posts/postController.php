<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    //index method
    public function index()
    {
        $post = post::get();
        return view('back_end.posts.index', compact('post'));
    }

    //create method
    public function create()
    {   $category = category::get();
        return view('back_end.posts.add',compact('category'));
    }

    //show method
    // public function show($id)
    // {
    //     $post = post::where('id', $id)->get();
    //     $category = category::get();
    //     return view('back_end.posts.show', compact('post', 'category'));
    // }

    //edit method
    public function edit($id)
    {
        $post = post::where('id', $id)->get();
        $category = category::get();

        return view('back_end.posts.edit', compact('post','category'));
    }

    //store method 
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'category'=>['required'],
        ]);

        $post = new post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image_caption = $request->iamge_caption;
        $post->image = $request->image;
        $post->category = $request->category;
        $post->author = Auth::id();
        $post->save();


        return redirect()->route('post.index')->with(['status'=>'New Post Added !']);
    }

    //update method
    //whe i call update route it hit into "show" method. I don't know why  
    public function show(Request $request, $id)
    {
        $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'category'=>['required'],
        ]);

        $post = new post();

        $post->where('id', $id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$request->image,
            'image_caption' => $request->image_caption,
            'category' => $request->category,
            'author' => Auth::id(),
        ]);

        return redirect()->route('post.index')->with(['status'=>'Successfuly Updated !']);
    }


    //destroy methoed
    public function destroy($id)
    {
        dd($id);
        post::where('id', $id)->delete();
        return redirect()->back()->with(['status'=>'Successfuly Deleted !']);
    }
}
