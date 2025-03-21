<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

use App\Models\Post;
use App\Models\User;

class MainController extends Controller
{
    public function index(): response
    {
        $announcements = Post::with('user')->latest()->paginate(4);
    
        return Inertia::render('Public/Welcome/Index', [
            'announcements' => $announcements
        ]);
    }

    public function show($id)
    {
        $announcement = Post::with('user')->findOrFail($id);
        
        return Inertia::render('Public/Post/Announcement/Show', [
            'announcement' => $announcement
        ]);
    }
}
