<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectsController extends Controller
{
    public function validateProjectDetails(array $projectDetails)
    {
        return Validator::make($projectDetails, [
            'name' => 'required|max:50',
            'description' => 'required|max:150'
        ])->validate();
    }

    public function storeProject(array $projectDetails)
    {
        $validatedData = $this->validateProjectDetails($projectDetails);
        Project::create($validatedData);
    }
}
