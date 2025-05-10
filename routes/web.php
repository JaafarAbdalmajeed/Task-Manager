<?php

use Illuminate\Support\Facades\Route;

$tasks = collect([
    (object) [
        'id' => 1,
        'title' => 'Task 1',
        'description' => 'This is the first task',
        'long_description' => 'This task has a long description.',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    (object) [
        'id' => 2,
        'title' => 'Task 2',
        'description' => 'This is the second task',
        'long_description' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ]
]);

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () use ($tasks) {
    return view('tasks.index', ['tasks' => $tasks]);
})->name('tasks.index');

Route::get('tasks/{id}', function ($id) use ($tasks) {
    $task = $tasks->firstWhere('id', $id);
    if (!$task) {
        abort(404);
    }
    return view('tasks.show', ['task' => $task]);
})->name('tasks.show');
