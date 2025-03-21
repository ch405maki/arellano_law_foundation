<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class AdministrationController extends Controller
{
    public function alf(): Response
    {
        return Inertia::render('Public/Administration/Alf/Index');
    }

    public function boardTrustees(): Response
    {
        return Inertia::render('Public/Administration/Board/Index');
    }

    public function adminStaff(): Response
    {
        return Inertia::render('Public/Administration/AdminStaff/Index');
    }

    public function department(string $departmentName): Response
    {
        return Inertia::render('Public/Administration/Departments/Index', [
            'departmentName' => $departmentName,
        ]);
    }

    public function itc(): Response
    {
        return Inertia::render('Public/Administration/Departments/Itc/Index');
    }

    public function lawphil(): Response
    {
        return Inertia::render('Public/Administration/Departments/Lawphil/Index');
    }

    public function clear(): Response
    {
        return Inertia::render('Public/Administration/Departments/Clear/Index');
    }

    public function ola(): Response
    {
        return Inertia::render('Public/Administration/Departments/Ola/Index');
    }   
}
