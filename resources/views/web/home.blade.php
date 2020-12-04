@extends('web.layout')

@section('content')
    @include('web.partials.inner_header',['innerContent' => '<div class="consultancy-square">
        <span class="square-acc"></span>
        <span class="white-color">RELAX & LET</span>
        <span class="gold-color ovak">OVAK</span>
        <span class="white-color">DO THE REST.</span>
        <span class="consultany margin-top-10">CONSULTANCY</span>
        <span class="consultany margin-bottom-10">SERVICE</span>
        <a href="counsultancy.html"><span class="consultancy-square-link">LEARN MORE</span></a>
    </div>'])
    <section id="filter" class="ovak-filter">
        <div class="container">
            <div class="filter-label col-md-2 col-md-push-5 col-sm-push-4 col-xs-3 col-xs-push-2">
                <span>SEARCH FOR YOUR POROPERTY</span>
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
                                        <span class="gold-color">/ EGP </span>
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
                        <h2 class="section-first-header header-letter-spacing"><span>we find you</span><span class="header-line"></span></h2>
                        <div class="clearfix"></div>
                        <h2 class="section-second-header letter-spacing no-padding">the perfect choice</h2>
                        <div class="clearfix"></div>
                        <p class="vision-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <div class="margin-top-50"><a href="about.html" class="ovak-button">Mission & Vision</a></div>
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
                <h2 class="section-first-header letter-spacing"><span class="col-sm-6">featured</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>projects</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12">Discover how much the latest properties have been sold for</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="variable slider">
            <div class="slider-item">
                @foreach($projects as $project)
                <a href="{{route('projects.page',$project->id)}}">
                    <!--link lel project-->
                    <div class="slider-image slider-ovarlay">
                        <img class="img-height" src="{{$project->image}}" alt="" />
                        <a href="{{route('projects.list')}}" class="ovak-button">{{__('front.actions.show_more')}}<i class="fa fa-arrow-right"></i></a><!--link le el project-->
                    </div>
                    <div class="slider-body">
                        <div class="col-sm-12">
                            <div class="col-sm-6 col-xs-8 no-padding">
                                <h4 class="project-name green-color">Palm Hills</h4>
                            </div>
                            <div class="col-sm-2 no-padding col-xs-3 developer-icon">
                                <a href="{{route('developer.page',$project->developer->slug)}}">
                                    <!--link lel develeoper-->
                                    <img src="{{$project->developer->image}}" alt="" />
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="slider-list-text">
                                <div><span class="gold-color">{{__('front.projects.district')}} :</span><span>{{$project->district->name}}</span></div>
                                <div><span class="gold-color">{{__('front.projects.property_type')}} :</span><span>{{$project->propertyType->name}}</span></div>
                                <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span>{{$project->address}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a href="{{route('projects.list')}}" class="ovak-button">{{__('front.title.view_all_projects')}}</a></div>
    </section>
    <div class="clearfix"></div>
    <div class="margin-top-75"></div>
    <section id="subscription" class="subscription">
        <div class="col-sm-12">
            <div class="col-md-6 col-md-push-1 col-sm-6 margin-top-100">
                <h2 class="section-second-header header-letter-spacing"><span>subscripe</span><span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-first-header bold letter-spacing no-padding">market news</h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12 no-padding">Get notifications about marketplace, updates and latest offers post.</p>
                <div class="clearfix"></div>
                <div class="margin-top-50"></div>
                <div class="subscription-input col-md-6 col-sm-10 no-padding">
                    <form>
                        <input type="email" maxlength="40" placeholder="Enter Your E-mail" required />
                        <button class="subscription-button" type="submit">subscribe</button>
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
                <h2 class="section-first-header"><span>projects</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header letter-spacing"><span class="col-sm-6">developers</span></h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="slider-background">
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
        <div class="text-center margin-top-75"><a href="{{route('developers.list')}}" class="ovak-button">View all developers</a></div>
    </section>
@endsection
