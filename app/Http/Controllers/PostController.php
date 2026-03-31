<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET /api/posts
    public function index()
    {
        return Post::all();
    }

    // POST /api/posts
    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    // GET /api/posts/{id}
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    // PUT /api/posts/{id}
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return $post;
    }

    // DELETE /api/posts/{id}
    public function destroy($id)
    {
        Post::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}