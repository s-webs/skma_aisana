<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $articles = Article::query()->orderBy('created_at', 'desc')->get();
        return view('pages.news.index', compact('articles'));
    }

    public function show($slug): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $article = Article::query()->where('slug_ru', $slug)->firstOrFail();
        return view('pages.news.show', compact('article'));
    }
}
