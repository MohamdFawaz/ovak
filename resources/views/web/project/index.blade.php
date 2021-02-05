@extends('web.layout')

@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.projects')}}</title>
@endsection

@section('pre_header_content')
    <div class="h-75 w-100 m-auto d-flex justify-content-center align-items-center">
        <h2 class="white-color"> {{__('front.header.projects')}} <span class="header-line"></span></h2>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')
    <section class="container">
        <div class="col-sm-12 text-direction my-5">
                <div class="row d-flex justify-content-between">
                    <h2 class="section-second-header"><span> {{__('front.projects.projects')}} </span> <span class="header-line"></span></h2>
                    <div class="d-flex align-items-center select-option-background">
                        <label class="gold-color margin-top-5"> {{__('front.form.sort_by')}} </label>
                        <select class="select select-style margin-top-5">
                            <option value="all">{{__('front.form.show_all')}}</option>
                            @foreach($districts as $district)
                                <option value="district-{{$district->id}}">{{$district->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        <div class="container-fluid my-5">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-3 col-sm-4 col-12 column district-{{$project->district->id}} text-direction my-3">
                    <div class="content">
                        <a href="{{route('projects.page',$project->id)}}">
                            <img src="{{$project->image}}" class="item-pic" alt="{{$project->id}}-project-image" />
                        </a>
                        <div class="row d-flex align-items-center py-3 px-3">
                            <div class="col-sm-8 col-8 mt-2">
                                <h5 class="ovak-font green-color">{{$project->name}}</h5>
                            </div>
                            <div class="col-sm-4 col-4">
                                <a href="{{route('developer.page',$project->developer->slug)}}">
                                    <img src="{{$project->developer->image}}" class="img-fluid" alt="" /></a>
                            </div>
                        </div>
                        <div class="p-3">
                            <div><span class="gold-color float-direction">{{__('front.projects.district')}}</span> : <span> {{$project->district->name}}</span></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center margin-top-25"><a class="white-color ovak-button" id="show">{{__('front.actions.show_more')}}</a></div>
    </section>
    <section id="developers" class="developers mt-5">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-lg-4 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-xs-12">
                <h2 class="section-first-header"><span>{{__('front.home.developers.projects')}}</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header letter-spacing">{{__('front.home.developers.developers')}}</h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="slider-background">
            <div class="variable slider">
                @foreach($development_companies as $company)
              <div class="slider-item">
                    <a href="{{route('developer.page',$company->slug)}}">
                        <div class="slider-image">
                            <img src="{{$company->image}}" alt="" />
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75">
            <a href="{{route('developers.list')}}" class="ovak-button">{{__('front.title.view_all_developers')}}</a>
        </div>
    </section>
@endsection
