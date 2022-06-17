<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Comment extends Model
{
    public $commentsMokados = [
        [
            'id' => 1,
            'name' => 'Fulano 1',
            'message' => 'teste teste teste'
        ],
        [
            'id' => 2,
            'name' => 'Fulano 2',
            'message' => 'teste teste teste'
        ],
        [
            'id' => 3,
            'name' => 'Fulano 3',
            'message' => 'teste teste teste'
        ],

    ];

    public $lastCommentsMokados = [
        [
            'id' => 2,
            'name' => 'Fulano 2',
            'message' => 'teste teste teste'
        ],
        [
            'id' => 3,
            'name' => 'Fulano 3',
            'message' => 'teste teste teste'
        ],

    ];

    public function getAllComments() {
        return $this->commentsMokados;
    }

    public function lastComments() {
        // $newArray = array_slice(array_reverse($this->dataMokados), 0, 2);
        return $this->lastCommentsMokados;
    }

    public function storeComment($request) {
        $totalArray = count($this->commentsMokados);
        $indice = $totalArray;
        $this->commentsMokados[$indice] =
            [
                'id' => $totalArray + 1,
                'name' => $request['sender'],
                'message' => $request['message']
            ];
        return json_encode([$request, "status" => "success"], JSON_UNESCAPED_UNICODE);
    }
}
