@extends('layouts.public')

@push('styles')
    <style>
        /* Чтобы не вылезали за контейнер на любом размере */
        .content-news img{
            display:block;
            max-width:100%;
            height:auto;
            border-radius:15px;
            margin:0 auto;
        }

        /* < lg по Tailwind: смартфоны и планшеты */
        @media (max-width:1023.98px){
            .content-news img{
                width:100% !important; /* перебьёт inline-атрибуты */
            }
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
                            <h1 class="text-custom-primary text-xl lg:text-[42px] font-bold">{{ $article->title_ru }}</h1>
                        </div>
                        <div class="mt-[30px] text-md lg:text-[24px] text-custom-halftone font-semibold">
                            {{ $article->created_at }}
                        </div>
                    </div>
                    <div class="shrink-0">
                        <img src="/{{ $article->preview }}" alt="" class="w-full lg:w-[500px] 2xl:w-[800px] 2xl:h-[450px] object-cover rounded-[15px]">
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-[30px] mx-auto text-lg lg:text-[22px] mt-[30px] content-news">
            {!! $article->text_ru !!}
        </div>
    </div>
@endsection
