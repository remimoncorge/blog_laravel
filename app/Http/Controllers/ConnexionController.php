<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;

class ConnexionController extends Controller
{
    //

    public function index(){
        return view('layouts/connexion');
    }

    public function connexion(ConnexionRequest $request)
    {
        // On récupère la ligne correspondant à l'email dans la base de données
        $user = \App\User::where('email',$request->email)->get();

        // Si il n'y a pas d'adresse mail correspondante, on retourne une erreur
        if($user=='[]'){
            $message = "Votre adresse mail est incorrecte";
            return view('layouts/connexion', array('message' => $message));
        }

        // Si le mot de passe est mauvais, on retourne une erreur
        else if ($user[0]['password']!=$request->mdp){
            $message = "Votre mot de passe est incorrect";
            return view('layouts/connexion', array('message' => $message));

        }

        // Sinon on peut accéder au CRUD
        else{
            $posts = \App\Post::orderBy('post_date')->get(); // post trié par date
            return view('/admin', array('posts' => $posts));
        }

        
    }

}
