@extends('layout')

@section('title', 'Detail')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h2>{{ $project->title }}</h2>
        </div>
        <div class="card-body">
            {{ $project->description }}
        </div>
    </div>

    <div class="mt-3">
        <h2>Create Task</h2>
        <form method="POST" action="/projects/{{ $project->id }}/tasks">
            @csrf
            <input type="hidden" name="project_id" value="{{ $project->id }}">
            <input class="form-control mb-1" type="text" name="title" placeholder="Task title" required>
            <input class="form-control mb-1" name="description" type="text" placeholder="Task description">
            <button class="btn btn-outline-success" type="submit">Create Task</button>
        </form>
        @include('errors')
    </div>


    {{-- Task List --}}
    <h2>Task List</h2>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Task Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!$tasks->isEmpty())
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">
                            <form action="">
                                <input type="checkbox" name="">
                            </form>
                        </th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <form class="m-0" method="POST" action="/projects/{{ $project->id }}/tasks/{{ $task->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No Task available.</td>
                </tr>
            @endif
            
        </tbody>
    </table>
</div>
@endsection