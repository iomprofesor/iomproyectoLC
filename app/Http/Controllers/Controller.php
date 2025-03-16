<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        // Obtenemos el primer perfil (o el que necesites) junto a sus experiencias
        // Si hubiera múltiples perfiles, podrías usar un where() o get() en su lugar
        $perfil = Perfil::with('experiencias')->first();

        // Pasamos el perfil a la vista
        return view('cv.index', compact('perfil'));
    }
}