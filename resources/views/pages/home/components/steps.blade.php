<div class="bg-custom-halftone py-[50px]">
    <div class="container mx-auto">
        <div class="text-center text-[48px] font-bold">
            <h3>{{ __('public.stages_implementation') }}</h3>
        </div>
        <div class="mt-[50px] px-[50px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] lg:gap-[30px]">
            @foreach($steps as $step)
                <div class="bg-custom-main pt-[25px] rounded-[12px] overflow-hidden flex flex-col h-full">
                    <div
                        class="flex items-center justify-center w-[90px] h-[90px] rounded-full bg-custom-primary text-custom-main
             shadow-[inset_0_12px_18px_-12px_rgba(0,0,0,0.35)] font-bold text-[20px] mx-auto">
                        {{ $step->step_num }}
                    </div>

                    <div class="text-[24px] text-custom-primary px-[25px] font-bold text-center mt-[30px]">
                        {{ $step->name }}
                    </div>

                    <!-- Описание заполняет всё между заголовком и бэйджем -->
                    <div class="text-custom-primary px-[25px] mt-[15px] flex-1">
                        {{ $step->description }}
                    </div>

                    <!-- Бэйдж прижат к низу карточки -->
                    <div class="bg-custom-mainDark text-custom-primary mt-[30px] py-[15px] text-center font-bold p-[10px]">
                        {{ $step->badge }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
