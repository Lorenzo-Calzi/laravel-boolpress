@extends('layouts.admin')

@section('title', 'Post Edit')

@section('content')

    <div class="edit">
        <h3>Edit The Post</h3>

        <form action="{{ route('admin.posts.update', $post->id)}}" method="post" class="container">
            @csrf

            @method('PUT')

            <div class="short_content">
                <div class="form-group">
                    <label for="user_image">Immagine Utente</label>
                    <input type="text" name="user_image" id="user_image" aria-describedby="imageHelperr" value="{{$post->user_image}}"> 
                    <small id="imageHelperr" class="form-text text-muted">Type a image url for the post</small>
                </div>
                
                <div class="form-group">
                    <label for="user_name">Nome Utente</label>
                    <input type="text" name="user_name" aria-describedby="nameHelperr" id="user_name" value="{{$post->user_name}}">
                    <small id="nameHelperr" class="form-text text-muted">Type a user name for the post</small>
                </div>
    
                <div class="form-group">
                    <label for="followers">Followers</label>
                    <input type="text" name="followers" id="followers" aria-describedby="followersHelperr" value="{{$post->followers}}">
                    <small id="followersHelperr" class="form-text text-muted">Type a follower fot the post</small>
                </div>

                <div class="form-group">
                    <label for="publication_data">Data di pubblicazione</label>
                    <input type="text" name="publication_data" id="publication_data" aria-describedby="dateHelperr" value="{{$post->publication_data}}">
                    <small id="dateHelperr" class="form-text text-muted">Type a date(hours) for the post</small>
                </div>

                <div class="form-group">
                    <label for="post_type">Tipo di post</label>
                    <input type="text" name="post_type" id="post_type" aria-describedby="typeHelperr" value="{{$post->post_type}}">
                    <small id="typeHelperr" class="form-text text-muted">Type a type of post</small>
                </div>
            </div>

            <div class="long_content">
                <div class="form-group">
                    <label for="post_image">Immagine Post</label>
                    <input type="text" name="post_image" id="post_image" aria-describedby="imageHelperr" value="{{$post->post_image}}">
                    <small id="imageHelperr" class="form-text text-muted">Type a image url for the post, max 255 characters</small>
                </div>
                
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description" aria-describedby="descriptionHelperr" value="{{$post->description}}">
                    <small id="descriptionHelperr" class="form-text text-muted">Type a description for the post</small>
                </div>
            </div>

            <div class="form-group">
                <div class="center">
                    <input type="submit" value="UPDATE" class="button">
                </div>
            </div>

        </form>
    </div>
@endsection






    