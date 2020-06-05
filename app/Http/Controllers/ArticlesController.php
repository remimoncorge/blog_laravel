<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function index(){

        $posts = \App\Post::orderBy('post_date')->get(); // post trié par date

        return view('layouts/articles',array('posts' => $posts));
        
    }

    public function show($post_name) {

        // Conversion de l'url vers la forme dans la base de données
        $post_name=str_replace("_", " ", $post_name);
        $post_name = $post_name.'.';

        $post = \App\Post::where('post_title',$post_name)->first(); 
        return view('posts/single',array( 'post' => $post));
     }
     
}
