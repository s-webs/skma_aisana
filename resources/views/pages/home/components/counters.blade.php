<div class="bg-custom-halftone py-[50px]">
    <div class="container mx-auto">
        <div class="text-center text-[48px] font-bold">
            <h3>{{ __('public.our_indicators') }}</h3>
        </div>
        <div class="relative mt-[50px]">
            <div class="flex flex-col lg:flex-row items-center justify-between p-[40px] bg-custom-main relative z-[20]">
                @foreach($counters as $counter)
                    <div class="text-center text-custom-primary my-[20px] lg:my-[0]">
                        <div class="text-[36px] font-semibold">{{ $counter->count }}</div>
                        <div class="text-[22px]">{{ $counter->name }}</div>
                    </div>
                @endforeach
            </div>
            <div
                class="hidden 2xl:block w-full h-full absolute z-[10] left-[20px] top-[20px] bg-custom-main opacity-60"></div>
        </div>
    </div>
</div>
