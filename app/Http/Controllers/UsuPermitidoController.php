<?php

namespace App\Http\Controllers;

use App\UsuPermitido;
use Illuminate\Http\Request;

class UsuPermitidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('TienePermiso');
    }


    function guardarUsuPermitido(Request $request)
    {
        return view("/tienePermiso");
    }
}