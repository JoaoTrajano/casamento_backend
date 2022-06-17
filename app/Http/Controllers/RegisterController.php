<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function index()
    {
        return count(Register::all());
    }

    public function store(Request $request)
    {
        $arrayRequest = $request->all();

        $arrayDataPersist = array();

        $arrayDataPersist['session'] = "";

        if($arrayRequest['visited']) {
            $arrayDataPersist['session'] = hash('ripemd160', (string)rand(5, 15));
        }

        $arrayDataPersist['ip'] = $arrayRequest['ip'];
        $arrayDataPersist['date'] = now();

        $result = Register::create($arrayDataPersist);

        return $result;
    }
}
