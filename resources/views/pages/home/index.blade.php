@extends('layouts.public')
@section('content')
    @include('pages.home.components.banner')
    @include('pages.home.components.poslanie')
    @include('pages.home.components.counters', compact('counters'))
    @include('pages.home.components.lastNews', compact('lastArticle', 'articles'))
    @include('pages.home.components.steps', compact('steps'))
    @include('pages.home.components.ourProjects', compact('projects'))
@endsection
