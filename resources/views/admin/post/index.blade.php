@extends('layouts.admin')

@section('content')
<div class="admin_posts">
    @foreach ($posts as $post)
        <table>
            <tbody>
                <tr>
                    <th> <h4>Id:</h4> </th>
                    <th> <h4>User Image:</h4> </th>
                    <th> <h4>User Name:</h4> </th>
                    <th> <h4>Followers:</h4> </th>
                    <th> <h4>Publication Data:</h4> </th>
                    <th> <h4>Description:</h4> </th>
                    <th> <h4>Post Type:</h4> </th>
                    <th> <h4>Post Image:</h4> </th>
                </tr>
                <tr>
                    <th> <span>Numero {{$post->id}}</span> </th>
                    <th> <img src="{{$post->user_image}}" alt="{{$post->user_name}}"> </th>
                    <th> <span>{{$post->user_name}}</span> </th>
                    <th> <span>{{$post->followers}} followers</span> </th>
                    <th> <span>{{$post->publication_data}}h ago</span> </th>
                    <th> <span>{{ Str::limit($post->description, $limit = 70, $end = '...') }}</span> </th>
                    <th> <span>{{$post->post_type}}</span> </th>
                    <th> <img src="{{$post->post_image}}" alt="{{$post->user_name}}"> </th>
                </tr>
            </tbody>
        </table>

        <form action="{{route('admin.posts.show', $post->id)}}" method="get">
            <input type="submit" value="Guarda" class="blue">
        </form>

        <form action="{{route('admin.posts.edit', $post->id)}}" method="get">
            <input type="submit" value="Modifica" class="green">
        </form>

        <form action="{{ route('admin.posts.destroy', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
    
            <input type="submit" value="Elimina" class="red">
        </form>

    @endforeach
</div> 
@endsection


