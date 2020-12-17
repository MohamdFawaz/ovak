@extends('web.layout')

@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection

@section('title')
    <title>{{__('front.head.title.name')}} | {{$developer->name}}</title>
@endsection

@section('pre_header_content')
    <div class="header-text">
        <div class="secondery-page-header-ovarlay">
            <h2 class="white-color">{{__('front.header.developers')}} <span class="header-line"></span></h2>
        </div>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')
    <section class="single-developer">
        <div class="developer-details margin-top-75">
            <div class="container">
                <div class="col-sm-6 col-xs-12">
                    <h2 class="ovak-font">{{$developer->name}}</h2>
                    <p class="details-paragraph">{{$developer->description}}</p>
                </div>
                <div class="col-sm-3 col-xs-12 text-center">
                    <img class="developer-image image-full-width" src="{{$developer->image}}" alt="developer-image-{{$developer->id}}" />
                </div>
            </div>
        </div>
        @if(count($projects) > 0)
            <div class="container">
            <h2 class="section-second-header"><span>{{__('front.home.project.projects')}}</span> <span class="header-line"></span></h2>
            </div>
            <div class="variable slider">
                @foreach($projects as $project)
                    <div class="slider-item">
                        <a href="{{route('projects.page',$project->id)}}">
                            <div class="slider-image slider-ovarlay col-sm-12 no-padding">
                                <img class="img-height" src="{{$project->image}}" alt="" />
                                <a href="{{route('projects.list')}}" class="ovak-button">{{__('front.actions.show_more')}}<i class="fa fa-arrow-right"></i></a><!--link le el project-->
                            </div>
                            <div class="clearfix"></div>
                            <div class="slider-body ">
                                <div class="col-sm-12">
                                    <h4 class="project-name green-color" style="float:left; margin-top:10px;">Palm Hills</h4>
                                    <a href="{{route('developer.page',$project->developer->slug)}}">
                                        <img src="{{$project->image}}" style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid #B7893D; float:right;"/>
                                    </a>
                                    <div class="clearfix"></div>
                                    <div class="slider-list-text">
                                        <div><span class="gold-color">{{__('front.projects.district')}} :</span><span>{{$project->district->name}}</span></div>
                                        <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span>{{$project->propertyType->name}}</span></div>
                                        <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span>{{$project->address}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
        <section id="developers" class="developers">
            <div class="col-sm-12 no-padding-xs">
                <div class="container">
                    <h2 class="ovak-font">{{__('front.title.developers_list')}} <span class="header-line"></span></h2>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="slider-background">
                <div class="variable slider">
                    @foreach($development_companies as $company)
                    <div class="slider-item">
                        <a href="{{route('developer.page',$company->slug)}}">
                            <div class="slider-image">
                                <img src="{{$company->image}}" alt="image-of-{{$company->name}}" />
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center margin-top-75"><a href="{{route('developers.list')}}" class="ovak-button">View all developers</a></div>
        </section>
    </section>
@endsection
