<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

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
    public function edit(Request $request, $id)
    {   
        $post = post::where('id',$id)->get();
        // dd($post);
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
        $post->image_caption = $request->caption;
        $post->image = $_FILES['image']['name'];
        $post->category = $request->category;
        $post->author = Auth::id();
        $post->save();

        move_uploaded_file($_FILES["image"]["tmp_name"], public_path('images/'). basename($_FILES['image']['name']));

        return redirect()->route('post.index')->with(['status'=>'New Post Added !']);
    }

    //update method
    //whe i call update route it hit into "show" method. I don't know why  
    public function updated ( Request $request, $post)
    {
        $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'category'=>['required'],
        ]);

        post::where('id',$post)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$_FILES['image']['name'],
            'image_caption' => $request->caption,
            'category' => $request->category,
            'author' => Auth::id(),
        ]);

        move_uploaded_file($_FILES["image"]["tmp_name"], public_path('images/'). basename($_FILES['image']['name']));

        // $request->image->storeAs('images', );
        // storage/app/images/file.png

        return redirect()->route('post.index')->with(['status'=>'Successfuly Updated !']);
    }


    //destroy methoed
    public function destroy($id)
    {   
        post::where('id', $id)->delete();
        return redirect()->back()->with(['status'=>'Successfuly Deleted !']);
    }
}
