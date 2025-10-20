<!--latest-case-work start-->
<section class="latest-case-work pt-75 pb-150 pt-lg-65">
    <img class="case-shape shape-1b" src="/assets/img/shape/star-3b.svg" alt="shape">
    <img class="case-shape shape-2b" src="/assets/img/shape/star-4b.svg" alt="shape">
    <img class="case-shape shape-3b d-none d-lg-inline-block" src="/assets/img/shape/star-2.svg" alt="shape">
    <img class="case-shape shape-4b" src="/assets/img/shape/star-5b.svg" alt="shape">
    <div class="container">
        <div class="row gx-4 gx-xxl-5 align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section-title mb-55 text-md-start text-center">
                    <h3 class="sect-title mb-25" data-aos="fade-up" data-aos-delay="100">Наши проекты
                    </h3>
                </div>
            </div>
            <div
                class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-60">
                <div class="slick-nav">
                    <div class="prev_p1 mr-20">
                        <i class="bi bi-chevron-left"></i>
                    </div>
                    <div class="next_p1">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row case-slider-one" data-aos="fade-up" data-aos-delay="200">
            @foreach($relatedProjects as $item)
                <div class="col-lg-4">
                    <div class="case-item-one">
                        <div class="case-thumb">
                            <img class="w-100" src="/{{ $item->image }}" alt="img">
                        </div>
                        <div class="case-content">
                            <h3><a class="sect-title-two"
                                   href="{{ route('projects.show', $item->slug_ru) }}">{{ $item->name_ru }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--latest-case-work end-->
