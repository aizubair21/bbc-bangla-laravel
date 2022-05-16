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
        return view('back_end.category.add');
    }

    //store method
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = new category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->author = Auth::id();
        $category->save();
        
        return redirect()->route('category.index')->with(['status'=>'New category added ! !']);
    }

    //update method
    public function update(Request $request, $id)
    {
        return 'update';
    }



    //show mehtod
    public function show(Request $request, category $category)
    {   
        // dd($request->old_name);
        // dd(post::where('category',$request->old_name)->get());
       $request->validate([
            'name'=>'required',
            'slug'=>'required',
        ]);    

        $category->update([
            'name'=>$request->name,
            'slug' => $request->slug,
            'author' => Auth::id(),
        ]);

        post::where('category',$request->old_name)->update([
            'category'=>$request->name,
        ]);

        return redirect()->route('category.index')->with(['status'=>'Suceefully Updated !']);
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
        category::where('id', $id)->delete();
        return redirect()->route('category.index')->with(['status'=>'Successfuly Deleted !']);
    }
}
