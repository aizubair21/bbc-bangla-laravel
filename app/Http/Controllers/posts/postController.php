<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::get();
        //all post
        return view('back_end.posts.allPost', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = category::get();
        return view('back_end.posts.add_new', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->image->store('uploads', 'public');
        // $request->validate([
        //     'title' => ['required'],
        //     'description' => ['required'],
        //     'category' => ['required'],
        // ]);

        // $post = new post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->image_caption = $request->image_caption;
        // $post->image = $request->iamge;
        

        // $post->save();
        //     $request('image')->store(
        //     'posts/uploads',
        //     'public');


        // return redirect()->back()->with(['status'=>'Post Added !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        post::where('id',$id)->delete();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      

        
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $category = category::get();
        $post = post::where('id', $id)->get();
        return view('back_end.posts.test');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        return "update method";
    }

}
