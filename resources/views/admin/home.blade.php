@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div>
                        {{ __('Now you can') }} <a href="{{route('admin.posts.index')}}">See</a> {{ __('the posts,') }}
                        {{ __('Or you can') }} <a href="{{route('admin.posts.create')}}">Create</a> {{ __('one.') }}
                    </div>

                    {{-- {{ __('Here you can see the ') }} <a href="{{route('vue-posts')}}">Vue</a> {{ __('posts.') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
