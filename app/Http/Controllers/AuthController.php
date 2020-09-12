<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function registrasi (){
        return view('form');
    }

    public function welcome (Request $request){
        $data = $request['first'];
        return view("welcome", compact('data'));

    }
}
