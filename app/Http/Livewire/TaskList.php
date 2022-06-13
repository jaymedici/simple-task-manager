<?php

namespace App\Http\Livewire;

use App\Http\Controllers\TasksController;
use App\Models\Project;
use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks, $projects;
    public $projectId;
    public $edit_form_state = [];

    protected $listeners = [
        'TaskCreated' => 'render',
        'ProjectCreated' => 'render'
    ];

    protected function tasksController()
    {
        return new TasksController();
    }

    public function getTasksByPriority()
    {
        return Task::orderBy('priority', 'ASC')
                ->get();
    }

    public function getProjectTasksByPriority()
    {
        return Task::orderBy('priority', 'ASC')
            ->where('project_id', $this->projectId)
            ->get();
    }

    public function reorderTasks($taskOrders)
    {
        $this->tasksController()->updateTaskPriorities($taskOrders);
    }

    public function editTask(Task $task)
    {
        $this->edit_form_state = $task->toArray();
        $this->task = $task;

        $this->dispatchBrowserEvent('show-edit-form');
    }

    public function updateTask()
    {
        $this->tasksController()->updateTask($this->task, $this->edit_form_state);
        $this->dispatchBrowserEvent('hide-form');
        $this->edit_form_state = [];
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        $this->emit('TaskDeleted');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('hide-form');
    }

    public function render()
    {
        if($this->projectId == null)
        {
            $this->tasks = $this->getTasksByPriority();
        }
        else {
            $this->tasks = $this->getProjectTasksByPriority();
        }
        
        $this->projects = Project::all();

        return view('livewire.task-list', [
            'tasks' => $this->tasks,
            'projects' => $this->projects
        ]);
    }
}
