@extends('layouts.public')

@push('styles')
    <style>
        .content-news img{
            display:block;
            max-width:100%;
            height:auto;
            border-radius:15px;
            margin:0 auto;
        }
        @media (max-width:1023.98px){
            .content-news img{ width:100% !important; }
        }
    </style>
@endpush

@section('content')
    <div class="my-[50px]">
        <div class="bg-custom-main">
            <div class="container px-[30px] mx-auto py-[30px]">
                <div class="flex flex-col-reverse lg:flex-row items-center justify-between">
                    <div class="mr-[30px]">
                        <div class="mt-[30px] lg:mt-[0]">
                            <h1 class="text-custom-primary text-xl lg:text-[42px] font-bold">
                                {{ $article->title }}
                            </h1>
                        </div>
                        <div class="mt-[30px] text-md lg:text-[24px] text-custom-halftone font-semibold">
                            {{ optional($article->created_at)->format('d.m.Y') }}
                        </div>
                    </div>
                    <div class="shrink-0">
                        <img src="/{{ $article->preview }}" alt=""
                             class="w-full lg:w-[500px] 2xl:w-[800px] 2xl:h-[450px] object-cover rounded-[15px]">
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-[30px] mx-auto text-lg lg:text-[22px] mt-[30px] content-news">
            {!! $article->text !!}
        </div>
    </div>
@endsection
