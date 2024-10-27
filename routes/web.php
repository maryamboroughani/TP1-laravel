<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EtudiantController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index'); // View all students
 Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiants.show'); // View single student details
 Route::get('/create/etudiant', [EtudiantController::class, 'create'])->name('etudiants.create'); // Display form to create a new student
Route::post('/create/etudiant', [EtudiantController::class, 'store'])->name('etudiants.store'); // Store new student
Route::get('/edit/etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiants.edit'); // Display form to edit a student
Route::put('/edit/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiants.update'); // Update student
 Route::delete('/etudiants/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy'); // Delete student

