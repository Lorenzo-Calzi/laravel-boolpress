@extends('layouts.app')

@section('title', 'Post Create')

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="create">
        <h3>Add A New Post</h3>

        <form action="{{ route('admin.posts.store')}}" method="post" class="container">
            @csrf

            <div class="short_content">
                <div class="form-group">
                    <label for="user_image">Immagine Utente</label>
                    <input type="text" name="user_image" id="user_image" placeholder="Percorso dell'immagine..." value="{{old('user_image')}}"> 
                </div>
                
                <div class="form-group">
                    <label for="user_image">Nome Utente</label>
                    <input type="text" name="user_name" id="user_name" placeholder="Nome dell'utente..." value="{{old('user_image')}}">
                </div>
    
                <div class="form-group">
                    <label for="followers">Followers</label>
                    <input type="text" name="followers" id="followers" placeholder="Numero di followers..." value="{{old('followers')}}">
                </div>

                <div class="form-group">
                    <label for="publication_data">Data di pubblicazione</label>
                    <input type="text" name="publication_data" id="publication_data" placeholder="Data di pubblicazione..." value="{{old('publication_data')}}">
                </div>

                <div class="form-group">
                    <label for="post_type">Tipo di post</label>
                    <input type="text" name="post_type" id="post_type" placeholder="Tipo di post..." value="{{old('post_type')}}">
                </div>
            </div>

            <div class="long_content">
                <div class="form-group">
                    <label for="post_image">Immagine Post</label>
                    <input type="text" name="post_image" id="post_image" placeholder="Percorso dell'immagine..." value="{{old('post_image')}}">
                </div>
                
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description" placeholder="Descrizione del post..." value="{{old('description')}}">
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

