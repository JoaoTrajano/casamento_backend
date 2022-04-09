<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    public function index() {
        $comment = new Comment();
        return $comment->getAllComments();
    }

    public function getLastsComments()
    {
        $comment = new Comment();
        return $comment->lastComments();
    }

    public function store(Request $request) {
        $comment = new Comment();
        return $comment->storeComment($request->all());
    }
}
