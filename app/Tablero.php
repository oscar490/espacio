<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    protected $table = 'tableros';

    public function equipo()
    {
      return $this->belongsTo('App\Equipo');
    }
}
