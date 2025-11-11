<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
        'web',
    ],
], function () {
    Route::get('/', [\App\Http\Controllers\Public\HomeController::class, 'index'])->name('home.index');

    Route::get('ai-agents', [\App\Http\Controllers\Public\ProjectsController::class, 'index'])->name('projects.index');
    Route::get('ai-agents/{project}', [\App\Http\Controllers\Public\ProjectsController::class, 'show'])->name('projects.show');

    Route::get('news', [\App\Http\Controllers\Public\NewsController::class, 'index'])->name('news.index');
    Route::get('news/{article}', [\App\Http\Controllers\Public\NewsController::class, 'show'])->name('news.show');

});
