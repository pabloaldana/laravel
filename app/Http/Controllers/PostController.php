<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Listar todos los posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Mostrar un formulario para crear un nuevo post
    public function create()
    {
        return view('posts.create');
    }

    // Guardar un nuevo post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'texto' => 'required|string',
            'grado' => 'required|integer|min:1|max:7',
            'user_id' => 'required|exists:users,id',
            'area_id' => 'required|exists:areas,id',
        ]);

        $post = Post::create($validated);
        return redirect()->route('posts.show', $post);
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
