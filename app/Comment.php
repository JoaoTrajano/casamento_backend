<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getAllComments() {
        return Comment::all();
    }

    public function lastComments() {
        // $newArray = array_slice(array_reverse($this->dataMokados), 0, 2);
        return 'last comments';
    }

    public function storeComment($request) {
        return json_encode($request);
    }
}
