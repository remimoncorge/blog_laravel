@extends('layouts/main_admin')

@section('content')

<h1>Éditer un article</h1>


<form action="/admin/edit" method="post" id="edit_form">

    <div class="errors">
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
    </div>


    {{ csrf_field() }}
    <input name="id" type="hidden" value="{{$post[0]['id']}}">
    <h3>Titre</h3>
    <textarea name="title" form="edit_form" rows="2">{{$post[0]['post_title']}}</textarea>

    <h3>Contenu</h3>
    <textarea name="content" form="edit_form" rows="10">{{$post[0]['post_content']}}</textarea>

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

    
    <input type="submit" value="Modifier">

</form>

@endsection