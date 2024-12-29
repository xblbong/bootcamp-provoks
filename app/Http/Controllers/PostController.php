<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('crud.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'crud berhasil di buat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) // Pastikan menerima model Post
    {
        return view('crud.show', compact('post')); // Tambahkan view jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('crud.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus.');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
