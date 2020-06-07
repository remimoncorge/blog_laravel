@extends('layouts/main')

@section('content')

<h1>CRUD</h1>

<div>
    <table>
        @foreach ( $posts as $post )

        <tr>
            <td>{{$post->post_title}}</td>
            <th>{{$post->post_date}}</td>
            <td><button id="edit_button" >Éditer</button></td>
            <td><button id="delete_button">Supprimer</button></td>
        </tr>

        @endforeach

    
    </table>
</div>


<div>
    <button id="new_button">Nouvel article</button>
</div>
    

@endsection
