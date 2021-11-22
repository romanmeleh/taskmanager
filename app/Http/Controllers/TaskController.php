<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Status;
use App\Models\Task;


class TaskController extends Controller
{

    public function index()
    {

        $tasks = Task::orderBy('created_at','desc')->paginate(10);

        return  view('task.index')->with(['tasks'=>$tasks]);

    }

    public function create()
    {
        $statuses = Status::get();
        return view('task.create')->with(['statuses' => $statuses]);
    }

    public function save(TaskRequest $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->created_at = now();
        $task->term = $request->term;
        $task->status_id = $request->status_id;
        $task->save();


        return redirect()->route('tasks');

    }

    public function delete($id)
    {

        $task = Task::find($id);

        $task->delete();

        return redirect()->route('tasks');
    }

    public function edit($id)
    {

        $task = Task::find($id);
        $statuses = Status::get();

        return view('task.edit')->with(['task' => $task, 'statuses' => $statuses]);

    }

    public function update($id, TaskRequest $request)
    {

        $task = Task::find($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->updated_at = now();
        $task->term = $request->term;
        $task->status_id = $request->status_id;
        $task->update();
        return redirect()->route('tasks');

    }
}
