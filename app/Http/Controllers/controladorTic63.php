<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorTic63 extends Controller
{
    public function mostrar($oficio){
        $datos=[
            'valor1'=>'Julio',
            'valor2'=>'Cesar',
            'valor3'=>'Villegas'
        ];
        return view("vistaTic63",compact('datos','oficio'));
    }
}
