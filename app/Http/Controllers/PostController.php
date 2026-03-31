<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET all posts
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'Posts retrieved successfully',
            'data' => Post::latest()->get()
        ]);
    }

    // CREATE post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Post created successfully',
            'data' => $post
        ], 201);
    }

    // GET single post
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => false,
                'message' => 'Post not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Post retrieved successfully',
            'data' => $post
        ]);
    }

    // UPDATE post
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => false,
                'message' => 'Post not found'
            ], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
        ]);

        $post->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Post updated successfully',
            'data' => $post
        ]);
    }

    // DELETE post
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => false,
                'message' => 'Post not found'
            ], 404);
        }

        $post->delete();

        return response()->json([
            'status' => true,
            'message' => 'Post deleted successfully'
        ]);
    }
}