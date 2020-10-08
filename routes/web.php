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

Route::get('/home', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});



// //Hoàn thành
// Route::get('task/complete/3/4' , function() {
//     echo "đã hoàn thành, chúc mừng";
// })->name('todo.task.complete');

// //Làm lại
// Route::get('task/reset/3' , function() {
//     echo "Bắt đầu làm lại nào !";
// })->name('todo.task.reset');

// //xóa
// Route::get('task/delete/3' , function() {
//     echo "Xóa thành công";
// })->name('todo.task.delete');

// //thêm mới
// Route::post('add/3' , function() {
//     echo "Thêm mới ko thành công";
// })->name('todo.task.add');


//group
Route::prefix('todo')->group(function() {
    Route::prefix('task')->group(function() {
        Route::get('complete/3' , function() {
            echo "đã hoàn thành, chúc mừng";
        })->name('todo.task.complete');

        Route::get('task/reset/3' , function() {
            echo "Bắt đầu làm lại nào !";
        })->name('todo.task.reset');
        
        //xóa
        Route::get('task/delete/3' , function() {
            echo "Xóa thành công";
        })->name('todo.task.delete');

        //thêm mới
        Route::post('add/3' , function() {
            echo "Thêm mới ko thành công";
        })->name('todo.task.add');
    });
});

