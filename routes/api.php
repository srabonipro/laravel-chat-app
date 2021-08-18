<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Task Routes
Route::get('tasks/pending', [TaskController::class, 'pendingTasks']);
Route::get('tasks/progressing', [TaskController::class, 'progressingTasks']);
Route::get('tasks/completed', [TaskController::class, 'completedTasks']);
// Route::post('tasks/order', [TaskController::class, 'sortTasks']);
