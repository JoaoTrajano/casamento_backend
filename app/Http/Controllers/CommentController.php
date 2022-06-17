<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Comment;
use App\Exception;


class CommentController extends Controller
{

    public function index() {
        return Comment::all();
    }

    public function getLastsComments()
    {
        $comment = new Comment();
        return $comment->lastComments();
    }

    public function store(Request $request) {
        $arrayValues = $request->all();

        foreach ($arrayValues as $key => $value) {
            $arrayValues[$key] = $this->filter($value);
        }

        $result = Comment::create($arrayValues);
        if($result) {
            return ['status' => 'success', 'message' => 'Agradecemos o carinho!'];
        }

        return ['status' => 'error', 'message' => 'Houve um erro. Tente novamente.'];

    }

    public function filter($value) {
        return filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
