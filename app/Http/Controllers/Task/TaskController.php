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
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $deadline =  $request->get('deadline');
        $deadline = str_replace('T' , ' ' , $deadline) . ':00';
        $content = $request->get('content');
        $priority = $request->get('priority');

        $task = new Task();

        $task->status = 1;
        $task->name = $name;
        $task->priority = $priority;
        $task->deadline = $deadline;
        $task->content = $content;

        $task->save();

        return redirect()->route('task.index');

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
        $task = Task::find($id);

        return view('task.edit' , ['task' => $task]);

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
        $name = $request->get('name');
        $deadline =  $request->get('deadline');
        $content = $request->get('content');
        $priority = $request->get('priority');

        $task = Task::find($id);
        $task->priority = $priority;
        $task->name = $name;
        $task->deadline = $deadline;
        $task->content = $content;

        $task->save();

        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect()->route('task.index');

        // $task = $request->id;
        // dd($task);
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
