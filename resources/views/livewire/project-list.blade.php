<div>
    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h6 class="card-title">Project List</h6>
        </div>
        <div class="card-body">

            <ul class="list-group list-group-unbordered mb-3">
                @forelse ($projects as $project)
                <li class="list-group-item">
                    {{$project->name}}
                    <span class="pull-right">{{$project->tasks_count}}</span>
                </li>
                @empty
                    No Projects created...
                @endforelse
            </ul>      
            
            <div class="pull-right">
                <a href="" wire:click.prevent='createProject'>Create Project</a>
            </div>

            <!-- Create Task Modal -->
            <div wire:ignore.self class="modal fade" id="projectForm" tabindex="-1" role="dialog" aria-labelledby="projectFormLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form wire:submit.prevent="saveProject">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="projectFormLabel">Project Details</h5>
                        <button wire:click.prevent='closeModal' type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="name">Project Name</label>
                            <input type="text" wire:model.defer="create_form_state.name" class="form-control @error('name') is-invalid @enderror"  placeholder="Enter Project name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Project Description</label>
                            <textarea name="description" wire:model.defer="create_form_state.description" class="form-control @error('description') is-invalid @enderror"  placeholder="Enter Project description" cols="30" rows="5"></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click.prevent='closeModal' type="button" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
