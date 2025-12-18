<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::fallback(function () { return view('errors.404'); });

Route::prefix('animaux')->name('animals.')->group(function () {

    Route::get('/creer', [AnimalController::class, 'create'])->name('create');

    Route::get('/creerCoquilette', [AnimalController::class, 'createCoquillette'])->name('createCoquillette');
    
    Route::get('/modifier/{id}', [AnimalController::class, 'update'])->name('update');
    
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('delete');
    
    Route::get('/{id}', [AnimalController::class, 'show'])->name('show');

});
