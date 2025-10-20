<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Public\HomeController::class, 'index'])->name('home.index');

Route::get('projects', [\App\Http\Controllers\Public\ProjectsController::class, 'index'])->name('projects.index');
Route::get('projects/{slug}', [\App\Http\Controllers\Public\ProjectsController::class, 'show'])->name('projects.show');

Route::get('news', [\App\Http\Controllers\Public\NewsController::class, 'index'])->name('news.index');
Route::get('news/{slug}', [\App\Http\Controllers\Public\NewsController::class, 'show'])->name('news.show');
