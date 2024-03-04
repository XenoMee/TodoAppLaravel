<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TodoController;
use app\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Todo Controller Routes

Route::post('/todos', TodoController::class, 'createTodo');
Route::get('/todos/{$id}', TodoController::class, 'displayTodo');
Route::patch('/todos/{$id}', TodoController::class, 'updateTodo');
Route::delete('/todos/{$id}', TodoController::class, 'deleteTodo');

// // Task Controller Routes
// Route::post('/tasks', TaskController::class, 'createTask');
// Route::get('/tasks/{$id}', TaskController::class, 'displayTask');
// Route::patch('/tasks/{$id}', TaskController::class, 'updateTask');
// Route::delete('/tasks/{$id}', TaskController::class, 'deleteTask');


Route::get('/', function () {
    return view('welcome');
});
