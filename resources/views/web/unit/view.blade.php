@extends('web.layout')

@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection

@section('title')
    <title>{{__('front.head.title.name')}} | {{$unit->name}}</title>
@endsection

@section('pre_header_content')
<div class="header-text">
    <div class="secondery-page-header-ovarlay">
        <h2 class="green-color">units <span class="header-line"></span></h2>
    </div>
</div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')

    <section class="single-unit">
        <section id="filter" class="ovak-filter">
            <div class="container">
                <div class="filter-label col-md-2 col-md-push-5 col-sm-push-4 col-xs-3 col-xs-push-2">
                    <span>{{__('front.filter.title')}}</span>
                </div>
                <div class="filter-body box-shadow">
                    <form action="{{route('filter')}}" method="get">
                        <div class="margin-top-50 filter-select">
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <div class="border-right border-right-md border-right-sm">
                                    <div class="custom-select">
                                        <select name="project_type">
                                            <option value="">Project Type</option>
                                            @foreach($project_types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <div class="border-right border-right-md">
                                    <div class="custom-select">
                                        <select name="district">
                                            <option value="">{{__('front.filter.district_location')}}</option>
                                            @foreach($districts as $district)
                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <div class="border-right-sm">
                                    <div class="custom-select">
                                        <select name="development_company">
                                            <option value="">{{__('front.filter.development_company')}}</option>
                                            @foreach($development_companies as $company)
                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <div class="border-right border-right-md">
                                    <div class="custom-select">
                                        <select name="finishing_type">
                                            <option value="">{{__('front.filter.finishing_type')}}</option>
                                            @foreach($finish_types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <div class="border-right border-right-md border-right-sm">
                                    <div class="custom-select">
                                        <select name="project-type">
                                            <option value="">{{__('front.filter.unit_type')}}</option>
                                            @foreach($unit_types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <div class="">
                                    <div class="custom-select">
                                        <select name="project-type">
                                            <option value="0">{{__('front.filter.delivery_date')}}</option>
                                            <option value="1">2021</option>
                                            <option value="2">2022</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-range">
                                <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                    <label class="gold-color filter-label-text">Price Range</label>
                                    <div class="">
                                        <div class="input-type">
                                            <input type="text" name="price-range">
                                            <span class="gold-color"> to </span>
                                            <input type="text" name="prince-range">
                                            <span class="gold-color">/ EGP </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                    <label class="gold-color filter-label-text">Area Range</label>
                                    <div class="">
                                        <div class="input-type">
                                            <input type="text" name="prince-range">
                                            <span class="gold-color"> to </span>
                                            <input type="text" name="prince-range">
                                            <span class="gold-color">/ M<sup>2</sup> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-button">
                            <div class="hidden-lg hidden-sm hidden-md col-xs-6 margin-top-10 text-center">
                                <a id="show" class="gold-color"><i class="fa fa-plus"> </i> More Filters </a>
                            </div>
                            <div class="col-sm-11 col-xs-6">
                                <input type="submit" class="ovak-button float-right" value="{{__('front.filter.search')}}">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="unit-details margin-top-75">
            <div class="container">
                <div class="unit-image col-md-8 col-sm-8 col-xs-12">
                    <img class="image-full-width" src="{{$unit->image}}" />
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="clearfix"></div>
                        <div class="unit-details-text margin-top-50">
                            <h2>{{__('front.units.overview')}}</h2>
                            <p class="details-paragraph">{{$unit->description}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-push-3 col-sm-5 col-sm-push-1">
                        <div class="side-unit-details margin-top-50">
                            <div class="details-list no-padding">
                                @if(count($unit->property) > 0)
                                    @foreach($unit->property as $property)
                                        <div>
                                        <span class="col-xs-8">
                                            <i class="fa {{$property->icon_class}}"></i>
                                            {{$property->key}}
                                        </span>
                                            <span class="col-xs-4 text-right">
                                                {{$property->value}}
                                            </span>
                                            <div class="clearfix"></div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="white-border-2 no-padding"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
    </section>
    <div class="container">
        @if($unit->gallery)
        <div id="ninja-slider">
            <div class="slider-inner">
                <ul>
                    @foreach($unit->gallery as $gallery)
                    <li>
                        <a class="ns-img" href="{{$gallery->image}}"></a>
                    </li>
                    @endforeach
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        @endif
    </div>
    <div class="margin-top-75"></div>
@endsection
