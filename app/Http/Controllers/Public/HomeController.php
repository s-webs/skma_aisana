<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::query()->where('is_published', 1)->get();
        $articles = Article::query()->where('is_published', 1)->get();
        return view('pages.home.index', compact('projects', 'articles'));
    }
}
