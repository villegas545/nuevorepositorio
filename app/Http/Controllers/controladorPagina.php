<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPagina extends Controller
{
   public function mostrar(){
       return view('vistaPagina');
   }
}
