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
                    <input type="text" name="user_image" id="user_image" value="{{$post->user_image}}"> 
                </div>
                
                <div class="form-group">
                    <label for="user_name">Nome Utente</label>
                    <input type="text" name="user_name" id="user_name" value="{{$post->user_name}}">
                </div>
    
                <div class="form-group">
                    <label for="followers">Followers</label>
                    <input type="text" name="followers" id="followers" value="{{$post->followers}}">
                </div>

                <div class="form-group">
                    <label for="publication_data">Data di pubblicazione</label>
                    <input type="text" name="publication_data" id="publication_data" value="{{$post->publication_data}}">
                </div>

                <div class="form-group">
                    <label for="post_type">Tipo di post</label>
                    <input type="text" name="post_type" id="post_type" value="{{$post->post_type}}">
                </div>
            </div>

            <div class="long_content">
                <div class="form-group">
                    <label for="post_image">Immagine Post</label>
                    <input type="text" name="post_image" id="post_image" value="{{$post->post_image}}">
                </div>
                
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description" value="{{$post->description}}">
                </div>
            </div>

            <div class="form-group">
                <div class="center">
                    <input type="submit" value="Invia" class="button">
                </div>
            </div>

        </form>
    </div>
@endsection






    