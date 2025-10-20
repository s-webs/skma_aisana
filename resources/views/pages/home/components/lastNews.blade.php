<!--blog-area start-->
<section class="blog-area slick-nav pt-100 pb-100 pt-lg-55 pb-lg-60">
    <div class="container">
        <div class="row gx-4 gx-xxl-5 align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8" data-aos="fade-up">
                <div class="section-title text-center text-md-start mb-60">
                    <h3 class="sect-title mb-25">Новости</h3>
                </div>
            </div>
            <div
                class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-40">
                <div class="slick-nav">
                    <div class="prev_b1 mr-20">
                        <i class="bi bi-chevron-left"></i>
                    </div>
                    <div class="next_b1">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row blog-active-one" data-aos="fade-up" data-aos-delay="100">
            @foreach($articles as $article)
                <div class="col-lg-4">
                    <div class="blog-style-one">
                        <div class="blog-thumb">
                            <img class="w-100" src="/{{ $article->preview }}" alt="img"
                                 style="width: 420px; height: 460px; object-fit: cover;">
                        </div>
                        <div class="blog-content">
                            <h4>
                                <a class="blog-title" href="{{ route('news.show', $article->slug_ru) }}">
                                    {{ $article->title_ru }}
                                </a>
                            </h4>
                            <div class="blog-meta">
                                <a href="#">
                                    <i class="bi bi-clock"></i>
                                    {{ $article->created_at }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--blog-area end-->
