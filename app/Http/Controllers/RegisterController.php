<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function index() {
        $register = new Register();
        return json_encode($register->getAllRegister());
    }

    public function store(Request $request) {
        $register = new Register();
        $register->storeRegister($request->all());
    }
}
