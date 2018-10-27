<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();

        return view('equipo.index', [
            'equipos' => $equipos,
        ]);
    }
}
