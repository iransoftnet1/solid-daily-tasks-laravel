<?php
use TaskApp\TasksController;
use Illuminate\Support\Facades\Route;

Route::view('tasks', 'Task::tasks.index')
    ->name('tasks.index');

Route::view('tasks/create', 'Task::tasks.create')
    ->name('tasks.create');

Route::post('tasks', [TasksController::class, 'store'])
    ->name('tasks.store');

Route::get('tasks/{task}/edit', [TasksController::class, 'edit'])
    ->name('tasks.edit');

Route::put('tasks/{task}', [TasksController::class, 'update'])
    ->name('tasks.update');

Route::delete('tasks/{task}', [TasksController::class, 'destroy'])
    ->name('tasks.destroy');
