<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('pages.project.index', compact('projects'));
    }
    public function show($slug)
    {
        $project = Project::query()->where('slug_ru', $slug)->firstOrFail();
        $relatedProjects = Project::query()->where('id', '!=', $project->id)->get();
        return view('pages.project.show', compact('project', 'relatedProjects'));
    }
}
