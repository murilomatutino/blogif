<?php

namespace App\Controllers;

use App\Models\classes\User;
use App\Models\classes\Post;
use App\Models\classes\Comment;
use App\Helpers\classes\Auth;
use App\Models\Connection;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $comments = Comment::all();
        $id_user = Auth::get_session('id');
        
        $this->view("Home", ['posts' => $posts, 'comments' => $comments,'id_user'=>$id_user]);
    }
}

?>