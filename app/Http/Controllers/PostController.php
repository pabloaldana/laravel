<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Area;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    // Listar todos los posts
    public function index()
    {
        $posts = Post::all();
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
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Mostrar un formulario para editar un post existente
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Actualizar un post existente
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'grado' => 'required|integer|min:1|max:7',
            'user_id' => 'required|exists:users,id',
            'area_id' => 'required|exists:areas,id',
        ]);

        $post->update($validated);
        return redirect()->route('posts.show', $post);
    }

    // Eliminar un post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
