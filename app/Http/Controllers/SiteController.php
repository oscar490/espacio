<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class SiteController extends Controller
{
    
    public function login()
    {
        
        
        return view('login');
    }
}
