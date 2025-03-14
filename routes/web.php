<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\JobApplicationController;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/job-applications', [JobApplicationController::class, 'index'])->name('jobApplications.index');
Route::get('/job-applications/{id}', [JobApplicationController::class, 'show'])->name('jobApplication.show');
Route::get('/job-applications/create', [JobApplicationController::class, 'create'])->name('jobApplication.create');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
