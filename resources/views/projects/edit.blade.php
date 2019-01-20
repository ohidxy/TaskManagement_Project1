@extends('layout')

@section('content')
<div class="container mt-3">
    <h2>Edit Project - {{ $project->title }}</h2>
    {{-- Edit Form --}}
    <form method="POST" action="/projects/{{ $project->id }}">
        @csrf
        @method('PATCH')
        <input class="form-control mb-1" type="text" name="title" placeholder="Title" value="{{ $project->title }}" required>
        <input class="form-control mb-1" type="text" name="description" placeholder="Description" value="{{ $project->description }}" required>
        <button class="btn btn-outline-success" type="submit">Save Project</button>
    </form>

    @include('errors')
</div>
@endsection