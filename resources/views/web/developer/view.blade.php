@extends('web.layout')

@section('title')
    <title>{{__('front.head.title.name')}} | {{$developer->name}}</title>
@endsection

@section('pre_header_content')
    <div class="h-75 w-100 d-flex justify-content-center align-items-center">
        <h2 class="white-color"> {{$developer->name}}<span class="header-line"></span></h2>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')
    <div class="container mt-5">
        <div class="container-fluid single-developer mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mt-5">
                        <h6 class="section-second-header">{{$developer->name}}</h6>
                        <p class="details-paragraph">{{$developer->description}}</p>
                    </div>
                </div>
                <div class="col-sm-6 mt-5 d-flex justify-content-center align-items-center">
                    <div class="developer-image">
                        <img src="{{$developer->image}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sliders">
@if($projects->count())
<div class="container">
    <div class="col-sm-12 mt-5 p-0 text-direction">
        <h4 class="section-second-header"><span>{{$developer->name}} {{__('front.home.developers.projects')}}</span></h4>
    </div>
</div>
<div class="variable single-developer slider mt-5">
    @foreach($projects as $project)
    <div class="slider-item">
        <a href="{{route('projects.page',$project->id)}}">
            <div class="slider-image slider-ovarlay">
                <img class="img-height" src="{{$project->image}}" alt="" />
                <a href="{{route('projects.page',$project->id)}}" class="ovak-button"> {{__('front.actions.show_more')}} <span class="inner-arrow white-color"></span></a><!--link le el project-->
            </div>
            <div class="slider-body">
                <div class="col-sm-12">
                    <span class="project-name green-color float-left">{{$project->name}}</span>
                    <a href="{{route('developer.page',$project->developer->slug)}}" class="float-right">
                        <img style="width:50px;" src="{{$project->developer->image}}" alt="" />
                    </a>
                    <div class="clearfix"></div>
                    <div class="slider-list-text">
                        <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$project->district->name}}</span></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endif
<section id="developers" class="developers mt-5 py-5">
        <div class="container">
            <div class="col-sm-12 text-direction">
                <h2 class="section-second-header">{{__('front.title.similar_developers')}}</h2>
            </div>
        </div>
        <div class="slider-background mt-5">
            <div class="variable slider">
                @foreach($development_companies as $company)
                <div class="slider-item">
                    <a href="{{route('developer.page',$company->slug)}}">
                        <div class="slider-image">
                            <img src="{{$company->image}}" alt="{{$company->slug}}-developer-image" />
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a href="{{route('developers.list')}}" class="ovak-button">{{__('front.title.view_all_developers')}}</a></div>
    </section>
</section>

@endsection
