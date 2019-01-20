@extends('layout')

@section('title', 'Project List - Task Management')

@section('content')
    <div class="container mt-3">
        @if (!$projects->isEmpty())
            {{-- Showing List of Projects --}}
            @foreach ($projects as $project)
                <div class="card">
                    <div class="card-header bg-info">
                        <a class="text-light" href="/projects/{{ $project->id }}/tasks"><b>{{ $project->title }}</b></a>
                    </div>
                    <div class="card-body">
                        {{ $project->description }}
                    </div>
                    <div class="card-footer pb-0">
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-outline-info btn-sm" href="/projects/{{ $project->id }}/edit">Edit</a>
                            </div>
                            <div class="col-6 text-right">
                                {{-- Delete button --}}
                                <form action="/projects/{{ $project->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        @else
            <div class="alert alert-warning">
                No Record Available!
            </div>
        @endif
    </div>
@endsection