@extends('layouts.admin')

@section('title', 'Post Edit')

@section('content')

    <div class="edit">
        <h3>Edit The Post</h3>

        <div class="create">
    
            <form action="{{ route('admin.posts.update', $post->id)}}" method="post" class="container" enctype="multipart/form-data">
                @csrf

                @method('PUT')
    
                {{-- Short Content --}}
                <div class="short_content">
                    <div class="form-group">
                        <label for="user_name">Nome Utente</label>
                        <input type="text" name="user_name" aria-describedby="nameHelperr" class="form-control @error('user_name') is-invalid @enderror" id="user_name" value="{{$post->user_name}}">
                        <small id="nameHelperr" class="form-text text-muted">Type a user name for the post</small>
                    </div>
                    @error('user_name')
                    <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror
        
                    <div class="form-group">
                        <label for="followers">Followers</label>
                        <input type="text" name="followers" class="form-control @error('followers') is-invalid @enderror" id="followers" aria-describedby="followersHelperr" value="{{$post->followers}}">
                        <small id="followersHelperr" class="form-text text-muted">Type a follower fot the post</small>
                    </div>
                    @error('followers')
                    <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror
    
                    <div class="form-group">
                        <label for="publication_data">Data di pubblicazione</label>
                        <input type="text" name="publication_data" class="form-control @error('publication_data') is-invalid @enderror" id="publication_data" aria-describedby="dateHelperr" value="{{$post->publication_data}}">
                        <small id="dateHelperr" class="form-text text-muted">Type a date(hours) for the post</small>
                    </div>
                    @error('publication_data')
                    <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror
    
                    <div class="form-group">
                        <label for="post_type">Tipo di post</label>
                        <input type="text" name="post_type" class="form-control @error('post_type') is-invalid @enderror" id="post_type" aria-describedby="typeHelperr" value="{{$post->post_type}}">
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
                        <img src="{{asset('storage/'. $post->post_image)}}" alt="{{$post->user_name}}" style="height: 300px; width: 600px">
                        <input type="file" name="post_image" value="{{old('post_image')}}" class="mt-2 d-block">
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
                        <input type="text" name="user_image" class="form-control @error('user_image') is-invalid @enderror" id="user_image" aria-describedby="imageHelperr" value="{{$post->user_image}}"> 
                        <small id="imageHelperr" class="form-text text-muted">Type a image url for the post</small>
                    </div>
                    @error('user_image')
                    <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror
                
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" aria-describedby="descriptionHelperr" value="{{$post->description}}">
                        <small id="descriptionHelperr" class="form-text text-muted">Type a description for the post</small>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror

                    <div class="form-group">
                        <label for="category_id">Categories</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="">Select a category</option>
        
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected' : ""}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <small id="categoryHelper" class="form-text text-muted">Select a category for the post</small>
                    </div>
                </div>
                {{-- Long Content --}}
    
                <div class="form-group">
                    <div class="center">
                        <input type="submit" value="Update" class="button">
                    </div>
                </div>
            </form>
    </div>
@endsection






    