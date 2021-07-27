@extends('layouts.app')

@section('content')
    <section class="posts-category container">
        <h1>Articles in {{$category->name}}</h1>

        @forelse ($category->posts as $post)
            <div class="card mb-5">
                <img class="card-img-top" style="height: 500px;" src="{{asset('storage/' . $post->post_image)}}" alt="{{$post->user_name}}">
                <div class="card-body">
                    <span class="card-title pr-5">{{$post->user_name}}</span>  
                    <span class="card-title pr-5">Followers:{{$post->followers}}</span> 
                    <span class="card-title pr-5">{{$post->publication_data}}h ago</span>
                    <span class="card-title pr-5">{{$post->post_type}}</span>  
                </div>
            </div>
        @empty
            <p>Niente da vedere qui </p>  
        @endforelse
    </section>
@endsection


