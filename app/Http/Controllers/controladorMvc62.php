<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class controladorMvc62 extends Controller
{
  public function mostrar(){
      $datos=App\Alumno::all();
      return view('vistaTic62',compact('datos'));
  }
}
