@extends('layouts.admin')

@section('title', 'Post Create')

@section('content')

    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="create">
        <h3>Add A New Post</h3>

        <form action="{{ route('admin.posts.store')}}" method="post" class="container" enctype="multipart/form-data">
            @csrf

            {{-- Short Content --}}
            <div class="short_content">
                <div class="form-group">
                    <label for="user_name">Nome Utente</label>
                    <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" id="user_name" placeholder="Nome dell'utente..." value="{{old('user_name')}}">
                    <small id="nameHelperr" class="form-text text-muted">Type a user name for the post</small>
                </div>
                @error('user_name')
                <div class="alert alert-danger">{{ $message }}</div>    
                @enderror
    
                <div class="form-group">
                    <label for="followers">Followers</label>
                    <input type="text" name="followers" class="form-control @error('followers') is-invalid @enderror" id="followers" placeholder="Numero di followers..." value="{{old('followers')}}">
                    <small id="followersHelperr" class="form-text text-muted">Type a follower fot the post</small>
                </div>
                @error('followers')
                <div class="alert alert-danger">{{ $message }}</div>    
                @enderror

                <div class="form-group">
                    <label for="publication_data">Data di pubblicazione</label>
                    <input type="text" name="publication_data" class="form-control @error('publication_data') is-invalid @enderror" id="publication_data" placeholder="Data di pubblicazione..." value="{{old('publication_data')}}">
                    <small id="dateHelperr" class="form-text text-muted">Type a date(hours) for the post</small>
                </div>
                @error('publication_data')
                <div class="alert alert-danger">{{ $message }}</div>    
                @enderror

                <div class="form-group">
                    <label for="post_type">Tipo di post</label>
                    <input type="text" name="post_type" class="form-control @error('post_type') is-invalid @enderror" id="post_type" placeholder="Tipo di post..." value="{{old('post_type')}}">
                    <small id="typeHelperr" class="form-text text-muted">Type a type of post</small>
                </div>
                @error('post_type')
                <div class="alert alert-danger">{{ $message }}</div>    
                @enderror
            </div>
            {{-- Short Content --}}


            {{-- Image --}}
            <div class="d-flex justify-content-center mt-3">
                <div class="form-group">
                    <label for="post_image">Immagine Post</label>    
                    <input type="file" name="post_image" value="{{old('post_image')}}" class="d-block">
                    <small id="imageHelperr" class="form-text text-muted">Select an image for the post, max 50Kbs</small>
                </div>
                @error('post_image')
                    <div class="alert alert-danger">{{ $message }}</div>    
                @enderror
            </div>
            {{-- Image --}}


            {{-- Long Content --}}
            <div class="long_content">
                <div class="form-group">
                    <label for="user_image">Immagine Utente</label>
                    <input type="text" name="user_image" class="form-control @error('user_image') is-invalid @enderror" id="user_image" placeholder="Percorso dell'immagine..." value="{{old('user_image')}}"> 
                    <small id="imageHelperr" class="form-text text-muted">Type a image url for the post</small>
                </div>
                @error('user_image')
                <div class="alert alert-danger">{{ $message }}</div>    
                @enderror
            
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Descrizione del post..." value="{{old('description')}}">
                    <small id="descriptionHelperr" class="form-text text-muted">Type a description for the post</small>
                </div>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>    
                @enderror

                <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="" disabled>Select a category</option>
    
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <small id="categoryHelper" class="form-text text-muted">Select a category for the post</small>
                </div>
            </div> 
            {{-- Long Content --}}

            

            <div class="form-group">
                <div class="center">
                    <input type="submit" value="Create" class="button">
                </div>
            </div> 
        </form>

    </div>
@endsection

