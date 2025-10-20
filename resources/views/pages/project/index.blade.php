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
                        <h2 class="page-title mb-20">Наши проекты</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->
    <!--techy-project-one start-->
    <section class="techy-project-one pt-145 pb-105 pt-lg-55 pb-lg-15">
        <div class="container">
            <div class="grid row gx-4 gx-xxl-5 feature-slider-one pe-0" data-aos="fade-up" data-aos-delay="200">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item cat3 cat5">
                        <div class="feature-item mb-40">
                            <a class="back-bg" href="{{ route('projects.show', $project->slug_ru) }}">
                                <img class="w-100" src="/{{ $project->image }}" alt="img"></a>
                            <h5>
                                <a href="{{ route('projects.show', $project->slug_ru) }}"></a>
                            </h5>
                            <h3><a href="{{ route('projects.show', $project->slug_ru) }}">{{ $project->name_ru }}</a>
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
