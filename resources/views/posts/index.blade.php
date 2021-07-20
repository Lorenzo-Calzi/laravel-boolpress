@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        {{-- <img src="{{$product->image}}" alt="">
        <h4>{{$product->name}}</h4>
        <p>{{$product->description}}</p> --}}
    @endforeach
@endsection


