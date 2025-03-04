<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Post;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return Inertia::render('Welcome/Index', [ 'posts' => $posts ]);
    }
}
