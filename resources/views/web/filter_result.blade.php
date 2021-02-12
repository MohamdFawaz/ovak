@extends('web.layout')

@section('title')
<title>{{__('front.head.title.name')}} | {{__('front.header.filter_result')}}</title>
@endsection

@section('pre_header_content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
    <h2 class="white-color"> {{__('front.header.filter_result')}} <span class="header-line"></span></h2>
</div>
@endsection

@section('content')
@include('web.partials.inner_pages_header')
<section id="result">
    <div class="container">
        <div class="margin-top-75">
            <div class="col-md-8 col-sm-6">
                <div class="secondery-page-header-ovarlay">
                    <h2 class="green-color ovak-font">{{count($units)}} {{__('front.result.residential')}}</h2>
                    <h2 class="green-color ovak-font">{{__('front.result.compound')}} <span class="header-line"></span></h2>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container-fluid">
            <div class="row">
                @foreach($units as $unit)
                <div class="col-sm-6 col-12 unit-show column text-direction my-3">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 col-12 p-0">
                                    <a href="{{route('unit.page',$unit->id)}}">
                                        <img src="{{$unit->image}}" class="item-pic" alt="{{$unit->id}}-unit-image" />
                                    </a>
                                </div>
                                <div class="col-sm-8 col-12 p-0">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center p-3">
                                            <div class="col-sm-8 col-8 mt-2 p-0">
                                                <h5 class="ovak-font green-color">{{$unit->name}}</h5>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <a href="{{route('developer.page',$unit->project->developer->slug)}}">
                                                    <img src="{{$unit->project->developer->image}}" class="img-fluid" alt="{{$unit->project->developer->image}}-unit-developer-image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="padding-bottom-xs">
                                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$unit->project->district->name}}</span></div>
                                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$unit->unitType->name ?? ""}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 unit-show column text-direction my-3">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 col-12 p-0">
                                    <a href="{{route('unit.page',$unit->id)}}">
                                        <img src="{{$unit->image}}" class="item-pic" alt="{{$unit->id}}-unit-image" />
                                    </a>
                                </div>
                                <div class="col-sm-8 col-12 p-0">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center p-3">
                                            <div class="col-sm-8 col-8 mt-2 p-0">
                                                <h5 class="ovak-font green-color">{{$unit->name}}</h5>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <a href="{{route('developer.page',$unit->project->developer->slug)}}">
                                                    <img src="{{$unit->project->developer->image}}" class="img-fluid" alt="{{$unit->project->developer->image}}-unit-developer-image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="padding-bottom-xs">
                                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$unit->project->district->name}}</span></div>
                                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$unit->unitType->name ?? ""}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 unit-show column text-direction my-3">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 col-12 p-0">
                                    <a href="{{route('unit.page',$unit->id)}}">
                                        <img src="{{$unit->image}}" class="item-pic" alt="{{$unit->id}}-unit-image" />
                                    </a>
                                </div>
                                <div class="col-sm-8 col-12 p-0">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center p-3">
                                            <div class="col-sm-8 col-8 mt-2 p-0">
                                                <h5 class="ovak-font green-color">{{$unit->name}}</h5>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <a href="{{route('developer.page',$unit->project->developer->slug)}}">
                                                    <img src="{{$unit->project->developer->image}}" class="img-fluid" alt="{{$unit->project->developer->image}}-unit-developer-image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="padding-bottom-xs">
                                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$unit->project->district->name}}</span></div>
                                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$unit->unitType->name ?? ""}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 unit-show column text-direction my-3">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 col-12 p-0">
                                    <a href="{{route('unit.page',$unit->id)}}">
                                        <img src="{{$unit->image}}" class="item-pic" alt="{{$unit->id}}-unit-image" />
                                    </a>
                                </div>
                                <div class="col-sm-8 col-12 p-0">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center p-3">
                                            <div class="col-sm-8 col-8 mt-2 p-0">
                                                <h5 class="ovak-font green-color">{{$unit->name}}</h5>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <a href="{{route('developer.page',$unit->project->developer->slug)}}">
                                                    <img src="{{$unit->project->developer->image}}" class="img-fluid" alt="{{$unit->project->developer->image}}-unit-developer-image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="padding-bottom-xs">
                                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$unit->project->district->name}}</span></div>
                                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$unit->unitType->name ?? ""}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 unit-show column text-direction my-3">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 col-12 p-0">
                                    <a href="{{route('unit.page',$unit->id)}}">
                                        <img src="{{$unit->image}}" class="item-pic" alt="{{$unit->id}}-unit-image" />
                                    </a>
                                </div>
                                <div class="col-sm-8 col-12 p-0">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center p-3">
                                            <div class="col-sm-8 col-8 mt-2 p-0">
                                                <h5 class="ovak-font green-color">{{$unit->name}}</h5>
                                            </div>
                                            <div class="col-sm-3 col-4">
                                                <a href="{{route('developer.page',$unit->project->developer->slug)}}">
                                                    <img src="{{$unit->project->developer->image}}" class="img-fluid" alt="{{$unit->project->developer->image}}-unit-developer-image" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="padding-bottom-xs">
                                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$unit->project->district->name}}</span></div>
                                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$unit->unitType->name ?? ""}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@if(!Auth::check()) 
<div class="text-center margin-top-25"><a class="ovak-button white-color consult" id="show">{{__('front.actions.show_more')}}</a></div>
@endif
<section id="developers" class="developers mt-5">
    <div class="container">
        <div class="col-sm-12 text-direction">
            <h2 class="section-first-header">
                <span>{{__('front.home.developers.projects')}}</span>
                <span class="header-line"></span>
            </h2>
            <h2 class="section-second-header letter-spacing">{{__('front.home.developers.developers')}}</h2>
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
@endsection