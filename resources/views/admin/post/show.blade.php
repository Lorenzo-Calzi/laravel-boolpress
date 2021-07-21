@extends('layouts.admin')

@section('content')
    <div class="posts">
        <div class="post">
            <div class="content">
                <div class="left">
                    <img src="{{$post->user_image}}" alt="">
                </div>
                <div class="right">
                    <h3>{{$post->user_name}}</h3>
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
                <img src="{{$post->post_image}}" alt="">
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
                <img src="{{$post->user_image}}" alt="">

                <input type="text" name="" id="" placeholder="Aggiungi un commento...">
            </div>
        </div>
    </div>    
@endsection