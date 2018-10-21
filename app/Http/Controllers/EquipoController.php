<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
    	$model = Equipo::first();

    	
    }
}
