<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function add_blog(){
        return view('admin.create_blog');
    }

    public function save(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'content' => 'required'
        ]);
        
        $validatedData['auther'] = Auth::guard('admin')->user()->name;
        $path = $request->file('image')->store('images','public');
        $validatedData['image'] = $path;
        
        if(Post::create($validatedData)){
            return redirect()->route('add_blog')->with('status','Blog Added Successfully');
        }
        else{
            return redirect()->route('add_blog')->with('status','Blog Added Successfully');

        }
        
      
    }
    public function edit($slug){
        $blog = Post::where('slug',$slug)->first();
        return view('admin.update_blog',['blog'=> $blog]);
    }

    public function update(Request $request,$slug){
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'content' => 'required'
        ]);
             
        $auther = Auth::guard('admin')->user()->name;
        
      
        $blog =  Post::where('slug',$slug)->first();
        $blog->title = $request->title;
        $blog->category = $request->category;
        if($request->hasFile('image')){
         $blog->image = $request->file('image')->store('images','public'); 
        }
        
        $blog->content = $request->content;
        $blog->auther = $auther;
        if($blog->save()){
         return "updated";
        }else{
            return 'not update';
        }
        
    }

    public function delete(Request $request){
        $request->validate([
            'id'=>'required'
        ]);
        $blog = Post::findOrFail($request->id);
        if($blog->delete()){
            return redirect()->route('admin.dashboard')->with('status',"Blog Deleted Successfully");
        
        }

        else{
            return redirect()->route('admin.dashboard')->with('status',"Blog Deletion Failed"); 
        }
    }
}
