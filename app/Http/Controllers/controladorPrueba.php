<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPrueba extends Controller
{
    public function mostrar(){
        return view('vistaMostrar2');
    }
}
