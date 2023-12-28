<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('readall', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task_name = $request->task_name;
        $task_description = $request-> task_description;

        Task::create([
            'task_name' => $task_name,
            'task_description' => $task_description
        ]);
        return view('create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('edittask', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->task_name = $request->input('task_name');
        $task->task_description = $request->input('task_description');
        $task->update();
        $tasks = Task::all();
        // $task_name = $request->task_name;
        // $task_description = $request->task_description;
        // $task::update([
        //     'task_name' => $task_name,
        //     'task_description' => $task_description
        // ]);
        return view('readall', compact('tasks'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        $tasks = Task::all();
        return view('readall', compact('tasks'));
    }
}
