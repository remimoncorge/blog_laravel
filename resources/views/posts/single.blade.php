@extends('layouts/main')
@section('content')

<div>   
    <h1>{{ $post->post_title }}</h1>
    <h2>Auteur : {{$post->post_name}}</h2>
    <h2>Parution : {{$post->post_date}}</h2>
    <p>{{$post->post_content}}</p>
</div>
        
@endsection