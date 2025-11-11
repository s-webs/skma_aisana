<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Counter;
use App\Models\Project;
use App\Models\Step;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $projects  = Project::query()->where('is_published', 1)->get();

        $all = Article::query()->where('is_published', 1)
            ->orderByDesc('id')
            ->get();

        $lastArticle = $all->first();
        $articles    = $all->slice(1)->values();
        $counters = Counter::all();
        $steps = Step::all();

        return view('pages.home.index', compact('projects', 'articles', 'lastArticle', 'counters', 'steps'));
    }

}
