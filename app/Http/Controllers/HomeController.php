<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('author')->get();

        return view('welcome', compact(
            'projects'
        ));
    }
}
