@extends('layouts.public')
@section('content')
    @include('pages.home.components.banner')
    @include('pages.home.components.lastNews', compact('articles'))
    @include('pages.home.components.counters')
    @include('pages.home.components.ourProjects', compact('projects'))
@endsection
