<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('id');
        return view('admin.post.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* ddd($request->all()); */

        $validated = $request->validate([
        'user_image'=> 'required',
        'user_name' => 'required | min:5 | max:100',
        'followers' => 'required | numeric',
        'publication_data' => 'required | numeric',
        'post_type' => 'required | max:30',
        'post_image'=> 'required | mimes:jpeg,jpg,png',
        'description' => 'required | min:5 | max:1000',
        ]);
        
        $file_path = Storage::put('post_images', $validated['post_image']);
        $validated['post_image'] = $file_path;
        
        Post::create($validated);
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post 
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $validated = $request->validate([
            'user_image'=> 'required',
            'user_name' => 'required | min:5 | max:100',
            'followers' => 'required | numeric',
            'publication_data' => 'required | numeric',
            'post_type' => 'required | max:30',
            'post_image'=> 'required | mimes:jpeg,jpg,png',
            'description' => 'required | min:5 | max:1000',
            ]);
            

        if($request->hasFile('post_image')) {
            $file_path = Storage::put('post_images', $validated['post_image']);  
            $validated['post_image'] = $file_path;
        }

        $post->update($validated);
        return redirect()->route('admin.posts.show', $post->id);  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
