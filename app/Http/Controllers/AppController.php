<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Query;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class AppController extends Controller
{
  public function index(){
    $team = TeamMember::limit(4)->get();
    $blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();


    return view('index',['teamMembers'=> $team
                       ,'blogs' => $blogs]);
  }
  public function blogs(){
    $posts = Post::orderBy('created_at', 'desc')->paginate(6);

    return view('blogs',['posts' => $posts,
                        'searching'=>false]);
  }

  public function search_blog(Request $request){
  $search = $request->search_blog;
  $blogs = Post::where('title','like','%'.$search.'%')
                  ->orwhere('content','like','%'.$search.'%')
                  ->paginate(6);
  return view('blogs',['posts' => $blogs,
                      'searching'=>true,
                      'search'=> $search]);

  }
  public function blog($slug)
{
    // Fetch the blog post by slug
    $post = Post::where('slug', $slug)->firstOrFail();
    $same_category = Post::where('category',$post->category)->take(2)->get();

    // Fetch the 2 most recent posts (excluding the current one, if needed)
    $recent_posts = Post::orderBy('created_at', 'desc')
                        ->take(2)
                        ->get();

    // Return the view with the blog post and recent posts
    return view('blog', [
        'blog' => $post,
        'recent_posts' => $recent_posts,
        'same_category_posts' => $same_category
    ]);
}

  public function team(){
    $team_members = TeamMember::all();

    return view('team',['teamMembers' => $team_members]);
  }
  public function contact(){
    return view('contact');
  }
  public function about(){
    return view('about');
  }
  
  public function services(){
    return view('services');
  }

  public function queries(Request $request){
  $validation = $request->validate([
  'name' => 'required|string|min:3',
  'email'=> 'email|required',
  'mobile' => 'required|numeric|min:10',
  'query'  => 'required|string',

  ]);

  if(Query::create($validation)){
   return redirect()->route('contact')->with('message','Your Query Submmited Successfully');
  }else{
    return redirect()->route('contact')->with('message','Your Query Submmition Failed');
 
  }

  }
}
