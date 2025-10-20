<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.news.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::query()->where('slug_ru', $slug)->firstOrFail();
        return view('pages.news.show', compact('article'));
    }
}
