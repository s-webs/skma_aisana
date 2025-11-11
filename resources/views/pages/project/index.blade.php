@extends('layouts.public')

@section('content')
    <div class="container mx-auto px-[30px] my-[30px]">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-2">
            @foreach($projects as $project)
                <div class="bg-custom-main flex flex-col lg:flex-row items-center p-5 rounded-[15px]">
                    <div class="shrink-0 lg:mr-5 lg:h-full">
                        <img src="/{{ $project->image }}"
                             class="w-full lg:w-[250px] lg:h-full object-cover rounded-[8px]"
                             alt="{{ $project->name }}">
                    </div>
                    <div class="flex-1 mt-[20px] lg:mt-[0px]">
                        <a href="{{ route('projects.show', $project) }}"
                           class="text-2xl font-bold text-custom-primary hover:text-custom-mainDark duration-300">
                            {{ $project->name }}
                        </a>
                        <div class="text-custom-primary mt-[20px]">
                            {{ $project->short_description }}
                        </div>
                        <div class="mt-[40px]">
                            <div
                                class="relative w-full h-[14px] rounded-full bg-white/30 overflow-hidden shadow-inner"
                                role="progressbar" aria-valuenow="{{ $project->ready }}" aria-valuemin="0" aria-valuemax="100"
                                aria-label="Готовность">
                                <div
                                    class="absolute left-0 top-0 h-full rounded-full bg-custom-mainDark"
                                    style="width: {{ $project->ready }}%;"></div>
                            </div>
                            <div class="text-custom-primary text-lg text-center font-semibold mt-[10px]">
                                {{ __('public.readiness ') }} {{ $project->ready }}%
                            </div>
                        </div>
                        <div class="mt-[20px]">
                            <a href="{{ route('projects.show', $project) }}" class="block text-center text-lg font-semibold text-custom-main hover:text-white px-[15px] py-[10px] rounded-[8px] bg-white hover:bg-custom-mainDark duration-300">{{ __('public.details') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
