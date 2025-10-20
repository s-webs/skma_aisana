@extends('layouts.public')

@section('content')
    <!--page-title-area start-->
    <div class="page-title-area pt-210 pb-150 pt-lg-120 pb-lg-125 pb-md-100">
        <img class="page-title-shape shape-one " src="/assets/img/shape/star-10d.svg" alt="shape">
        <img class="page-title-shape shape-three" src="/assets/img/shape/star-2.svg" alt="shape">
        <img class="page-title-shape shape-four d-none d-md-inline-block " src="/assets/img/shape/star-4b.svg"
             alt="shape">
        <img class="page-title-shape shape-five d-none d-lg-inline-block " src="/assets/img/shape/line-round-9d.svg"
             alt="shape">
        <img class="page-title-shape shape-six" src="/assets/img/shape/star-5b.svg" alt="shape">
        <img class="page-title-shape shape-seven" src="/assets/img/shape/star-5b.svg" alt="shape">
        <img class="page-title-shape shape-eight d-none d-xl-inline-block" src="/assets/img/page-title/img-01.png"
             alt="img">
        <img class="page-title-shape shape-nine d-none d-xl-inline-block" src="/assets/img/page-title/img-02.png"
             alt="img">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-20">Новости</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->
    <!--blog-grid-area start-->
    <section class="blog-grid-area pt-150 pb-105 pt-lg-60 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style-two mb-45">
                            <div class="blog-thumb">
                                <img class="w-100" style="width: 410px; height: 470px; object-fit: cover;"
                                     src="/{{ $article->preview }}"
                                     alt="img">
                            </div>
                            <div class="blog-content">

                                <h3>
                                    <a class="blog-title"
                                       href="{{ route('news.show', $article->slug_ru) }}">{{ $article->title_ru }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="{{ route('news.show', $article->slug_ru) }}"><i
                                            class="bi bi-clock"></i> {{ $article->created_at }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--blog-grid-area end-->
@endsection
