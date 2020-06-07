@extends('layouts/main')
@section('content')

<div>   
    <h2>{{ $post->post_title }}</h1>
    <h3>Auteur : {{$post->post_name}}</h2>
    <h3>Parution : {{$post->post_date}}</h2>
    <p>{{$post->post_content}}</p>
    <img src="{{$post->image}}">
</div>

<div>

    <h2>Commentaires</h2>


     @foreach ( $comments as $comment )

     <p>
        <h4>{{$comment->comment_name}}</h4>
        {{ $comment->comment_content }}
    </p>
   
   @endforeach 

</div>

<div>
    <h3>Ajouter un commentaire</h3>

    <form action="/articles" method="POST" id="comment_form">
    
    <div class="errors">
        {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    

    {{ csrf_field() }}
    <input type="hidden" name="post_id" value= " {{$post->id}}" />
    <input type="text" name="nom" placeholder="Nom" >
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" form="comment_form" rows="5" placeholder="Votre commentaire"></textarea>
    <input type="submit" value="Envoyer" >

    </form>

</div>
        
@endsection