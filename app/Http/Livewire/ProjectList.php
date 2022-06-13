<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ProjectsController;
use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;
    public $create_form_state = [];

    protected $listeners = [
        'TaskCreated' => 'render',
        'TaskDeleted' => 'render',
    ];

    protected function projectsController()
    {
        return new ProjectsController();
    }

    public function createProject()
    {
        $this->dispatchBrowserEvent('show-project-form');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('hide-form');
    }

    public function saveProject()
    {
        $this->projectsController()->storeProject($this->create_form_state);
        $this->emit('ProjectCreated');
        $this->dispatchBrowserEvent('hide-form');
        $this->create_form_state = [];
    }

    public function render()
    {
        $this->projects = Project::withCount('tasks')->get();

        return view('livewire.project-list', [
            'projects' => $this->projects
        ]);
    }
}
