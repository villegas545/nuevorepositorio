<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class controladorMostrar extends Controller
{
    public function mostrar(){
        $notas=App\Nota::all();
        return view('vistaMostrar',compact('notas'));
    }
}
