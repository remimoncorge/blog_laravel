@extends('layouts/main');

@section('content')

<h1>Formulaire de contact</h1>

    
<form action="/contact" method="POST" id="contact_form">
    
    <div class="errors">
        {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    

    {{ csrf_field() }}
    <input type="text" name="nom" placeholder="Nom" >
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" form="contact_form" rows="5" placeholder="Votre message"></textarea>
    <input type="submit" value="Envoyer" >

    
    

</form>

@endsection