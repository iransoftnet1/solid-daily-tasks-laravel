@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Display Validation Errors -->
            @include('common.status')

            <div class="panel panel-default">
                <div class="panel-heading">
                    Create New Task
                </div>
                <div class="panel-body">

                    <!-- New Task Form -->
                {!! Form::model(new TaskApp\Task, ['route' => ['tasks.store'], 'class'=>'form-horizontal', 'role' => 'form']) !!}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task Name</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div>

                    <!-- Task Description -->
                    <div class="form-group">
                        <label for="task-description" class="col-sm-3 control-label">Description</label>

                        <div class="col-sm-6">
                            <textarea name="description" id="task-description" class="form-control" maxlength="155"></textarea>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
{{--                            {{ Form::button('<span class="fa fa-plus fa-fw" aria-hidden="true"></span> Create Task', ['type' => 'submit', 'class' => 'btn btn-default'])}}--}}
                        </div>
                    </div>

{{--                    {!! Form::close() !!}--}}

                </div>
                <div class="panel-footer">
                    <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-info" type="button">
                        <span class="fa fa-reply" aria-hidden="true"></span> Back to Tasks
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
