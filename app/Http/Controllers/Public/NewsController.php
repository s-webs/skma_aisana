<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->published()
            ->latest('created_at')
            ->get();

        return view('pages.news.index', compact('articles'));
    }

    // Используем имплиситный роут-модель-биндинг по slug_{locale}
    public function show(Article $article)
    {
        return view('pages.news.show', compact('article'));
    }
}
