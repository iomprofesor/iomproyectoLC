<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        // Obtenemos el primer perfil (junto con sus experiencias)
        $perfil = Perfil::with('experiencias')->first();

        // Enviamos los datos a la vista 'cv.index'
        return view('cv.index', compact('perfil'));
    }
}
