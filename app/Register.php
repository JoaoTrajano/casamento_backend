<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $dataMokados = ['total' => 20];

    public function getAllRegister() {
        return  ['total' => Register::all()] ;
    }

    public function storeRegister($request): string {
        return json_encode($request);
    }
}
