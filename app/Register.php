<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $dataMokados = ['total' => 20];

    protected $fillable = ['ip', 'session', 'date'];

    public function getAllRegister() {
       return $this->dataMokados;
    }

}
