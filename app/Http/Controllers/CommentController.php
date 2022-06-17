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
        $arrayValues = $request->all();


        // foreach ($arrayValues as $key => $value) {
        //     $arrayValues[$key] = $this->filter($value);
        // }

        return $comment->storeComment($arrayValues);
    }

    public function filter($value): string {
        return filter_var($value, FILTER_SANITIZE_STRING);
    }
}
