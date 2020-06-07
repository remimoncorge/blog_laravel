@extends('layouts/main')
@section('content')

<div>   

    <h2>Merci {{$new_contact->contact_name}} !<br> Votre demande a bien été enregistrée<br><br></h1>

    <button><a href="/articles">Retour aux articles</a></button>
</div>
        
@endsection