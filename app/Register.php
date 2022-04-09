<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $dataMokados = ['total' => 20];

    public function getAllRegister() {
        return $this->dataMokados;
    }

    public function storeRegister($request) {
        var_dump($request);
    }
}
