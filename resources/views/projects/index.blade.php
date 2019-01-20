@extends('layout')

@section('title', 'Project List - Task Management')

@section('content')
<div class="container mt-3">

    {{-- Showing List of Projects --}}
    @foreach ($projects as $project)
        <div class="card">
            <div class="card-header bg-info">
                {{ $project->title }}
            </div>
            <div class="card-body">
                {{ $project->description }}
            </div>
        </div>
        <br>
    @endforeach

</div>
@endsection