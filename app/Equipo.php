<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tablero;

class Equipo extends Model
{
    protected $table = 'equipos';

    public function tableros()
    {
        return $this->hasMany('App\Tablero');
    }
}
