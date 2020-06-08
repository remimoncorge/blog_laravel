@extends('layouts/main_admin')

@section('content')

<h1>Ajouter un article</h1>


<form action="/admin/create" method="post" id="create_form">

    <div class="errors">
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
    </div>


    {{ csrf_field() }}
    <input name="id" type="hidden" value="4">

    <h3>Auteur</h3>
    <input type='text' name="name" form="create_form"  placeholder="Votre nom">

    <h3>Titre</h3>
    <textarea name="title" form="create_form" rows="2" placeholder="Titre"></textarea>

    <h3>Contenu</h3>
    <textarea name="content" form="create_form" rows="10" placeholder="Contenu"></textarea>

    <h3>URL image</h3>
    <input type="text" form="create_form" name="image" placeholder="Collé ici l'URL de l'image que vous souhaitez">

    
    <h3>Statut</h3>
    <select name="statut">
        <libellé>Statut</libellé>
        <option valeur="publie">Publié</option>
        <option valeur="redaction">Rédaction</option>
</select>

    <h3>Catégorie</h3>
    <select name="categorie">
        <libellé>Catégorie</libellé>
        <option valeur="cuisine">Cuisine</option>
        <option valeur="sociale">Vie sociale</option>
        <option valeur="voyage">Voyage</option>
</select>

    
    <input type="submit" value="Envoyer">

</form>

@endsection