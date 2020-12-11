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
            <h2 class="white-color header-letter-spacing">{{__('front.title.projects')}}</h2>
            <h2 class="green-color">{{__('front.header.developers')}} <span class="header-line"></span></h2>
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
        <section id="developers" class="developers">
            <div class="col-sm-12 no-padding-xs">
                <div class="container">
                    <h2 class="ovak-font">{{$developer->name}} {{__('front.title.projects')}} </h2>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="slider-background">
                <div class="variable slider">
                    @foreach($projects as $project)
                    <div class="slider-item">
                        <a href="{{route('projects.page',$project->id)}}">
                            <div class="slider-image">
                                <img src="{{$project->image}}" alt="" />
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        @endif
        <section id="developers" class="developers">
            <div class="col-sm-12 no-padding-xs">
                <div class="container">
                    <h2 class="ovak-font">{{__('front.title.developers_list')}}</h2>
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
