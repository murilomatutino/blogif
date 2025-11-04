<?php

namespace App\Controllers;

use App\Models\classes\Post;
use App\Helpers\classes\Redirect;
use App\Models\classes\Comment;
use App\Helpers\classes\Auth;

class ShowPostController extends Controller
{
    public function index($request)
    {
        $post = Post::specific($request->id);

        if ($post == null){
            Redirect::to('/');
        }

        $comments = Comment::all();
        $id_user = Auth::get_session('id');

        $this->view("Post", ['post' => $post, 'comments' => $comments,'id_user'=>$id_user]);
    }
}

?>