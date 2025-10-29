<?php

namespace App\Controllers;

use App\Models\classes\Post;
use App\Helpers\classes\Redirect;
use App\Helpers\classes\Auth;

class PostController extends Controller
{
    public function index()
    {
        $this->view("CreatePost");
    }

    public function store($request)
    {   
        $id_user = Auth::get_session('id');

        Post::create(
            $request->title,
            $id_user,
            $request->content
        );

        Redirect::to('/');
    }
}