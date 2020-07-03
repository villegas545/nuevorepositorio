<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class controladorItc91bd extends Controller
{
    public function mostrar(){
        $datos=App\Chaviza::all();
        return view("vistaItc91bd",compact('datos'));
    }
}
