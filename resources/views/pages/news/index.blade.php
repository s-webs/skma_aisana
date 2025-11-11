@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-[30px] my-[30px]">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($articles as $article)
                <div class="bg-custom-main flex items-center p-5 rounded-[15px]">
                    <div class="shrink-0 mr-5">
                        <img src="/{{ $article->preview }}"
                             class="w-[150px] h-[150px] object-cover rounded-[8px]"
                             alt="{{ $article->title }}">
                    </div>
                    <div class="flex-1">
                        <a href="{{ route('news.show', $article) }}"
                           class="text-lg font-semibold text-custom-primary hover:text-custom-mainDark duration-300">
                            {{ $article->title }}
                        </a>
                        <div class="text-custom-halftone mt-[20px]">{{ optional($article->created_at)->format('d.m.Y') }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
