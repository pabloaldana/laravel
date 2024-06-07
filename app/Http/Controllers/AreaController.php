<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    // Listar todas las áreas
    public function index()
    {
        $areas = Area::where('user_id', Auth::id())->get();

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
            'image' => 'required|image|max:10240', // Cambiar la validación para aceptar archivos de imagen

        ]);

        // Crear el área sin la imagen, ya que esta se manejará por separado
        $area = Area::create([
            'nombre' => $validated['nombre'],
        ]);
        // Asociar el área con el usuario autenticado
        $area->user_id = Auth::id(); // Asignar el ID del usuario autenticado
        $area->save();
        if ($request->hasFile('image')) {
            // Subir la imagen
            $imagenUpload = $request->file('image')->store('public/images/areas'); // Guarda la imagen en la carpeta 'areas'
            $area->image = $imagenUpload; // Guarda la ruta de la imagen en la base de datos
            $area->save();
        }

        return redirect()->route('areas.index')->with('success', 'Área creada exitosamente.');
    }


    // Mostrar una área específica
    public function show(Area $area)
    {
        return view('areas.show', compact('area'));
    }

    // Mostrar un formulario para editar una área existente
    public function edit(Area $area)
    {
        if ($area->user_id !== auth()->id()) {
            return redirect()->route('area.index')->withErrors('No tienes permiso para editar este post.');
        }
        $area = Area::findOrFail($area->id);
        return view('areas.edit', compact('area'));
    }

    // Actualizar una área existente
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'image' => 'sometimes|image|max:10240',
        ]);

        $area = Area::findOrFail($id);
        $area->nombre = $validated['nombre'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images/areas');
            $area->image = $imagePath;
        }

        $area->save();

        return redirect()->route('areas.index')->with('success', 'Área actualizada exitosamente.');
    }

    // Eliminar una área
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index');
    }
}
