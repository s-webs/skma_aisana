<div class="relative bg-custom-mainDark">
    <div class="absolute z-[10] w-full h-full top-0 left-0 overflow-hidden">
        <img src="/assets/img/pattern_06.png" alt="" class="w-full h-full object-cover opacity-50">
    </div>
    <div class="container mx-auto px-[30px] lg:px-[100px] relative z-[20] py-[50px]">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="w-full lg:w-[600px] 2xl:w-[800px] lg:mr-[30px]">
                <div class="mb-[30px]">
                    <img src="/{{ $lastArticle->preview }}" alt=""
                         class="w-full rounded-[15px]">
                </div>
                <div class="mb-[15px]">
                    <h2 class="text-xl lg:text-[42px] font-bold text-custom-primary">{{ $lastArticle->title_ru }}</h2>
                </div>
                <div class="flex items-center text-custom-secondary text-[16px] mb-[40px]">
                    <i class="ph ph-calendar-dots"></i>
                    <span class="ml-[10px]">{{ $lastArticle->created_at }}</span>
                </div>
                <div>
                    <a href="{{ route('news.show', $lastArticle->slug_ru) }}"
                       class="bg-custom-main rounded-[8px] px-[25px] py-[15px] text-lg lg:text-[24px] font-semibold text-custom-primary hover:bg-custom-mainDark transition-colors duration-300">
                        <span class="align-top">Читать статью</span>
                        <i class="ph ph-caret-right align-middle inline-block leading-none"></i>
                    </a>
                </div>
            </div>
            <div class="shrink-0 flex-1 mt-[30px] lg:mt-[0]">
                <div class="text-[32px] text-custom-primary font-semibold border-b-3">Новости</div>
                @foreach($articles as $article)
                    <div class="mt-[30px]">
                        <div class="flex">
                            <div class="w-[120px] h-[120px] shrink-0 mr-[15px]">
                                <img src="/{{ $article->preview }}" alt=""
                                     class="w-full h-full object-cover rounded-[12px]">
                            </div>
                            <div class="flex flex-col justify-between">
                                <div><a href="{{ route('news.show', $article->slug_ru) }}" class="text-custom-primary text-sm lg:text-lg font-semibold hover:text-custom-main transition-colors duration-300">{{ $article->title_ru }}</a></div>
                                <div>
                                    <a href="{{ route('news.show', $article->slug_ru) }}"
                                       class="bg-custom-main rounded-[5px] px-[10px] py-[5px] text-sm lg:text-[18px] font-semibold text-custom-primary hover:bg-custom-mainDark transition-colors duration-300">
                                        <span class="align-top">Читать</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
