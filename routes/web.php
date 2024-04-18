<?php

use Illuminate\Support\Facades\Route;

Route::resource('tasks',\App\Http\Controllers\TaskController::class);

Route::put('tasks/{task}/toggle-complete', \App\Http\Controllers\TaskToggleComplete::class)
    ->name('tasks.toggle-complete');
