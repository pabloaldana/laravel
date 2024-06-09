<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    // Listar todos los posts
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('posts.index', compact('posts'));
    }
    // Mostrar un formulario para crear un nuevo post
    public function create()
    {
        $areas = Area::all(); // obtener todas las áreas de la base de datos
        return view('posts.create', compact('areas')); // pasar las áreas a la vista
    }

    // Guardar un nuevo post
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->withErrors('Debe iniciar sesión para crear un post.');
        }

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'grado' => 'required|integer|min:1|max:7',
            'area_id' => 'required|exists:areas,id',
        ]);

        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);
        return redirect()->route('posts.index')->with('success', 'Post creado con éxito');
    }

    // Mostrar un post específico
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }



    // Mostrar un formulario para editar un post existente
    public function edit(Post $post)
    {
        // Verifica que el post pertenezca al usuario autenticado
        if ($post->user_id !== auth()->id()) {
            return redirect()->route('posts.index')->withErrors('No tienes permiso para editar este post.');
        }

        // Obtener todas las áreas de la base de datos
        $areas = Area::all();

        return view('posts.edit', compact('post', 'areas'));
    }



    // Actualizar un post existente
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'grado' => 'required|integer|min:1|max:7',
            'area_id' => 'required|exists:areas,id',
            'publicado' => 'sometimes|boolean', // Validación para el campo publicado
        ]);

        // Actualiza el post con los datos validados
        $post->update([
            'titulo' => $validated['titulo'],
            'texto' => $validated['texto'],
            'grado' => $validated['grado'],
            'area_id' => $validated['area_id'],
            'publicado' => $request->has('publicado') ? true : false, // Si 'publicado' está presente, establece en true; de lo contrario, false
        ]);

        return redirect()->route('posts.index')->with('success', 'Post actualizado con éxito');
    }


    // Eliminar un post
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        if ($post->delete()) {
            return response()->json(['success' => 'Post deleted successfully.']);
        } else {
            return response()->json(['error' => 'Error deleting post.'], 500);
        }
    }
}
