<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskToggleComplete extends Controller
{
    public function __invoke(Request $request, Task $task)
    {
        $task->toggleComplete();
        return redirect()->route('tasks.index')->with('success','Task completed was updated');
    }
}
