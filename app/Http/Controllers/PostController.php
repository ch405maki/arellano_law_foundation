<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Inertia\Inertia;

class PostController extends Controller
{

    public function index()
    {
        return Inertia::render('Authenticated/Posts/Index');
    }

    public function create()
    {
        return Inertia::render('Authenticated/Posts/Create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'document' => 'nullable|string',
            'link' => 'nullable|string|url',
            'posted_by' => 'required|exists:users,id',
        ]);

        // Create the post
        $post = Post::create($validatedData);

        // Return a JSON response
        return response()->json([
            'message' => 'Post created successfully',
            'post' => $post,
        ], 201); // 201 Created status code
    }

    /**
     * Display the specified post.
     */
    public function show(Post $post)
    {
        return response()->json($post->load('user'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'document' => 'nullable|string',
            'link' => 'nullable|string|url',
            'posted_by' => 'sometimes|exists:users,id',
        ]);

        // Update the post
        $post->update($validatedData);

        // Return a JSON response
        return response()->json([
            'message' => 'Post updated successfully',
            'post' => $post,
        ]);
    }

    /**
     * Remove the specified post from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => 'Post deleted successfully',
        ]);
    }
}
