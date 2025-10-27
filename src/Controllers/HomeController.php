<?php

namespace App\Controllers;

use App\Models\classes\User;
use App\Models\classes\Post;
use App\Models\Connection;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        $this->view("Home", ['posts' => $posts]);
    }
}

?>