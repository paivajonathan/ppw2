<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'index'])->name('index');    
Route::patch('/check', [FormController::class, 'check'])->name('check');    
