<?php

namespace App\Http\Controllers\Frontend;

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
        
        $tasks = Task::all();

        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('task.create', []);
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
        //$name = $request->all();
        //$emai = $request->name;
        //$name = $request->only(['name' , 'deadline']);
        // $name = $request->except(['name']);
        //dd($name);

        $task = new Task();
        $task->status = 1;
        $task->name = $request->name;
        $task->deadline = $request->deadline;
        $task->save();

        return redirect()->route('task.index');
    }

    public function complete($id) {
        $task = Task::find($id);
        $task->status = 1;
        $task->save();
        return redirect()->route('task.index');
    }

    public function reComplete($id) {
        $task = Task::find($id);
        $task->status = -1;

        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$tasks = Task::find(1);
        $tasks = Task::where('id' , $id)->first();
        dd($tasks->id);
        //return view('task.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return vieư('task.edit');
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
        return view('task.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect()->route('task.index');
    }
}
