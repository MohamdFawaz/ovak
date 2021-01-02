@extends('web.ar.layout')
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
    @include('web.ar.partials.inner_header')
    <section id="filter" class="ovak-filter">
        <div class="container">
            <div class="filter-label col-md-2 col-md-push-5 col-sm-push-5 col-xs-3 col-xs-push-4">
                <span>إبحث عن عقارك</span>
            </div>
            <div class="filter-body box-shadow">
                <form action="{{route('filter')}}" method="get">
                    <div class="margin-top-50 filter-select">
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="border-right border-right-md border-right-sm">
                                <div class="custom-select">
                                    <select name="project_type">
                                        <option value="">نوع المشروع</option>
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
                                        <option value="">الموقع</option>
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
                                        <option value="">الشركة المطورة</option>
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
                                        <option value="">نوع التشطيب</option>
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
                                        <option value="">نوع الوحدة</option>
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
                                        <option value="0">تاريخ التسليم</option>
                                        <option value="1">2021</option>
                                        <option value="2">2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-range">
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control float-right">
                                <label class="gold-color filter-label-text"> نطاق الاسعار</label>
                                <div class="">
                                    <div class="input-type">
                                        <input type="text" name="price-range">
                                        <span class="gold-color"><i class="fa fa-arrow-left"></i></span>
                                        <input type="text" name="prince-range">
                                        <span class="gold-color">/ جم </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control float-right">
                                <label class="gold-color filter-label-text"> نطاق المساحة</label>
                                <div class="">
                                    <div class="input-type">
                                        <input type="text" name="prince-range">
                                        <span class="gold-color"><i class="fa fa-arrow-left"></i> </span>
                                        <input type="text" name="prince-range">
                                        <span class="gold-color">/ متر<sup>2</sup> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="filter-button">
                        <div class="col-sm-11 col-xs-6 no-padding-xs float-right">
                            <input type="submit" class="ovak-button float-left" value="بحث">
                        </div>
                        <div class="hidden-lg hidden-sm hidden-md col-xs-6 margin-top-10 no-padding-xs text-left">
                            <a id="show" class="gold-color"><i class="fa fa-plus"> </i> شاهد المزيد </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="vision" class="home-vision">
        <div class="col-sm-12 no-padding">
            <div class="col-sm-6 col-xs-12 no-padding vision-water-mark">
                <div class="vision-img-show">
                    <div class="col-lg-9 col-lg-push-1 col-md-11 col-md-push-1 col-xs-12 vision-text">
                        <h2 class="section-first-header"><span>نحن نجد لك </span><span class="header-line"></span></h2>
                        <div class="clearfix"></div>
                        <h2 class="section-second-header no-padding">الإختيار الأمثل</h2>
                        <div class="clearfix"></div>
                        <p class="vision-paragraph">
                            كل ما عليك هو أن تختار الوحده التي تحلم بها و استشرنا، و سوف ندرس
                            جميع متطلباتك بعناية و إهتمام و نعطيك أنسب الإختيارات لتختار من بينها
                            وحدة أحلامك.
                        </p>
                        <div class="margin-top-50"><a href="{{route('about')}}" class="ovak-button">مهمتنا و رؤيتنا</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 no-padding"><img class="image-full-width" src="{{asset('images/home-vision.png')}}" alt="" /> </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <div class="clearfix"></div>
    <section id="projects" class="projects long-slider">
        <div class="col-sm-12">
            <div class="no-padding-xs float-right text-right">
                <h2 class="section-first-header"><span>المشروعات </span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>المميزة</span> <span class="header-line"></span></h2>
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
                            <a href="{{route('projects.list')}}" class="ovak-button">شاهد المزيد <i class="fa fa-arrow-left"></i></a><!--link le el project-->
                        </div>
                        <div class="clearfix"></div>
                        <div class="slider-body ">
                            <div class="col-sm-12">
                                <h4 class="project-name green-color" style="float:left; margin-top:10px;">{{$project->name}}</h4>
                                <a href="{{route('developer.page',$project->developer->slug)}}">
                                    <img src="{{$project->image}}" style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid #B7893D; float:right;"/>
                                </a>
                                <div class="clearfix"></div>
                                <div class="slider-list-text">
                                    <div><span>{{$project->district->name}}</span><span class="gold-color"> :المنطقه</span></div>
                                    <div><span>{{$project->propertyType->name}}</span><span class="gold-color"> :نوع العقار</span></div>
                                    <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> {{$project->address}}</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a href="{{route('projects.list')}}" class="ovak-button">عرض جميع المشروعات</a></div>
    </section>
    <div class="clearfix"></div>
    <div class="margin-top-75"></div>
    <section id="subscription" class="subscription">
        <div class="col-sm-12">
            <div class="col-lg-4 col-md-5 col-sm-6"><img src="{{asset('images/subscribe.png')}}" class=" image-full-width" alt="" /></div>
            <div class="col-md-6 col-md-push-1 col-sm-6 margin-top-100">
                <h2 class="section-second-header"><span>إشترك لمعرفة</span><span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-first-header bold no-padding">أخبار سوق العقارات</h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12 no-padding">
                    بضغطة واحده، ستصلك أحدث أخبار سوق العقارات المحلي و احدث
                    العروض المتاحة.
                </p>
                <div class="clearfix"></div>
                <div class="margin-top-50"></div>
                <div class="subscription-input col-md-6 col-sm-10 col-xs-12 no-padding">
                    <form>
                        <input type="email" maxlength="40" placeholder="ادخل البريد الألكتروني" required />
                        <button class="subscription-button" type="submit">اشترك</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="developers" class="developers">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-xs-12 text-right float-right">
                <h2 class="section-first-header"><span>المطورين</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>العقاريين</span></h2>
                <div class="clearfix"></div>
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
        <div class="text-center margin-top-75"><a href="{{route('developers.list')}}" class="ovak-button">عرض جميع المطورين العقاريين</a></div>
    </section>
@endsection
