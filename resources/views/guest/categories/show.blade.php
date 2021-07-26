@extends('layouts.app')

@section('content')
    <section class="posts-category container">
        <h1>Articles in {{$category->name}}</h1>

        @forelse ($category->posts as $post)
            <div class="card">
                <img class="card-img-top" src="{{$post->post_image}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$post->}}</h4>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
        @empty
            <p>Niente da vedere qui </p>  
        @endforelse
    </section>
@endsection


