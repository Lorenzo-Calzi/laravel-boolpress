<?php
    $correct_key_name = str_replace('_', ' ', $key)
?>

@extends('layouts.app')

@section('content')

                
    <div class="posts">
        <div class="title">
            <h6>posts di</h6>
            <h1>{{$correct_key_name}}</h1>
        </div>
               
        @foreach ($posts as $post)
            @if($correct_key_name === $post->user_name)
                <div class="post">
                    <div class="content">
                        <div class="left">
                            <img src="{{asset('storage/' . $post->user_image)}}" alt="{{$post->user_name}}">
                        </div>
                        <div class="right">
                            <a href="{{ route('userName') }}"><h3>{{$post->user_name}}</h3></a>
                            <h5>{{$post->followers}} followers</h5>
                            <span>{{$post->publication_data}} ore • </span>
                            <span>{{$post->post_type}} • </span>
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        
                    </div>
                    <div class="paragraph">
                        <p>{{$post->description}}</p>
                    </div>
                
                    <div class="image">
                        <img src="{{asset('storage/' . $post->post_image)}}" alt="">
                    </div>
                
                    <div class="opinions">
                        <i class="far fa-thumbs-up"></i>
                        <i class="fas fa-sign-language"></i>
                        <i class="far fa-heart"></i>
                    </div>
                
                    <div class="share">
                        <i class="far fa-thumbs-up"> Consiglia</i>
                        <i class="far fa-comment"> Commenta</i>
                        <i class="fas fa-share"> Condividi</i>
                        <i class="far fa-paper-plane"> Invia</i>
                    </div>
                
                    <div class="comment">
                        <img src="{{asset('storage/' . $post->user_image)}}" alt="{{$post->user_name}}">
                
                        <input type="text" name="" id="" placeholder="Aggiungi un commento...">
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection