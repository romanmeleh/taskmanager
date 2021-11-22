<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{

    public function index(Request $request, Task $task)
    {
        $tasks = $this->filter($request, $task);
        return TaskResource::collection($tasks);
    }

    public function show($id)
    {
        $task = Task::where('id', $id)->first();
        return TaskResource::make($task);
    }

    public function changeStatus(Request $request, $id){
        $task = Task::find($id);
        $task->status_id = $request->status_id;
        $response = $task->update();

        return TaskResource::make(['change_status' => $response]);
    }

    public function filter($request, $task)
    {

        if ($request->has('name')) {
            return $task->where('name', $request->name)->get();
        }
        if ($request->has('term')) {
            return $task->where('term', $request->term)
                ->get();
        }
        if ($request->has('status_id')) {
            return $task->where('status_id', $request->status_id)
                ->get();
        }
        if ($request->has('created_at')) {
            return $task->where('created_at', $request->created_at)
                ->get();
        }
        if ($request->has('updated_at')) {
            return $task->where('updated_at', $request->updated_at)
                ->get();
        }

        return Task::get();
    }


}
