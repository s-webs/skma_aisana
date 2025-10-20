@extends('layouts.public')

@section('content')
    @include('pages.project.components.titleArea', compact('project'))
    <!--project-details-wrapper start-->
    <section class="project-details-wrapper pt-145 pb-30 pt-lg-60 pb-lg-20">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-lg-12">
{{--                    @include('pages.project.components.projectInformation', compact('project'))--}}
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col">
                    <div class="widget-left-section">
                        <div style="width: 100%; text-align: center;">
                            <img src="/{{ $project->image }}" alt="" style="max-height: 500px; width: auto;">
                        </div>
                        <hr>
                        <h3 class="sect-title-two fw-bold mb-20 mt-55">Описание</h3>
                        <div class="text-white">{!! $project->text_ru !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--project-details-wrapper end-->
    @if($relatedProjects->count() > 0)
        @include('pages.project.components.relatedProjects', compact('relatedProjects'))
    @endif
@endsection
