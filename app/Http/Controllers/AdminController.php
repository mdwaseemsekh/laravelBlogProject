<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');

    }

  
    public function check(Request $request)
    {
        $request->validate([ 
            'email' => 'required|email',
             'password' => 'required|min:6', 
            ]); 
            
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) { 
                return redirect()->intended(route('admin.dashboard'));
             } return back()->withInput($request->only('email'))
             ->withErrors([ 'email' => 'These credentials do not match our records.', ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    public function dashboard(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);

        return view('admin.dashboard',['blogs' => $posts,
                            'searching'=>false]);
      }
    

   
}
