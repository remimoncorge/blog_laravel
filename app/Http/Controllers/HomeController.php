<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){

        $posts = \App\Post::orderBy('post_date')->get(); // post trié par date

        return view('layouts/welcome',array('posts' => $posts));
        
    }
}
 