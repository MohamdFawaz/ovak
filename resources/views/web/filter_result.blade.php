@extends('web.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection
@section('content')
    @include('web.partials.inner_pages_header',['innerContent' => ''])
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
            @foreach($units as $unit)
                <div class="col-sm-6 col-xs-12 column ">
                <a href="{{route('unit.page',$unit->id)}}">
                    <!--link lel unit-->
                    <div class="content">
                        <div class="col-sm-4 no-padding">
                            <img class="item-pic" src="{{$unit->image}}" alt="" />
                        </div>
                        <div class="col-sm-8 item-details">
                            <div class="col-sm-6 col-xs-8 no-padding margin-top-10">
                                <h4 class="project-name black-color">{{$unit->name}}</h4>
                            </div>
                            <div class="col-sm-2 no-padding col-xs-3 developer-icon">
                                <a href="{{route('developer.page',$unit->project->developer->slug)}}" target="_blank"><img src="{{$unit->project->developer->image}}" alt="" /></a><!--link lel developer-->
                            </div>
                            <div class="clearfix"></div>
                            <div><span class="gold-color">{{__('front.projects.district')}} :</span><span> {{$unit->project->district->name}}</span></div>
                            <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span> {{$unit->project->propertyType->name}}</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span>{{$unit->project->address}}</span></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
            @endforeach
        </div>
    </section>
    <div class="text-center margin-top-25"><a class="gold-color-hovarable" id="show">Show More</a></div>
    <section id="developers" class="developers">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-lg-4 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-xs-12 no-padding-xs">
                <h2 class="section-first-header"><span>{{__('front.title.projects')}}</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header letter-spacing"><span class="col-sm-6">{{__('front.title.developers')}}</span></h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
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
