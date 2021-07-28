<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
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
        'user_image'=> 'required | mimes:jpeg,jpg,png',
        'user_name' => 'required | min:5 | max:100',
        'followers' => 'required | numeric',
        'publication_data' => 'required | numeric',
        'post_type' => 'required | max:30',
        'post_image'=> 'required | mimes:jpeg,jpg,png',
        'description' => 'required | min:5 | max:1000',
        'category_id' => 'nullable | exists:categories,id',
        'tags'=> 'exists:tags,id'
        ]);
        
        $file_path = Storage::put('post_images', $validated['post_image']);
        $validated['post_image'] = $file_path;

        $second_path = Storage::put('user_image', $validated['user_image']);
        $validated['user_image'] = $second_path;
        
        $post = Post::create($validated);
        $post->tags()->attach($request->tags);
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
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
            'user_image'=> 'required | mimes:jpeg,jpg,png',
            'user_name' => 'required | min:5 | max:100',
            'followers' => 'required | numeric',
            'publication_data' => 'required | numeric',
            'post_type' => 'required | max:30',
            'post_image'=> 'required | mimes:jpeg,jpg,png',
            'description' => 'required | min:5 | max:1000',
            'category_id' => 'nullable | exists:categories,id',
            'tags'=> 'exists:tags,id'
            ]);
            

        if($request->hasFile('post_image')) {
            $file_path = Storage::put('post_images', $validated['post_image']);  
            $validated['post_image'] = $file_path;

            Storage::delete('post_image');
        }

        if($request->hasFile('user_image')) {
            $file_path = Storage::put('user_images', $validated['user_image']);  
            $validated['user_image'] = $file_path;

            Storage::delete('user_image');
        }

        $post->update($validated);
        $post->tags()->sync($request->tags);
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
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
