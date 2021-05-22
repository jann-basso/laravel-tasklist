<?php

use App\Models\Task;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\CreateTaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

// create task
Route::get('create-task', function () {
    return view('createtask');
});
Route::get('create-task', [CreateTaskController::class, 'getUsersAndCategories']);
Route::post('create-task/form', [CreateTaskController::class, 'getData']);
//

Route::get('tasks', function () {
    return view('tasks', [
        'tasks' => Task::latest()->get()
    ]);
});

Route::get('tasks/{task}', function (Task $task) {
    return view('taskdetail', [
        'taskdetail' => $task
    ]);
});

Route::get('tasks/responsible/{user:username}', function (User $user) {
    return view('tasks', [
        'tasks' => $user->tasks
    ]);
    
});

Route::get('/tasks/category/{category:name}', function (Category $category) {
    return view('tasks', [
        'tasks' => $category->tasks
    ]);
});


