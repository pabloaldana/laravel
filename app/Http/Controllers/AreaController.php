<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    // Listar todas las áreas
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    // Mostrar un formulario para crear una nueva área
    public function create()
    {
        return view('areas.create');
    }

    // Guardar una nueva área
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Area::create($validated);

        // Redirigir al dashboard después de guardar
        return redirect()->route('dashboard')->with('success', 'Área creada exitosamente.');
    }

    // Mostrar una área específica
    public function show(Area $area)
    {
        return view('areas.show', compact('area'));
    }

    // Mostrar un formulario para editar una área existente
    public function edit(Area $area)
    {
        return view('areas.edit', compact('area'));
    }

    // Actualizar una área existente
    public function update(Request $request, Area $area)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $area->update($validated);
        return redirect()->route('areas.show', $area);
    }

    // Eliminar una área
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index');
    }
}
