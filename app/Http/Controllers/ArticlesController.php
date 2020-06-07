<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Comment;

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
        

        // On récupère le post et les commentaires pour les passer à la vue
        $post = \App\Post::where('post_title',$post_name)->first();
        $comments = \App\Comment::where('post_id',$post->id)->get(); 
        return view('posts/single',array( 'post' => $post, 'comments' => $comments));
     }


     public function store_comment(CommentRequest $request){
        
        // Enregistre un commentaire
        $new_comment = new Comment;
        $new_comment->setAttribute('post_id', $request->post_id);
        $new_comment->setAttribute('comment_name', $request->nom);
        $new_comment->setAttribute('comment_email', $request->email);
        $new_comment->setAttribute('comment_content', $request->message);
        $new_comment->save();

        // Envoie un écran de confirmation si le formulaire a été validé
        return view('layouts/comment_confirm', array('new_comment' => $new_comment));
     }
     
}




