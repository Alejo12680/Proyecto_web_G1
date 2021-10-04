<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    // public function search($text){
    //     return $text;
        // $text = $request->query('text');
        // $habitaciones = Habitacion::with('hotel')->get();

        // return $habitaciones;

    // }
    public function search(Request $request){
        $text = $request->query('text');
        $habitaciones = Habitacion::with('hotel')->get();
        return $habitaciones;

        // return $request->query('text');}
    }
}
