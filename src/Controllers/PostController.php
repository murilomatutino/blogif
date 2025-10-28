<?php

namespace App\Controllers;

use App\Models\classes\Post;
use App\Helpers\classes\Redirect;

class PostController extends Controller
{
    public function index()
    {
        $this->view("CreatePost");
    }

    public function store($request)
    {
        session_start();

        Post::create_post(
            $request->title,
            $_SESSION['auth']['id'],
            $request->content
        );

        Redirect::to('/');
    }
}