@extends('web.layout')

@section('title')
    <title>{{__('front.head.title.name')}} |  {{$project->name ?? __('front.header.projects') }}</title>
@endsection

@section('pre_header_content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
    <div>
        <h2 class="white-color"> {{$project->name}} <span class="header-line"></span></h2>
        <h2 class="white-color mt-3"> {{$project->district->name}} <span class="header-line"></span></h2>
    </div>
</div>
@endsection
@section('content')
    @include('web.partials.inner_pages_header')
    <div class="col-sm-12 white-background gold-border-bottom py-3 p-0 display-none project-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <a class="ovak-button ask py-2" href="#">{{__('front.units.ask_now')}}</a>
                    </div>
                    <div class="col-6 p-0">
                        <a class="ovak-button py-2 green-background" href="{{config('settings.whatsapp_link')}}"><i class="fab fa-whatsapp"></i> {{__('front.whatsapp')}}</a>
                    </div>
                </div>
            </div>
        </div>
    <section class="single-project">
        <div class="container py-5">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-4">
                        <div class="developer-image text-direction">
                            <img src="{{$project->developer->image}}" class="img-fluid" alt="{{$project->developer->image}}'-developer-image'"/>
                        </div>
                    </div>
                    <div class="col-8 p-0">
                    @if(App::getLocale() == 'ar')
                        <h5 class="green-color px-2">{{__('front.projects.one_of')}} {{__('front.projects.projects')}} {{$project->developer->name}}</h5>
                    @else
                        <h5 class="green-color px-2">{{__('front.projects.one_of')}} {{$project->developer->name}} {{__('front.projects.projects')}}</h5>
                    @endif
                    </div>
                </div>
            </div>
            <div class="single-item-details mt-5">
                <div class="col-sm-12">
                    <img src="{{$project->image}}" class="img-fluid" alt="{{$project->name}}'-project-image'" />
                    <div class="consultancy-square d-none d-sm-block">
                        <span class="square-acc"></span>
                        <span class="white-color">{{__('front.projects.interested')}}</span>
                        <span class="white-color">{{__('front.projects.ask_about_this_project_details')}}</span>
                        <a href="javascript:void(0)"><span class="ovak-button my-3 trigger-ask @if(Auth::check()) ask @else login @endif" data-entity-id="{{$project->id}}" data-entity-type="project">{{__('front.projects.ask_now')}}</span></a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="unit-details-text mt-5">
                                    <h2 class="gold-color">{{__('front.projects.overview')}}</h2>
                                    <p class="details-paragraph">
                                        {{$project->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($project->amenity)
                <div class="amenities mt-5">
                    <div class="col-sm-12">
                        <h2 class="gold-color">{{__('front.projects.amenities')}}</h2>
                    </div>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            @foreach($project->amenity as $amenity)
                            <div class="col-md-4 mt-5 mt-sm-0">
                                <img class="img-fluid" src="{{$amenity->image}}" alt="amenity-{{$amenity->id}}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                @if($project->utility->count())
                <div class="utilities mt-5">
                    <div class="col-sm-12">
                        <h2 class="gold-color">{{__('front.projects.utilities')}}</h2>
                    </div>
                    <div class="utilities-services">
                        <div class="container-fluid">
                            <div class="row div-padding">
                                @foreach($project->utility as $utility)
                                <div class="col-md-2 col-sm-3 col-xs-6">
                                    <i class="fas {{$utility->utility->icon}} gold-color"></i>
                                    {{$utility->utility->name}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-sm-12 mt-5">
                    <iframe src="{{$project->google_map_link}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                @if($project->gallery)
                <div class="col-sm-12 mt-5 pt-5">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($project->gallery as $key => $gallery)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img src="{{$gallery->image}}" class="d-block w-100" alt="slider-image-{{$gallery->id}}">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
