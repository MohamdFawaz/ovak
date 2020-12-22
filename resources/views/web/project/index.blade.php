@extends('web.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection

@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.projects')}}</title>
@endsection

@section('pre_header_content')
    <div class="header-text">
        <div class="secondery-page-header-ovarlay">
            <h2 class="white-color">{{__('front.projects.projects')}} <span class="header-line"></span></h2>
        </div>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')
    <section id="projects">
        <div class="container">
            <div class="margin-top-75">
                <div class="col-md-8 col-sm-6">
                    <h1 class="green-color"><i class="fa fa-building-o gold-color"></i> {{__('front.projects.projects')}} <span class="header-line"></span></h1>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 margin-top-10 float-right select-option-background">
                    <label class="white-color margin-top-5">{{__('front.form.sort_by')}}</label>
                    <select class="float-right select select-style margin-top-5">
                        <option value="all">{{__('front.form.show_all')}}</option>
                        @foreach($property_types as $type)
                        <option value="type-{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            @foreach($projects as $project)
            <div class="col-md-3 col-sm-4 col-xs-12 column type-{{$type->id}}">
                <a href="{{route('projects.page',$project->id)}}"><!--link lel project-->
                    <div class="content">
                        <img class="item-pic" src="{{$project->image}}" alt="" />
                        <div class="item-details">
                            <div class="col-sm-8 col-xs-8 no-padding">
                                <h4 class="project-name black-color">{{$project->name}}</h4>
                            </div>
                            <div class="col-sm-2 no-padding col-xs-3 developer-icon">
                                <a href="{{route('developer.page',$project->developer->slug)}}"><img src="{{$project->developer->image}}" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$project->district->name}}</span></div>
                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$project->propertyType->name}}</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span>{{$project->address}}</span></div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center margin-top-25"><a class="gold-color-hovarable" id="show">{{__('front.actions.show_more')}}</a></div>
    </section>
    <section id="developers" class="developers">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-lg-4 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-xs-12 no-padding-xs">
                <h2 class="section-first-header"><span>{{__('front.title.projects')}}</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header letter-spacing">{{__('front.title.developers')}}</h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="slider-background">
            <div class="variable slider">
                @foreach($development_companies as $company)
              <div class="slider-item">
                    <a href="{{route('developer.page',$company->slug)}}"><!--link lel developer-->
                        <div class="slider-image">
                            <img src="{{$company->image}}" alt="" />
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a href="{{route('developers.list')}}" class="ovak-button">{{__('front.title.view_all_developers')}}</a></div>
    </section>
@endsection
