@extends('layouts/main')
@section('content')


<div>
    <ul>

        <?php 

            // Affichage des 3 articles les plus récents
            for ($i=sizeof($posts); $i>sizeof($posts)-3; $i--){

                // Conversion en format url
                $url = str_replace(" ", "_", $posts[$i-1]->post_title);
                $url = str_replace(".", "", $url);

                echo('<li><a href=http://localhost:8000/articles/'.$url.'>'.
                $posts[$i-1]->post_title.'</a>'.$posts[$i-1]->post_date.'</li>');
                } 
        ?>
        
    </ul>

</div>


@endsection