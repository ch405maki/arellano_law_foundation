<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        return Inertia::render('Authenticated/Posts/Index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Pass the user ID to the Vue component
        return Inertia::render('Authenticated/Posts/Create', [
            'userId' => $userId,
        ]);
    }

    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'content' => 'required|string',
        'document' => 'nullable|string',
        'link' => 'nullable|string|url',
        'posted_by' => 'required|exists:users,id',
        'images' => 'nullable|array',
        'images.*' => 'file|max:10240',
    ]);

    // Handle image uploads
    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            // Log the file details for debugging
            \Log::info('Uploaded file:', [
                'name' => $image->getClientOriginalName(),
                'extension' => $image->getClientOriginalExtension(),
                'mimeType' => $image->getClientMimeType(),
            ]);
    
            $path = $image->store('public/images');
            $imagePaths[] = Storage::url($path);
        }
    }

    // Add image paths to the validated data
    $validatedData['image'] = $imagePaths;

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
            'category' => 'sometimes|string',
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
            'message' => 'Post deleted successfully'
        ]);
    }

}
