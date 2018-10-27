<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tablero;

class TableroController extends Controller
{
    public function view($id)
    {
        $tablero = Tablero::findOrFail($id);

        return view('tablero.view', ['tablero'=>$tablero]);
    }
}
