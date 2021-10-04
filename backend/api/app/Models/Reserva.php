<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table='reservas';

    public function cliente(){
        return $this->belongsTo(cliente::class);
    }

    public function habitacion(){
        return $this->belongsTo(habitacion::class);
    }
}
