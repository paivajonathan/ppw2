<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user-store', [UserController::class,'store'])->name('user.store');

Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user-update/{user}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user-delete/{user}', [UserController::class, 'delete'])->name('user.delete');
