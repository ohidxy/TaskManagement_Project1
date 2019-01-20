@extends('layout')

@section('content')
<div class="container mt-3">
    <h2>Create a Project</h2>
    {{-- Create Form --}}
    <form method="POST" action="/projects">
        @csrf
        <input class="form-control mb-1" type="text" name="title" placeholder="Title" required>
        <input class="form-control mb-1" type="text" name="description" placeholder="Description" required>
        <button class="btn btn-outline-success" type="submit">Create Project</button>
    </form>

    @include('errors')
</div>
@endsection