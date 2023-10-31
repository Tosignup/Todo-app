<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// @@ -17,3 +18,14 @@
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get todos list
Route::get('/todos', [TodoController::class, 'index']);
// retrieve a single todo
Route::get('/todos/{id}', [TodoController::class, 'show']);
// create a todo
Route::post('/todos', [TodoController::class, 'store']);
// update a todo
Route::put('/todos/{id}', [TodoController::class, 'update']);
// delete a todo
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);
