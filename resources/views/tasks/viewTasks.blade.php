@extends('layout.app')

@section('head_links')
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            @livewire('task-list')
        </div>
        <div class="col-md-4">
            <div class="row mb-3">
                @livewire('create-task')
            </div>
            <div class="row">
                @livewire('project-list')
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <script>
       window.addEventListener('show-create-form', event => {
            $('#createForm').modal('show');
        }); 

        window.addEventListener('show-edit-form', event => {
            $('#editForm').modal('show');
        });

        window.addEventListener('show-project-form', event => {
            $('#projectForm').modal('show');
        });

        window.addEventListener('hide-form', event => {
            $('#createForm').modal('hide');
            $('#editForm').modal('hide');
            $('#projectForm').modal('hide');
        });
    </script>
@endsection