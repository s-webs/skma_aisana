<!--our-services start-->
<section class="our-services pt-80 pb-105 pt-lg-45 pb-lg-15">
    <div class="container">
        <div class="row gx-4 gx-xxl-5 justify-content-lg-start justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section-title text-center text-lg-start mb-55">
                    <h3 class="sect-title mb-20" data-aos="fade-upt">Наши проекты</h3>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-xxl-5">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-style-one mb-45">
                        <img class="front-icon" src="/{{ $project->image }}" style="height: 300px; width: 100%; object-fit: cover; border-radius: 15px;" alt="icon">
                        <img class="back-icon" src="/{{ $project->image }}" style="height: 300px; width: 100%; object-fit: cover; border-radius: 15px;" alt="icon">
                        <h2>
                            <a href="{{ route('projects.show', $project->slug_ru) }}" style="text-transform: none">{{ $project->name_ru }}</a>
                        </h2>
                        <hr>
                        <a href="{{ route('projects.show', $project->slug_ru) }}">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--our-services end-->
