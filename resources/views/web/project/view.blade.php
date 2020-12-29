@extends('web.layout')

@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection


@section('title')
    <title>{{__('front.head.title.name')}} |  {{$project->name ?? __('front.header.projects') }}</title>
@endsection

@section('pre_header_content')
<div class="header-text">
    <div class="secondery-page-header-ovarlay">
        <h2 class="white-color">{{$project->district->name}} <span class="header-line"></span></h2>
    </div>
</div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')

    <section class="single-project-details margin-top-75">
        <div class="container">
            <div class="single-project-header">
                <img src="{{$project->developer->image}}" />
                <span class="green-color">{{__('front.projects.one_of')}} {{$project->developer->name}} {{__('front.projects.projects')}}</span>
            </div>
            <div class="single-item-details margin-top-75">
                <div class="col-sm-12">
                    <img src="{{$project->image}}" />
                    <div class="consultancy-square hidden-xs">
                        <span class="square-acc"></span>
                        <span class="white-color">Interested !</span>
                        <span class="white-color">ask about this project details</span>
                        <a class="ask" href="javascript:void(0)" id="ask-modal">
                            <span class="trigger-ask consultancy-square-link margin-top-10" data-project-id="{{$project->id}}">ask now</span>
                        </a>
                    </div>
                    <div class="hidden-md hidden-lg hidden-sm text-center margin-top-10">
                        <span class="green-color">ask about this project details</span>
                        <a class="ask" id="ask-modal"><span class="trigger-ask consultancy-square-link margin-top-10" data-project-id="{{$project->id}}">ask now</span></a>
                    </div>
                </div>
                <div class="col-sm-12">
                        <div class="clearfix"></div>
                        <div class="unit-details-text margin-top-50">
                            <h2>{{__('front.projects.overview')}}</h2>
                            <p class="details-paragraph">{{$project->description}}</p>
                        </div>
                </div>
                <div class="clearfix"></div>
                @if($project->amenity)
                        <div class="amenities margin-top-75">
                            <h2 class="green-color">{{__('front.projects.amenities')}}</h2>
                            @foreach($project->amenity as $amenity)
                            <div class="col-md-4">
                                <img class="image-full-width" src="{{$amenity->image}}" alt="amenity-{{$amenity->id}}"/>
                                <h4 class="margin-top-10">{{$amenity->name}}</h4>
                            </div>
                            @endforeach
                        </div>
                @endif
                <div class="clearfix"></div>
                @if($project->utility)
                <div class="utilities margin-top-75">
                    <h2 class="green-color">{{__('front.projects.utilities')}}</h2>
                    <div class="utilities-services">
                        @foreach($project->utility as $utility)
                        <div class="col-md-2 col-sm-3 col-xs-6"><i class="fas {{$utility->utility->icon}} gold-color"></i>
                            {{$utility->utility->name}}</div>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="clearfix"></div>
                <div class="col-sm-12 margin-top-75">
                    <iframe src="{{$project->google_map_link}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="clearfix"></div>
            @if($project->gallery)
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($project->gallery as $key => $gallery)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="@if($key == 0) active @endif"></li>
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($project->gallery as $key => $gallery)
                    <div class="item @if($key == 0) active @endif">
                        <img class="image-full-width" src="{{$gallery->image}}" alt="...">
                    </div>
                    @endforeach
                 </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">{{__('front.projects.previous')}}</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">{{__('front.projects.next')}}</span>
                </a>
            </div>
            @endif
        </div>
    </section>

@endsection
