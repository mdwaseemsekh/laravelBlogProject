<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AppController extends Controller
{
  public function index(){
    return view('index');
  }
  public function blogs(){
    $posts = Post::all();

    return view('blogs',['posts' => $posts]);
  }
  public function blog($id){

   $post = Post::findOrFail($id);
    return view('blog',['blog' => $post]);
  }
  public function team(){
    return view('team');
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
}
