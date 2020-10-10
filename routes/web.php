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

Route::get('/homeProfile', function () {
    $name = "Lê Văn Luân";
    $birthday = "29/02/2000";
    $school = "Học Viện Nông Nghiệp VN";
    $address = "Thanh Hóa";
    $mtnn = "Trở thành nhân viên tốt , đưa cty trở thành số 1";
    $vtri = "CEO";
    $soKN = "2 year";
    return view('homeProfile' , [
        'name' => $name,
        'birthday' => $birthday,
        'school' => $school,
        'address' => $address,
        'mtnn' => $mtnn,
        'vtri' => $vtri,
        'soKN' => $soKN,
        'info' => ["Đẹp trai" , "học giỏi" , "con nhà giàu" , "giỏi bốc phét"]
    ]);
})->name('home');

Route::get('/list', function () {
    $list = [
        [
            'name' => 'Học View trong Laravel',
            'status' => 0
        ],
        [
            'name' => 'Học Route trong Laravel',
            'status' => 1
        ],
        [
            'name' => 'Làm bài tập View trong Laravel',
            'status' => -1
        ],
    ];
    return view('list' , [
        'list' => $list
    ]);
});

Route::get('/profile', function () {
    $name = "Lê Văn Luân";
    $birthday = "29/02/2000";
    $school = "Học Viện Nông Nghiệp VN";
    $address = "Thanh Hóa";
    $mtnn = "Trở thành nhân viên tốt , đưa cty trở thành số 1";
    $vtri = "CEO";
    $soKN = "2 year";
    return view('profile' , [
        'name' => $name,
        'birthday' => $birthday,
        'school' => $school,
        'address' => $address,
        'mtnn' => $mtnn,
        'vtri' => $vtri,
        'soKN' => $soKN,
        'info' => ["Đẹp trai" , "học giỏi" , "con nhà giàu" , "giỏi bốc phét"]
    ]);
});



//=====================================
Route::get('/hello1', function () {
    return view('hello1');
});

Route::get('/hello2', function () {
    return view('hello2');
});

Route::get('/tasks/create', function () {
    return view('tasks.create');
});

Route::get('/tasks/list', function () {
    return view('tasks.list');
});

Route::get('/tasks/edit', function () {
    return view('tasks.edit');
});

Route::prefix('tasks')->group(function() {
    Route::get('/create', function () {
        $job = "đi trộm chóa";
        return view('tasks.create' , ['job' => $job]);
    })->name('tasks.create');
    
    Route::get('/list', function () {
        return view('tasks.list' , [
            'records' => [1,2,3,4,5,6,7], 
            'i' => 1
        ]);
    })->name('tasks.list');
    
    Route::get('/edit', function () {
        $name = "đi tán gái";

        // return view('tasks.edit' , ['name' => $name]);

        // return view('tasks.edit')->with('name' , $name);

        return view('tasks.edit')->with(['name' => $name]);


    })->name('tasks.edit');
});

//========================== Chưa nhóm ===============================

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


//========================== Group =====================================
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

//========================== end ===========================================