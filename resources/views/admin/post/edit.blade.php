@extends('layouts.admin')

@section('title', 'Post Edit')

@section('content')

    <div class="edit">
        <h3 class="mb-5">Edit The Post</h3>

        <div class="create">
    
            <form action="{{ route('admin.posts.update', $post->id)}}" method="post" class="container" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                {{-- User Image --}}
                <div class="d-flex justify-content-center mt-3">
                    <div class="form-group d-flex align-items-center">
                        <img src="{{asset('storage/'. $post->user_image)}}" alt="{{$post->user_image}}" style="height: 100px; width: 100px; border-radius: 50%" class="mr-2">
                        <div>
                            <input type="file" name="user_image" value="{{old('user_image')}}" class="mt-2 d-block">
                            <small id="imageHelperr" class="form-text text-muted">Select a profile image, max 50Kbs</small>
                        </div>
                    </div>
                    @error('user_image')
                        <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror
                </div>
                {{-- /User Image --}}
    
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
                        <small id="followersHelperr" class="form-text text-muted">Type a follower for the post</small>
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
                {{-- /Short Content --}}
    
    
                {{-- Post Image --}}
                <div class="d-flex justify-content-center mt-3">
                    <div class="form-group">
                        <img src="{{asset('storage/'. $post->post_image)}}" alt="{{$post->user_name}}" style="height: 300px; width: 600px; border-radius: 5px;">
                        <input type="file" name="post_image" value="{{old('post_image')}}" class="mt-2 d-block @error('post_image') is-invalid @enderror">
                        <small id="imageHelperr" class="form-text text-muted">Select an image for the post, max 50Kbs</small>
                    </div>
                    @error('post_image')
                        <div class="alert alert-danger">{{ $message }}</div>    
                    @enderror
                </div>
                {{-- /Post Image --}}
    
    
                {{-- Long Content --}}
                <div class="long_content">
                
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
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                            <option value="">Select a category</option>
        
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected' : ""}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <small id="categoryHelper" class="form-text text-muted">Select a category for the post</small>
                    </div>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="form-group">
	                    <label for="tags">Tags</label>
	                    <select multiple class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags">
	                        <option value="" disabled>Select a Tag</option>
	                        @if($tags)
                                @foreach ($tags as $tag)
                                    @if ($errors->any())
                                        <option value="{{$tag->id}}" {{in_array($tag->id, old('tags') ? 'selected' : '')}}></option>
                                    @else 
                                        <option value="{{$tag->id}}" {{$post->tags->contains($tag) ? 'selected' : '' }}>{{$tag->name}}</option>
                                    @endif
                                @endforeach 
	                        @endif
	                    </select>
                        <small id="tagHelper" class="form-text text-muted">Select one or more tags for the post</small>
                    </div>
                    @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                {{-- /Long Content --}}
    
                <div class="form-group">
                    <div class="center">
                        <input type="submit" value="Update" class="button">
                    </div>
                </div>
            </form>
    </div>
@endsection






    