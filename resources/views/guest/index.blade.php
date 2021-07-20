@extends('layouts.app')


@section('content')
    @foreach ($posts as $post)
        <img src="{{$post->user_image}}" alt="">
        <h3>{{$post->user_name}}</h3>
        <h3>{{$post->followers}}</h3>
        <h3>{{$post->post_type}}</h3>
        <h3>{{$post->publication_data}}</h3>
        <h3>{{$post->post_image}}</h3>
        <h3>{{$post->description}}</h3>
    @endforeach
@endsection