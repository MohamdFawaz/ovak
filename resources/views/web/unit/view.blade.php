@extends('web.layout')
@section('title')
<title>{{__('front.head.title.name')}} | {{$unit->name}}</title>
@endsection

@section('pre_header_content')
<div class="h-75 w-100 d-flex justify-content-center align-items-center">
    <h2 class="section-second-header green-color">{{$unit->project->district->name}}<span class="header-line"></span></h2>
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
<section class="single-unit">
    <section id="filter" class="ovak-filter">
        <div class="container">
            <div class="row">
                <div class="filter-label mx-auto">
                    <span>{{__('front.filter.title')}}</span>
                </div>
            </div>
            <div class="filter-body box-shadow">
                <form action="{{route('filter')}}" method="get" class="mt-5">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="custom-select">
                                <select name="project_type_id">
                                    <option value="" selected="selected">{{__('front.filter.all_project_types')}}</option>
                                    <option value="" selected="selected">{{__('front.filter.all_project_types')}}</option>
                                    @foreach($project_types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="filter-borders">
                                <div class="custom-select">
                                    <select name="district_id">
                                        <option value="">{{__('front.filter.all_district_location')}}</option>
                                        <option value="">{{__('front.filter.all_district_location')}}</option>
                                        @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="custom-select">
                                <select name="development_company_id">
                                    <option value="">{{__('front.filter.all_development_companies')}}</option>
                                    <option value="">{{__('front.filter.all_development_companies')}}</option>
                                    @foreach($development_companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="custom-select">
                                <select name="finishing_type_id">
                                    <option value="">{{__('front.filter.all_finish_types')}}</option>
                                    <option value="">{{__('front.filter.all_finish_types')}}</option>
                                    @foreach($finish_types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="filter-borders">
                                <div class="custom-select">
                                    <select name="unit_type_id">
                                        <option value="">{{__('front.filter.all_unit_types')}}</option>
                                        <option value="">{{__('front.filter.all_unit_types')}}</option>
                                        @foreach($unit_types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="custom-select">
                                <select name="delivery_date">
                                    <option value="">{{__('front.filter.all_delivery_dates')}}</option>
                                    <option value="">{{__('front.filter.all_delivery_dates')}}</option>
                                    @foreach($delivery_dates as $project)
                                    <option value="{{$project->date}}">{{$project->date}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 text-direction">
                            <label class="gold-color filter-label-text">{{__('front.filter.price_range')}}</label>
                            <div class="input-type">
                                <input type="text" name="price_from">
                                <span class="gold-color inner-arrow"></span>
                                <input type="text" name="price_to">
                                <span class="gold-color">/ {{__('front.consultancy.installment.form.currency')}} </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 text-direction">
                            <label class="gold-color filter-label-text">{{__('front.filter.area_range')}}</label>
                            <div class="input-type">
                                <input type="text" name="area_from">
                                <span class="gold-color inner-arrow"></span>
                                <input type="text" name="area_to">
                                <span class="gold-color">/ {{__('front.consultancy.installment.form.metere')}}<sup>2</sup> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="filter-button mb-3">
                            <input type="submit" class="ovak-button" value="{{__('front.filter.search')}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="single-unit">
        <div class="container mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <img src="{{$unit->image}}" class="img-fluid" alt="{{$unit->id}}-unit-image">
                    </div>
                    <div class="col-sm-4">
                        <div class="consultancy-square d-none d-sm-block">
                            <span class="square-acc"></span>
                            <span class="white-color">{{__('front.units.interested')}}</span>
                            <span class="white-color">{{__('front.units.ask_about_this_project_details')}}</span>
                            <a href="#"><span class="ovak-button my-3 ask">{{__('front.units.ask_now')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="container-fluid p-0">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-8 col-sm-7 col-xs-12 p-0">
                            <div class="unit-details-text margin-top-50">
                                <h2 class="gold-color">{{__('front.units.overview')}}</h2>
                                <p class="details-paragraph">
                                    {{$unit->description}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5 col-xs-12 p-0">
                            <div class="side-unit-details mt-5">
                                <div class="details-list">
                                    <div class="container-fluid p-0">
                                        @if(count($unit->property) > 0)
                                        @foreach($unit->property as $property)
                                        <div class="col-12">
                                            <div class="row py-2">
                                                <div class="col-8">
                                                    {{$property->property->name}}
                                                </div>
                                                <div class="col-4 text-direction-reverse">
                                                    {{$property->value}}
                                                </div>
                                            </div>
                                        </div>
                                        @if(!$loop->last)
                                        <div class="white-border-2 w-100 no-padding"></div>
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<div class="container">
    @if($unit->gallery)
    <div class="variable slider project-slider mt-5">
        <div class="slider-item">
            <a href="unit-image.png">
                <div class="slider-image">
                    <img src="unit-image.png" alt="" />
                </div>
            </a>
        </div>
    </div>
    @endif
</div>
@endsection
@section('js')
<script>
    var ProjectMenu = document.getElementsByClassName("project-menu");
    $(document).ready(function() {
        window.onscroll = function() {
            scrollFunction()
        };
        function scrollFunction() {
            if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                $(".project-menu").removeClass("display-none");
            } else {
                $(".project-menu").addClass("display-none");
            }
        }
    });
</script>
@endsection