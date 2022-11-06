<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use File;
use PDO;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $user_id = Auth::user()->id;
        $posts = Post::paginate();
        return view('post.index', compact('posts'));
    }

    public function view_more($id){

        $post = Post::find($id);
        return view('post.view_more', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //

        $data['user_id'] = Auth::user()->id;
        $data['title'] = $request->title;
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
        Post::create($data);
        return redirect()->route('posts.index')->with('success', 'Post Created Successfully');

    }

    // aplly for the post

    public function apply($id){
        
        $post= Post::find($id);
        return view('post.apply',compact('post'));
    }

    public function apply_store($post_id, ApplicationRequest $request){

        $data['user_id'] = Auth::user()->id;
       
        // $post = Post::find($id);
        $data['post_id'] = $post_id;

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
        
        Application::create($data);
        return redirect()->route('posts.index')->with('success', 'Applied  Successfully');

    }
 
    // Admin to see the users application

    public function view_users_data($id){

        // $apply = Auth::user()->id;
        $apply = Application::find($id);
         return view('applications.application_array', compact('apply'));

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
        // make constructor 
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
