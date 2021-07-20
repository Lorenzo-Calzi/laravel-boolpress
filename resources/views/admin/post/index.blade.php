@extends('layouts.admin')

@section('content')
<div class="admin_posts">
    @foreach ($posts as $post)
        <table>
            <tbody>
                <tr>
                    <th> <h4>User Image:</h4> </th>
                    <th> <h4>User Name:</h4> </th>
                    <th> <h4>Followers:</h4> </th>
                    <th> <h4>Publication Data:</h4> </th>
                    <th> <h4>Post Type:</h4> </th>
                    <th> <h4>Description:</h4> </th>
                    <th> <h4>Post Image:</h4> </th>
                </tr>
                <tr>
                    <th> <img src="{{$post->user_image}}" alt="{{$post->user_name}}"> </th>
                    <th> <span>{{$post->user_name}}</span> </th>
                    <th> <span>{{$post->followers}} followers</span> </th>
                    <th> <span>{{$post->publication_data}}</span> </th>
                    <th> <span>{{$post->post_type}}</span> </th>
                    <th> <span>{{$post->description}}</span> </th>
                    <th> <img src="{{$post->post_image}}" alt="{{$post->user_name}}"> </th>
                </tr>
            </tbody>
        </table>
    @endforeach
</div> 
@endsection


