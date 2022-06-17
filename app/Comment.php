<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['name', 'message'];

    // public function getAllComments() {
    //     return $this->commentsMokados;
    // }

    // public function lastComments() {
    //     // $newArray = array_slice(array_reverse($this->dataMokados), 0, 2);
    //     return $this->lastCommentsMokados;
    // }
}
