<?php

namespace App\Controllers;

use App\Models\classes\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        $this->view("Home", ['posts' => $posts]);
    }
}

?>