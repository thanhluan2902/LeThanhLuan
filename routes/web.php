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

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/' , [HomeController::class , 'index']);

// Route::get('/homeProfile', function () {
//     $name = "Lê Văn Luân";
//     $birthday = "29/02/2000";
//     $school = "Học Viện Nông Nghiệp VN";
//     $address = "Thanh Hóa";
//     $mtnn = "Trở thành nhân viên tốt , đưa cty trở thành số 1";
//     $vtri = "CEO";
//     $soKN = "2 year";
//     return view('homeProfile' , [
//         'name' => $name,
//         'birthday' => $birthday,
//         'school' => $school,
//         'address' => $address,
//         'mtnn' => $mtnn,
//         'vtri' => $vtri,
//         'soKN' => $soKN,
//         'info' => ["Đẹp trai" , "học giỏi" , "con nhà giàu" , "giỏi bốc phét"]
//     ]);
// })->name('home');

// Route::get('/list', function () {
//     $list = [
//         [
//             'name' => 'Học View trong Laravel',
//             'status' => 0
//         ],
//         [
//             'name' => 'Học Route trong Laravel',
//             'status' => 1
//         ],
//         [
//             'name' => 'Làm bài tập View trong Laravel',
//             'status' => -1
//         ],
//     ];
//     return view('list' , [
//         'list' => $list
//     ]);
// });

// Route::get('/profile', function () {
//     $name = "Lê Văn Luân";
//     $birthday = "29/02/2000";
//     $school = "Học Viện Nông Nghiệp VN";
//     $address = "Thanh Hóa";
//     $mtnn = "Trở thành nhân viên tốt , đưa cty trở thành số 1";
//     $vtri = "CEO";
//     $soKN = "2 year";
//     return view('profile' , [
//         'name' => $name,
//         'birthday' => $birthday,
//         'school' => $school,
//         'address' => $address,
//         'mtnn' => $mtnn,
//         'vtri' => $vtri,
//         'soKN' => $soKN,
//         'info' => ["Đẹp trai" , "học giỏi" , "con nhà giàu" , "giỏi bốc phét"]
//     ]);
// });



//=====================================
// Route::get('/hello1', function () {
//     return view('hello1');
// });

// Route::get('/hello2', function () {
//     return view('hello2');
// });

// Route::get('/tasks/create', function () {
//     return view('tasks.create');
// });

// Route::get('/tasks/list', function () {
//     return view('tasks.list');
// });

// Route::get('/tasks/edit', function () {
//     return view('task.edit');
// });

// Route::prefix('task')->group(function() {
//     Route::get('/create', [\App\Http\Controllers\Task\TaskController::class , 'create'])->name('task.create');
    
//     Route::get('/index', 'Task\TaskController@index')->name('task.index');
    
//     Route::get('/edit', 'Task\TaskController@edit')->name('task.edit');
// });

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
// Route::prefix('todo')->group(function() {
//     Route::prefix('task')->group(function() {
//         Route::get('complete/3' , function() {
//             echo "đã hoàn thành, chúc mừng";
//         })->name('todo.task.complete');

//         Route::get('task/reset/3' , function() {
//             echo "Bắt đầu làm lại nào !";
//         })->name('todo.task.reset');
        
//         //xóa
//         Route::get('task/delete/3' , function() {
//             echo "Xóa thành công";
//         })->name('todo.task.delete');

//         //thêm mới
//         Route::post('add/3' , function() {
//             echo "Thêm mới ko thành công";
//         })->name('todo.task.add');
//     });
// });

//========================== end ===========================================

Route::prefix('task')->group(function() {
    $tasks = [
        [
            'id' => 1,
            'name' => 'hoc laravel',
            'deadline' => '2020-10-01 21:04:17',
            'status' => 0
        ],

        [
            'id' => 2,
            'name' => 'hoc php',
            'deadline' => '2020-10-01 21:04:17',
            'status' => 1
        ],

        [
            'id' => 3,
            'name' => 'hoc java',
            'deadline' => '2020-10-01 21:04:17',
            'status' => -1
        ],

        [
            'id' => 4,
            'name' => 'hoc frontend',
            'deadline' => '2020-10-01 21:04:17',
            'status' => 1
        ]
    ];
    Route::get('/create', [\App\Http\Controllers\Task\TaskController::class , 'create'])->name('task.create');
    
    Route::get('/index', [\App\Http\Controllers\Task\TaskController::Class,'index'])->name('task.index');
    
    Route::get('/edit', [\App\Http\Controllers\Task\TaskController::Class , 'edit'])->name('task.edit');

    Route::get('/show', [\App\Http\Controllers\Task\TaskController::Class , 'show'])->name('task.show');

    Route::post('/store', [\App\Http\Controllers\Task\TaskController::Class , 'store'])->name('task.store');

    Route::get('/update/{id}', [\App\Http\Controllers\Task\TaskController::Class , 'update'])->name('task.update');

    Route::delete('/destroy/{id}', [\App\Http\Controllers\Task\TaskController::Class , 'destroy'])->name('task.destroy');

    Route::get('/complete/{id}' , [\App\Http\Controllers\Task\TaskController::Class , 'complete'])->name('task.complete');

    Route::get('/reComplete/{id}' , [\App\Http\Controllers\Task\TaskController::Class , 'reComplete'])->name('task.reComplete');
});

Route::resource('frontend/task', Frontend\TaskController::class);

