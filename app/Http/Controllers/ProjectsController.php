<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;

        return view('projects.index', compact(
            'projects'
        ));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'paper_url' => 'required|url',
            'demo_url' => 'required|url',
        ]);

        auth()->user()->projects()->create(array_merge($project, request()->only('description')));

        return redirect(route('projects.index'))->with('status', 'Great! Your paper has been added!');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'paper_url' => 'required|url',
            'demo_url' => 'required|url',
        ]);

        $project->update(array_merge($attributes, request()->only('description')));

        return redirect(route('projects.index'))->with('status', 'Great! Your paper has been updated!');
    }
}
