<?php

namespace App\Http\Livewire;

use App\Http\Controllers\TasksController;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateTask extends Component
{
    public $create_form_state = [];

    protected function tasksController()
    {
        return new TasksController();
    }

    public function createTask()
    {
        $this->dispatchBrowserEvent('show-create-form');
    }

    public function saveTask()
    {
        $this->tasksController()->storeTask($this->create_form_state);
        $this->emit('TaskCreated');
        $this->dispatchBrowserEvent('hide-form');
        $this->create_form_state = [];
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('hide-form');
    }

    public function render()
    {
        $projects = Project::all();

        return view('livewire.create-task', [
            'projects' => $projects
        ]);
    }
}
