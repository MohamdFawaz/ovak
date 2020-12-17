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
        <span class="consultany margin-top-10">{{strtoupper(__('front.home.consultancy'))}}</span>
        <span class="consultany margin-bottom-10">{{strtoupper(__('front.home.service'))}}</span>
        <a href="{{route('consultancy')}}"><span class="consultancy-square-link">{{strtoupper(__('front.home.learn_more'))}}</span></a>
    </div>
@endsection
@section('content')
    @include('web.partials.inner_header')
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
                                        <option value="0">Delivery date</option>
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
                                        <span class="gold-color"><i class="fa fa-arrow-right"></i></span>
                                        <input type="text" name="prince-range">
                                        <span class="gold-color">/ {{__('front.consultancy.installment.form.currency')}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <label class="gold-color filter-label-text">Area Range</label>
                                <div class="">
                                    <div class="input-type">
                                        <input type="text" name="prince-range">
                                        <span class="gold-color"><i class="fa fa-arrow-right"></i> </span>
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
    <section id="vision" class="home-vision">
        <div class="col-sm-12 no-padding">
            <div class="col-sm-6 col-xs-12 no-padding"><img class="image-full-width" src="{{asset('web/images/home-vision.png')}}" alt="" /> </div>
            <div class="col-sm-6 col-xs-12 no-padding vision-water-mark">
                <div class="vision-img-show">
                    <div class="col-lg-9 col-lg-push-1 col-md-11 col-md-push-1 col-xs-12 vision-text">
                        <h2 class="section-first-header header-letter-spacing"><span>{{__('front.home.vision.we_find_you')}}</span><span class="header-line"></span></h2>
                        <div class="clearfix"></div>
                        <h2 class="section-second-header letter-spacing no-padding">{{__('front.home.vision.the_perfect_choice')}}</h2>
                        <div class="clearfix"></div>
                        <h4 class="vision-paragraph"><span class="gold-color">{{__('front.home.vision.description_gold')}}</span>
                            <span>{{__('front.home.vision.description_gray')}}</span>
                            </h4>
                        <h4 class="black-color">{{__('front.home.vision.description')}} </h4>
                        <div class="margin-top-50"><a href="{{route('about')}}" class="ovak-button">{{__('front.home.vision.mission_and_vision')}}</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <div class="clearfix"></div>
    <section id="projects" class="projects long-slider">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-md-4 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-12 no-padding-xs">
                <h2 class="section-second-header"><span>{{__('front.home.project.projects')}}</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
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
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a href="{{route('projects.list')}}" class="ovak-button">{{__('front.title.view_all_projects')}}</a></div>
    </section>
    <div class="clearfix"></div>
    <div class="margin-top-75"></div>
    <section id="subscription" class="subscription">
        <div class="col-sm-12">
            <div class="col-md-6 col-md-push-1 col-sm-6 margin-top-100">
                <h2 class="section-second-header header-letter-spacing"><span>{{__('front.home.subscription.subscribe')}}</span><span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-first-header bold letter-spacing no-padding">{{__('front.home.subscription.market_news')}}</h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12 no-padding">{{__('front.home.subscription.title')}}</p>
                <div class="clearfix"></div>
                <div class="margin-top-50"></div>
                <div class="subscription-input col-md-6 col-sm-10 no-padding">
                    <form>
                        <input type="email" maxlength="40" placeholder="Enter Your E-mail" required />
                        <button class="subscription-button bold" type="submit">{{__('front.home.subscription.subscribe')}}</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-sm-pull-1"><img src="{{asset('img/subscribe.png')}}" class=" image-full-width" alt="" /></div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="developers" class="developers">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-lg-4 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-xs-12 no-padding-xs">
                <h2 class="section-first-header"><span>{{__('front.home.developers.projects')}}</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header letter-spacing">{{__('front.home.developers.developers')}}</h2>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="slider-background margin-top-25">
            <div class="variable slider">
                @foreach($development_companies as $company)
                <div class="slider-item">
                    <a href="./single-developer.html">
                        <!--link lel developer-->
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
