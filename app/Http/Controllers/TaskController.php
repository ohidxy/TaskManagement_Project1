<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use App\Task;

class TaskController extends Controller
{
    public function index(Project $project){
        return view('tasks.index', [
            'project' => $project,
            'tasks' => $project->tasks,
        ]);
    }

    public function store(Project $project){
        Task::create(
            $validated_data = request()->validate([
                'project_id' => ['required'],
                'title' => ['required', 'min:5', 'max:255'],
                'description' => ['required', 'min:5', 'max:255']
            ])
        );

        return back();
    }

    // public function edit(Project $project){
    //     return view('projects.edit', compact('project'));
    // }

    public function update(Project $project, Task $task){
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }

    public function destroy(Project $project, Task $task){
        $task->delete();
        return back();
    }
}
