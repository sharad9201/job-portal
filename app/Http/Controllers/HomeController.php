<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        // dd($role);
        if ($role == '1') {
            return view('admin');
        } else {
            return view('home');
        }
    }

    public function show_user($id){

        // $apply = Auth::user()->id;
        $posts = Post::find($id);
        // dd($posts);

         return view('application.application_array', compact('posts'));

    }

    public function search(Request $request){
        $keyword=$request->search_name;
        // $posts = Post::all();
        // dd($posts);
       
            $posts = Post::where('title','LIKE', '%'.$keyword.'%')->get();
            return view('search',compact('posts','keyword'));
        
       
    }
}
