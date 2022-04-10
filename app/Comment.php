<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $dataMokados = [
        ['id' => 1, 'name'=>'Fulano 1', 'message' => 'teste teste'],
        ['id' => 2, 'name'=>'Fulano 2', 'message' => 'teste teste'],
        ['id' => 3, 'name'=>'Fulano 3', 'message' => 'teste teste'],
        ['id' => 4, 'name'=>'Fulano 4', 'message' => 'teste teste'],
        ['id' => 5, 'name'=>'Fulano 5', 'message' => 'Vocês merecem tudo que é maravilhoso, parabéns ao casal!'],
        ['id' => 5, 'name'=>'Fulano 5', 'message' => 'Vocês merecem tudo que é maravilhoso, parabéns ao casal!'],
        ['id' => 5, 'name'=>'Fulano 5', 'message' => 'Vocês merecem tudo que é maravilhoso, parabéns ao casal!'],
        ['id' => 5, 'name'=>'Fulano 5', 'message' => 'Vocês merecem tudo que é maravilhoso, parabéns ao casal!'],
        ['id' => 5, 'name'=>'Fulano 5', 'message' => 'Vocês merecem tudo que é maravilhoso, parabéns ao casal!'],
        ['id' => 6, 'name'=>'Fulano 6', 'message' => 'Adorei cada momento da festa e da carimonia, vocês merecem!'],
    ];

    public function getAllComments() {
        return json_encode($this->dataMokados);
    }

    public function lastComments() {
        $newArray = array_slice(array_reverse($this->dataMokados), 0, 2);
        return json_encode($newArray);
    }

    public function storeComment($request) {
        return json_encode($request);
    }
}
