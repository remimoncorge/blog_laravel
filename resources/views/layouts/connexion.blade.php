@extends('layouts/main')

@section('content')

<h1>Connexion</h1>

<div class="errors">{{ $message ?? '' }}</div>

    
<form action="/connexion" method="POST" id="connexion_form">
    
    <div class="errors">
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('mdp', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    

    {{ csrf_field() }}
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="mdp" placeholder="Mot de passe"></textarea>
    <input type="submit" value="Se connecter" >

</form>

@endsection