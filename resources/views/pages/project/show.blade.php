@extends('layouts.public')

@section('content')
    <div class="my-[50px]">
        <div class="bg-custom-main">
            <div class="container px-[30px] mx-auto py-[30px]">
                <div class="flex flex-col lg:flex-row lg:items-stretch justify-start">
                    <div class="shrink-0 lg:mr-[30px] lg:h-[450px] 2xl:h-[450px]">
                        <img
                            src="/{{ $project->image }}"
                            alt=""
                            class="w-full lg:w-[500px] 2xl:w-[600px] h-full object-cover rounded-[15px]">
                    </div>
                    <div class="w-full mt-[30px] text-center lg:mt-[0]">
                        <div class="flex flex-col h-full">
                            <h1 class="text-custom-primary text-2xl lg:text-[42px] font-bold">
                                {{ $project->name }}
                            </h1>
                            <div class="text-custom-primary text-2xl mt-[15px] flex-1 overflow-y-auto">
                                {{ $project->short_description }}
                            </div>
                            <div class="mt-[20px]">
                                <div
                                    class="relative w-full h-[14px] rounded-full bg-white/30 overflow-hidden shadow-inner"
                                    role="progressbar" aria-valuenow="{{ $project->ready }}" aria-valuemin="0"
                                    aria-valuemax="100"
                                    aria-label="Готовность">
                                    <div
                                        class="absolute left-0 top-0 h-full rounded-full bg-custom-mainDark"
                                        style="width: {{ $project->ready }}%;"></div>
                                </div>
                                <div class="text-custom-primary text-2xl text-center font-semibold mt-[10px]">
                                    {{ __('public.readiness ') }} {{ $project->ready }}%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-[30px] mx-auto text-lg lg:text-[22px] mt-[30px]">
            {!! $project->text !!}
        </div>
    </div>
@endsection
