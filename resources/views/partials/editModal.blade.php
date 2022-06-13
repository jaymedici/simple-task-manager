<!-- Create Task Modal -->
<div wire:ignore.self class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="createFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <form wire:submit.prevent="updateTask()">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFormLabel">Edit Task Details</h5>
                <button wire:click.prevent='closeModal' type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="name">Task Name</label>
                    <input type="text" wire:model.defer="edit_form_state.name" class="form-control @error('name') is-invalid @enderror"  placeholder="Enter Task name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="priority">Priority</label>
                    <input type="number" wire:model.defer="edit_form_state.priority" class="form-control @error('priority') is-invalid @enderror"  placeholder="Enter Task Priority">
                    @error('priority')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="project_id">Project</label>
                    <select name="project_id" wire:model.defer="edit_form_state.project_id" class="form-control @error('project_id') is-invalid @enderror">
                        <option value="" selected>Select Project for the Task</option>
                        @foreach ($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                    @error('project_id')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button wire:click.prevent='closeModal' type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </form>
        </div>
    </div>