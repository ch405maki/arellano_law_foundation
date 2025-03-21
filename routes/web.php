<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ProgramsController;

// Public Routes

Route::get('/', [MainController::class, 'index'])->name('welcome');

// Administration
Route::prefix('administration')->name('administration.')->group(function () {
    Route::get('/alf', [AdministrationController::class, 'alf'])->name('alf');
    Route::get('/board_trustees', [AdministrationController::class, 'boardTrustees'])->name('board_trustees');
    Route::get('/admin_staff', [AdministrationController::class, 'adminStaff'])->name('admin_staff');

    Route::get('/accounting', [AdministrationController::class, 'department'])->name('accounting')->defaults('departmentName', 'Accounting');
    Route::get('/auditing', [AdministrationController::class, 'department'])->name('auditing')->defaults('departmentName', 'Auditing');
    Route::get('/hr', [AdministrationController::class, 'department'])->name('hr')->defaults('departmentName', 'Human Resources');
    Route::get('/purchasing', [AdministrationController::class, 'department'])->name('purchasing')->defaults('departmentName', 'Purchasing');

    Route::get('/itc', [AdministrationController::class, 'itc'])->name('itc');
    Route::get('/lawphil', [AdministrationController::class, 'lawphil'])->name('lawphil');
    Route::get('/clear', [AdministrationController::class, 'clear'])->name('clear');
    Route::get('/ola', [AdministrationController::class, 'ola'])->name('ola');
});

// Programs
Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/bar', [ProgramsController::class, 'bar'])->name('bar');
    Route::get('/mcle', [ProgramsController::class, 'mcle'])->name('mcle');
    Route::get('/phoenix', [ProgramsController::class, 'phoenix'])->name('phoenix');
    Route::get('/guidance', [ProgramsController::class, 'guidance'])->name('guidance');
    Route::get('/medical', [ProgramsController::class, 'medical'])->name('medical');
});

// Contact
Route::get('contact', function () {
    return Inertia::render('Public/Contact/Index');
})->name('contact');

Route::get('privacy_policy', function () {
    return Inertia::render('Public/Privacy/Index');
})->name('privacy_policy');

// Posts
Route::get('/post/{id}', [MainController::class, 'show'])->name('post.show');


##########################################################################################################################

// Authenticated Routes
Route::get('/dashboard', function () {
    return Inertia::render('Authenticated/Dashboard/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/manage_user', [UserController::class, 'index'])->name('manage_user.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
