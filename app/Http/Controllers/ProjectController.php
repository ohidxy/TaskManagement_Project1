<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function index(){
        return view('projects.index', [
            'projects' => Project::all()
        ]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        Project::create(
            $validated_data = request()->validate([
                'title' => ['required'],
                'description' => ['required']
            ])
        );
        return redirect('/projects');
    }
}
