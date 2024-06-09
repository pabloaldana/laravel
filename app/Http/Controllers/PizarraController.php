<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class PizarraController extends Controller
{
    public function mostrarPosteos($area_id)
    {
        $area = Area::findOrFail($area_id);
        $posteos = $area->posteos; // Asume que tienes una relación definida en tu modelo de área

        return view('pizarra', compact('posteos'));
    }
}
