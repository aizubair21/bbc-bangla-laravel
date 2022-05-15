<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class categoryController extends Controller
{
    //index method
    public function index()
    {   
        $post = post::get();
        //dd($post);
        $category = category::get();
        return view('back_end.category.index', compact('category','post'));
    }

    //create method 
    public function create()
    {
        return view('back_end.category.create');
    }

    //store method
    public function store(Request $request,  $id)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = new category();
        $category->title = $request->title;
        $category->slug = $request->sluf;
        $category->save();
        
        return redirect()->route('category.index')->with(['status'=>'Successfull updated !']);
    }

    //update method
    public function update(Request $request, $id)
    {
        
    }



    //show mehtod
    public function show(Request $request, $id)
    {   
        // dd($request->old_name);
        // dd(post::where('category',$request->old_name)->get());
       $request->validate([
            'name'=>'required',
            'slug'=>'required',
        ]);    

        category::where('id',$id)->update([
            'name'=>$request->name,
            'slug' => $request->slug,
            'author_name' => $request->author_name,
        ]);

        post::where('category',$request->old_name)->update([
            'category'=>$request->name,
        ]);

        return redirect()->route('category.index')->with(['status'=>'Suceefully Update !']);
    }

    //edit method
    public function edit(Category $category)
    {   
        //dd($category->id);
        return view('back_end.category.edit',['category'=>$category]);
    }

    //destroy method
    public function destroy($id)
    {
        category::while('id', $id)->delete();
        return redirect()->route('category.index')->with(['status'=>'Successfuly Deleted !']);
    }
}
