<div>
    <div class="row text-center mb-3">
        <div class="col-md-5 py-1">
            <h5>Sort Tasks by Project</h5>
        </div>
        <div class="col-md-7">
            <select wire:model="projectId" id="" class="form-control">
                <option value="" selected>Select Project</option>
                @foreach ($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div wire:sortable="reorderTasks">
        @forelse ($tasks as $task)
            <div wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" class="card border-secondary mb-2">
                <div class="card-body text-secondary">
                    <div class="row">
                        <div wire:sortable.handle class="col-md-1 py-1">
                            <i class="fa fa-arrows"></i>
                        </div>
                        <div class="col-md-9">
                            <h5>#{{$task->priority}} {{$task->name}}</h5>
                        </div>
                        <div class="col-md-2">
                            <span class="float-right">
                                <a href="" wire:click.prevent='editTask({{ $task }})'><i class="fa fa-pencil-square"></i></a>
                                @include('partials.editModal')
                                <a href="" wire:click.prevent='deleteTask({{ $task }})' class="text-danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>  
        @empty
            <div class="mt-3">
                <h5 class="text-center">No tasks added yet...</h5>
            </div>
        @endforelse
    </div>
</div>
