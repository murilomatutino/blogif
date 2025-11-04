<?php

namespace App\Controllers;

use App\Models\classes\Comment;
use App\Helpers\classes\Redirect;

class CommentController extends Controller
{
    public function store($request)
    {
        Comment::create(
            $request->id_post,
            $request->author_comment,
            $request->content_comment
        );

        Redirect::back();
    }
}

?>