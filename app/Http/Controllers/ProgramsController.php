<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ProgramsController extends Controller
{
    public function bar(): Response
    {
        return Inertia::render('Public/Programs/Bar/Index');
    }

    public function mcle(): Response
    {
        return Inertia::render('Public/Programs/Mcle/Index');
    }

    public function phoenix(): Response
    {
        return Inertia::render('Public/Programs/Phoenix/Index');
    }

    public function guidance(): Response
    {
        return Inertia::render('Public/Programs/Guidance/Index');
    }

    public function medical(): Response
    {
        return Inertia::render('Public/Programs/Medical/Index');
    }
}
