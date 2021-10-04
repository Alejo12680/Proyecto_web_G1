<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    // public function search($text){
    //     return $text;
        // $text = $request->query('text');
        // $habitaciones = Habitacion::with('hotel')->get();

        // return $habitaciones;

    // }
    public function search(Request $request){

        return $request->query('text');}
    
}
