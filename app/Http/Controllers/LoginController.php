<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function autenticar(Request $request)
    {
        
        $credenciales = $request->only('email', 'password');

        dd(Auth::attempt($credenciales));
    }

}
