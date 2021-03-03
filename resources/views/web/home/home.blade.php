@extends('web.layout')
@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.home')}}</title>
@endsection

@section('post_header_content')
    <div class="consultancy-square">
        <span class="square-acc"></span>
        <span class="white-color">{{strtoupper(__('front.home.relax_and_let'))}}</span>
        <span class="gold-color ovak">{{strtoupper(__('front.head.title.name'))}}</span>
        <span class="white-color">{{strtoupper(__('front.home.do_the_rest'))}}</span>
        <span class="consultany mt-2">{{strtoupper(__('front.home.consultancy'))}}</span>
        <span class="consultany mb-2">{{strtoupper(__('front.home.service'))}}</span>
        <a href="{{route('consultancy')}}"><span class="ovak-button">{{strtoupper(__('front.home.learn_more'))}}</span></a>
    </div>
@endsection
@section('content')
    @include('web.partials.inner_header')
    <section id="filter" class="ovak-filter">
        <div class="container">
            <div class="row">
                <div class="filter-label mx-auto">
                    <span>{{__('front.filter.title')}}</span>
                </div>
            </div>
            <div class="filter-body box-shadow">
                <form action="{{route('filter')}}" id="reset_values" method="get" class="mt-5">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                            <div class="custom-select">
                                <select class="clear-cache" name="project_type_id">
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
                                <span class="gold-color">/  {{__('front.consultancy.installment.form.currency')}} </span>
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
                            <input type="submit" onclick="clearform()" class="ovak-button" value="{{__('front.filter.search')}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="vision" class="home-vision mt-5">
        <div class="container-fluid">
            <div class="col-sm-12 p-0">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 p-0">
                        <img class="img-fluid" src="{{asset('web/images/home-vision.png')}}" alt="" />
                    </div>
                    <div class="col-sm-6 vision-img-show d-flex position-relative align-items-center justify-content-center col-xs-12 vision-water-mark p-0">
                        <div class="vision-text text-direction mt-5">
                            <h2 class="section-first-header header-letter-spacing"><span>{{__('front.home.vision.we_find_you')}}</span> <span class="header-line"> </span></h2>
                            <h2 class="section-second-header letter-spacing no-padding">{{__('front.home.vision.the_perfect_choice')}}</h2>
                            <h4 class="font-size-18 arial-font"><span class="gold-color">{{__('front.home.vision.description_gold')}}</span> <span class="gray-color">{{__('front.home.vision.description_gray')}}</span> </h4>
                            <h4 class="font-size-18 arial-font">{{__('front.home.vision.description')}}</h4>
                            <div class="mt-5"><a href="{{route('about')}}" class="ovak-button">{{__('front.home.vision.mission_and_vision')}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects long-slider">
        <div class="container">
            <div class="col-sm-12 mt-5 p-0 text-direction">
                <h2 class="section-first-header letter-spacing">{{__('front.home.project.featured')}}</h2>
                <h2 class="section-second-header"><span>{{__('front.home.project.projects')}}</span> <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="variable slider project-slider mt-5">
            @foreach($projects as $project)
            <div class="slider-item">
                <a href="{{route('projects.page',$project->id)}}">
                    <div class="slider-image slider-ovarlay">
                        <img class="img-height" src="{{$project->image}}" alt="{{$project->id}}'-image'" />
                        <a href="{{route('projects.page',$project->id)}}" class="ovak-button"><span> {{__('front.actions.show_more')}}</span> <span class="inner-arrow white-color"></span></a>
                    </div>
                    <div class="slider-body">
                        <div class="col-sm-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-9 p-0">
                                        <span class="project-name green-color">
                                            {{$project->name}}
                                        </span>
                                    </div>
                                    <div class="col-sm-3 p-0">
                                        <a href="{{route('developer.page',$project->developer->slug)}}">
                                            <img style="width:50px;" src="{{$project->developer->image}}" alt="{{$project->developer->image}}-developer-image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
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
        <div class="text-center margin-top-75"><a href="{{route('projects.list')}}" class="ovak-button">{{__('front.title.view_all_projects')}}</a></div>
    </section>

    <section id="subscription" class="subscription mt-5">
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 margin-top-100">
                        <h2 class="section-second-header header-letter-spacing"><span>{{__('front.home.subscription.subscribe')}}</span> <span class="header-line"></span> </h2>
                        <h2 class="section-first-header bold letter-spacing margin-top-25">{{__('front.home.subscription.market_news')}}</h2>
                        <div><p class="vision-paragraph white-color">{{__('front.home.subscription.title')}}</p></div>
                        <div class="subscription-input p-0 col-md-8 col-sm-10 mt-5">
                            <form action="{{route('subscribe.newsletter')}}" method="post">
                                {{csrf_field()}}
                                {{method_field('post')}}
                                <input type="email" name="email" maxlength="40" placeholder="{{__('front.home.subscription.enter_email_placeholder')}}" required />
                                <button class="subscription-button bold" type="submit">{{__('front.home.subscription.subscribe_button')}}</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 mt-5"><img src="{{asset('static/assets/images/subscribe.png')}}" class="img-fluid" alt="" /></div>
                </div>
            </div>
        </div>
    </section>

    <section id="developers" class="developers mt-5">
        <div class="container">
            <div class="col-sm-12 text-direction">
                <h2 class="section-first-header">
                    <span>{{__('front.home.developers.projects')}}</span>
                    <span class="header-line"></span></h2>
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
