<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $statuses = Status::get();
        $tasks = Task::get();
        return view('api.index')->with(['statuses' => $statuses, 'tasks' => $tasks]);
    }

}
