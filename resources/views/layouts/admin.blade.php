@extends('layouts/main_admin')

@section('content')

<h1>CRUD</h1>

<div class="message"><h4>{{ $message ?? '' }}</h4></div>

<div>
    <table>
        @foreach ( $posts as $post )

        <tr>
            <td>{{$post->post_title}}</td>
            <th>{{$post->post_date}}</td>

            <form action="/admin/edit" method="get">
                <td><button id="edit_button" value='{{$post->id}}' name="edit">Éditer</button></td>
            </form>

            <form action="/admin/delete" method="get">
                <td><button id="delete_button" value='{{$post->id}}' name="delete">Supprimer</button></td>
            </form>
            
        </tr>

        @endforeach

    
    </table>
</div>


<div>
    <form action="/admin/create" method="get">
        <td><button id="new_button">Nouvel article</button></td>
    </form>
</div>
    

@endsection
