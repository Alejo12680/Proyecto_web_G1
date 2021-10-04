<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\Reserva;

class Habitacion extends Model
{
    protected $table='habitaciones';
    
    public function reservas(){
        return $this->hasMany(reserva::class);
    }

    public function hotel(){
        return $this->belongsTo(hotel::class);
    }
}
