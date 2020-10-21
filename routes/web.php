<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('task')->group(function() {
    Route::get('/create', [\App\Http\Controllers\Task\TaskController::class , 'create'])->name('task.create');
    
    Route::get('/index', [\App\Http\Controllers\Task\TaskController::Class,'index'])->name('task.index');
    
    Route::get('{id}/edit', [\App\Http\Controllers\Task\TaskController::Class , 'edit'])->name('task.edit');

    Route::get('/show', [\App\Http\Controllers\Task\TaskController::Class , 'show'])->name('task.show');

    Route::post('/store', [\App\Http\Controllers\Task\TaskController::Class , 'store'])->name('task.store');

    Route::put('/update/{id}', [\App\Http\Controllers\Task\TaskController::Class , 'update'])->name('task.update');

    Route::delete('/destroy/{id}', [\App\Http\Controllers\Task\TaskController::Class , 'destroy'])->name('task.destroy');

    Route::get('/complete/{id}' , [\App\Http\Controllers\Task\TaskController::Class , 'complete'])->name('task.complete');

    Route::get('/reComplete/{id}' , [\App\Http\Controllers\Task\TaskController::Class , 'reComplete'])->name('task.reComplete');
});

// Route::resource('frontend/task', Frontend\TaskController::class);

