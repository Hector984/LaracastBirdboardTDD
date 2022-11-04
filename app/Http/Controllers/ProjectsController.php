<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show(Request $request, Project $project)
    {

        return view('projects.show', compact('project'));
    }

    public function store(Request $request)
    {

        $attributes = request()->validate(['title' => 'required', 'description' => 'required']);

        Auth::user()->projects()->create($attributes);

        return redirect("/projects");
    }
}
