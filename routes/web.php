<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome/Index');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Administration
Route::prefix('administration')->name('administration.')->group(function () {
    Route::get('/alf', function () {
        return Inertia::render('Administration/Alf/Index');
    })->name('alf');

    Route::get('/board_trustees', function(){
        return Inertia::render('Administration/Board/Index');
    })->name('board_trustees');

    Route::get('/admin_staff', function(){
        return Inertia::render('Administration/AdminStaff/Index');
    })->name('admin_staff');

    Route::get('/clear', function(){
        return Inertia::render('Administration/Departments/Index', [
            'departmentName' => 'CLEAR',
        ]);
    })->name('clear');
    
    Route::get('/ola', function(){
        return Inertia::render('Administration/Departments/Index', [
            'departmentName' => 'OLA',
        ]);
    })->name('ola');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
