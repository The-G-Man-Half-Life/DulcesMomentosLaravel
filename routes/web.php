<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\RolesController;

Route::get('/', function () {
    return view('welcome');
});

//statuses routes

Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');

Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');

Route::post('/roles', [RolesController::class, 'store'])->name('roles.store');

Route::get('/roles/{id}', [RolesController::class, 'show'])->name('roles.show');

Route::get('/roles/{id}/edit', [RolesController::class, 'edit'])->name('roles.edit');

Route::put('/roles/{id}', [RolesController::class, 'update'])->name('roles.update');

Route::delete('/roles/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');



//statuses statuses

Route::get('/statuses', [StatusController::class, 'index'])->name('statuses.index');

Route::get('/statuses/create', [StatusController::class, 'create'])->name('statuses.create');

Route::post('/statuses', [StatusController::class, 'store'])->name('statuses.store');

Route::get('/statuses/{id}', [StatusController::class, 'show'])->name('statuses.show');

Route::get('/statuses/{id}/edit', [StatusController::class, 'edit'])->name('statuses.edit');

Route::put('/statuses/{id}', [StatusController::class, 'update'])->name('statuses.update');

Route::delete('/statuses/{id}', [StatusController::class, 'destroy'])->name('statuses.destroy');
