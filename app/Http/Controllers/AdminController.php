<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\EditRequest;
use App\Http\Requests\CreateRequest;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retourne les posts avec une vue d'administrateur
        $posts = \App\Post::orderBy('post_date')->get(); // post trié par date
        return view('layouts/admin', array('posts'=>$posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retourne un formulaire pour créer un post
        return view('/layouts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        // Enregistre un nouveau post
        $new_post = new Post;
        $new_post->setAttribute('user_id', random_int(0,10));
        $new_post->setAttribute('post_date', now());
        $new_post->setAttribute('post_content', $request->content);
        $new_post->setAttribute('post_title', $request->title);
        $new_post->setAttribute('post_name', $request->name);
        $new_post->setAttribute('post_status', $request->statut);
        $new_post->setAttribute('post_category', $request->categorie);
        $new_post->setAttribute('post_type', 'article');
        $new_post->setAttribute('image', $request->image);

        $new_post->save();

        $message = "L'article a bien été ajouté";

        $posts = \App\Post::orderBy('post_date')->get(); // post trié par date

        // On revient à l'écran d'administration
        return view('/layouts/admin', array('posts'=>$posts, 'message'=>$message));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // On récupère l'article et on envoie un formulaire de modification
        $article = \App\Post::where('id',$_GET["edit"])->get();
        return view('layouts/edit', array('post'=>$article));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request)
    {
        // Modification du post en fonction du formulaire

       \App\Post::where('id',$request->id)
       ->update(['post_title' => $request->title, 'post_content' => $request->content,
       'post_type' => $request->statut, 'post_type' => $request->statut]);

        $message = "Votre modification a bien été enregistrée";

        $posts = \App\Post::orderBy('post_date')->get(); // post trié par date

        // On revient à l'écran d'administration
        return view('/layouts/admin', array('posts'=>$posts, 'message'=>$message));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {   
        // On récupère l'article et on le supprime
        \App\Post::where('id',$_GET["delete"])->delete();
        
        $message = "L'article a bien été retiré";

        $posts = \App\Post::orderBy('post_date')->get(); // post trié par date

        // On revient à l'écran d'administration
        return view('/layouts/admin', array('posts'=>$posts, 'message'=>$message));

    }
}
