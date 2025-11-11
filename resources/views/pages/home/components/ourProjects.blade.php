<div class="relative bg-custom-mainDark">
    <div class="absolute z-[10] w-full h-full top-0 left-0 overflow-hidden">
        <img src="/assets/img/pattern_06.png" alt="" class="w-full h-full object-cover opacity-50">
    </div>

    <div class="container mx-auto relative z-[20] py-[50px] px-[30px]">
        <div class="text-center text-custom-primary text-[48px] font-bold">
            <h3>Наши проекты</h3>
        </div>
        <!-- Ряд: равная высота карточек -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-[30px] auto-rows-fr mt-[50px]">
            @foreach($projects as $project)
                <div class="bg-custom-main pt-[25px] rounded-[12px] overflow-hidden p-[20px] flex flex-col h-full">
                    <div class="flex items-center justify-center w-[90px] h-[90px] rounded-full bg-custom-primary overflow-hidden mx-auto">
                        <img src="/{{$project->image}}" alt="" class="w-full h-full object-cover rounded-full">
                    </div>

                    <div class="text-[24px] text-custom-primary font-bold text-center mt-[30px]">
                        {{ $project->name_ru }}
                    </div>

                    <!-- Описание заполняет доступную высоту -->
                    <div class="text-custom-primary mt-[15px] flex-1">
                        {{ $project->short_description_ru }}
                    </div>

                    <!-- Низ прижат к нижнему краю карточки -->
                    <div class="mt-auto pt-[20px]">
                        <div
                            class="relative w-full h-[14px] rounded-full bg-white/30 overflow-hidden shadow-inner"
                            role="progressbar" aria-valuenow="{{ $project->ready }}" aria-valuemin="0" aria-valuemax="100"
                            aria-label="Готовность">
                            <div class="absolute left-0 top-0 h-full rounded-full bg-gradient-to-r from-white/80 to-white/60"
                                 style="width: {{ $project->ready }}%;"></div>
                        </div>
                        <div class="text-custom-primary text-center font-semibold mt-[10px]">
                            Готовность {{ $project->ready }}%
                        </div>

                        <a href="{{ route('projects.show', $project->slug_ru) }}"
                           class="bg-custom-primary text-custom-main font-semibold flex items-center justify-center py-[10px] px-[15px] rounded-[8px] mt-[20px] hover:bg-custom-mainDark hover:text-custom-primary transition-colors duration-300">
                            Подробнее
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
