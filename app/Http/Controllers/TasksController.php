<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    public function viewTasks()
    {
        return view('tasks.viewTasks');
    }

    public function validateTaskDetails(array $taskDetails)
    {
        return Validator::make($taskDetails, [
            'name' => 'required|max:150',
            'priority' => 'required|numeric|gt:0',
            'project_id' => 'required|exists:projects,id'
        ])->validate(); 
    }

    public function storeTask(array $taskDetails)
    {
        $validatedData = $this->validateTaskDetails($taskDetails);
        Task::create($validatedData);
    }

    public function updateTask(Task $task, array $taskDetails)
    {
        $validatedData = $this->validateTaskDetails($taskDetails);
        $task->update($validatedData);
    }

    public function updateTaskPriorities(array $taskOrders)
    {
        foreach ($taskOrders as $taskOrder)
        {
            $task = Task::findOrFail($taskOrder['value']);
            $task->update(['priority' => $taskOrder['order']]);
        }
    }
}
