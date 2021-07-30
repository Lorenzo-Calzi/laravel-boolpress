@extends('layouts.app')
​
@section('content')
​
<div class="posts">
    <div class="container d-flex flex-wrap">
        <div v-for="post in posts">
            <img :src="'storage/' + post.user_image" alt="">
            <h4> @{{post.user_name}} </h4>
        </div>
    </div>
</div>
@endsection