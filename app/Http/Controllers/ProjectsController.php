<?php

namespace App\Http\Controllers;

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
            'paper_url' => 'required|url',
            'demo_title' => 'required|unique:projects',
            'dockerfile' => 'required',
        ]);

        auth()->user()->projects()->create(
            array_merge(
                $project,
                request()->only(['paper_doi'])
            )
        );

        return redirect(route('projects.index'))->with('status', 'Great! Your project has been created!');
    }
}
