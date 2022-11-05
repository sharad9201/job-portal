<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use File;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        // dd($user_id);
        $post=Post::find(1);
        dd($post);
        $post_id = Post::where('id',$post)->get();
        dd($post_id);

        return view('user.index', compact('posts'));
        return view('user.index');
       
            
            // $user_id = Auth::user()->id;
            // $post_id = Post::all();
            // // $post_id = Application::all();
            // // $posts = Post::where('user_id', $user_id)->get();

            // $posts = Post::where('post_id', $post_id)->get();
            // // dd($posts);
            // return view('user.index', compact('posts'));
            // return view('user.index');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request, Post $post)
    {
        //

        $data['user_id'] = Auth::user()->id;
        // $data['user_id'] = Post::post()->id;
        
        

        // $data['post_id'] = Post::all();
        // $data['post_id'] = Post::find(1);
        // $data = Post::find(1);


        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $path = public_path('uploads/images');
        if (!File::isDirectory($path)) {
            // 0777 is an read and write permission
            File::makeDirectory($path, 0777, true, true);
        }

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
            $data['image'] = $filename;
        }
        // dd($data);
        Application::create($data);
        return redirect()->route('users.index')->with('success', 'Applied  Successfully');

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
        //
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
    }
}
