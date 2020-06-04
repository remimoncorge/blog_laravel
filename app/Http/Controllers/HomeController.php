<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){

        $posts = \App\Post::orderBy('post_date')->get(); //get all posts

        


        return view('layouts/welcome',array('posts' => $posts));

 
        
    }
}
 