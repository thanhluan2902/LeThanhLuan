<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $tasks = Task::all();

        // return view('task.index', ['tasks' => $tasks]);

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

        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return view('task.create', []);
        dd('Đây là function create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name = $request->get('name' , 'Nhuw buoofi');
        //$emai = $request->name;
        
        // $name = $request->except(['name']);
        $name = $request->only(['name' , 'deadline']);
        dd($name);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$tasks = Task::find(1);
        // $tasks = Task::where('id' , $id)->first();
        // dd($tasks->id);
        
        dd('Đây là function showshow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('Đây là function edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('Đây là function updateupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        // $tasks = Task::find($id);
        // $tasks->delete();
        // return redirect()->route('task.index');

        $task = $request->id;
        dd($task);
    }

    public function complete($id) {
        $task = Task::find($id);
        $task->status = -1;
        $task->save();
        return redirect()->route('task.index');
    }

    public function reComplete($id) {
        $task = Task::find($id);
        $task->status = 1;

        $task->save();
        return redirect()->route('task.index');
    }
}
