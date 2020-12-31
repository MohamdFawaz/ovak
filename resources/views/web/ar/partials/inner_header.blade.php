<section class="header">
    <div class="home-header-image">
        <div class="menu">
            <div class="menu-list col-md-10 hidden-sm hidden-xs">
                <div class="col-md-5 menu-list-right col-sm-6">
                    <ul>
                        @if(Auth::check())
                            <li>class="phone"><i class="fa fa-user-o" aria-hidden="true"></i> {{Auth::user()->name}}</li>
                            <li class="logout"><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل الخروج</a></li>
                        @else
                            <li><a href="tel:01154474317"> 01154474317</a> <i class="fa fa-phone" aria-hidden="true"></i></li>
                            <li class="login"><a href="#"> تسجيل الدخول</a> <i class="fa fa-user-o" aria-hidden="true"></i></li>
                        @endif
                        <li><a href="index.html"> English</a> <i class="fa fa-globe" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="menu-list-centere col-md-7 col-sm-6">
                    <ul>
                        <li class="active"><a href="{{url('/')}}">{{__('front.header.home')}}</a></li>
                        <li><a href="{{route('projects.list')}}">{{__('front.header.projects')}}</a></li>
                        <li><a href="{{route('developers.list')}}">{{ __('front.header.developers') }}</a></li>
                        <li><a href="{{route('about')}}">{{__('front.header.about_contact')}}</a></li>
                        <li><a href="{{route('consultancy')}}">{{__('front.header.consultancy')}}</a></li>
                    </ul>
                </div>
            </div>

            <div class="hidden-md hidden-lg col-sm-8 col-xs-5 float-left nav-button">
                <a id="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="logo col-md-2 col-sm-3 col-xs-5">
                <a href="{{url('/')}}"><img src="{{asset('web/images/logo.png')}}" class="image-full-width" alt="" /></a>
            </div>
            <div>
                <div class="col-sm-4 col-xs-7 mobile-menu display-none">
                    <div class="mobile-links">
                        <img class="mobile-menu-logo" src="{{asset('web/images/logo.png')}}" alt="" />
                        <div class="col-sm-12">
                            <ul>
                                <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> {{__('front.header.home')}}</a></li>
                                <li><a href="{{route('projects.list')}}"><i class="fa fa-building-o" aria-hidden="true"></i>
                                        {{__('front.header.projects')}}</a></li>
                                <li><a href="{{route('developers.list')}}"><i class="fa fa-users" aria-hidden="true"></i> {{ __('front.header.developers') }}</a></li>
                                <li><a href="{{route('about')}}"><i class="fa fa-address-card" aria-hidden="true"></i>
                                        {{__('front.header.about_contact')}}</a></li>
                                <li><a href="{{route('consultancy')}}"><i class="fa fa-question" aria-hidden="true"></i>
                                        {{__('front.home.consultancy')}}</a></li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <div class="col-sm-12">
                                <a href="https://www.facebook.com/ovakestate" target="_blank" class="col-sm-3 facebook"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                                <a href="https://www.instagram.com/ovakestate/" target="_blank" class="col-sm-3 instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/OVAK48555581" target="_blank" class="col-sm-3"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <div class="clearfix"></div>
                                <div class="side-menu-border"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <ul>
                                @if(Auth::check())
                                    <li>class="phone"><i class="fa fa-user-o" aria-hidden="true"></i> {{Auth::user()->name}}</li>
                                    <li class="logout"><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل الخروج</a></li>
                                @else
                                    <li><a href="tel:01154474317"> 01154474317</a> <i class="fa fa-phone" aria-hidden="true"></i></li>
                                    <li class="login"><a href="#"> تسجيل الدخول</a> <i class="fa fa-user-o" aria-hidden="true"></i></li>
                                @endif
                                <li><a href="index.html"> English</a> <i class="fa fa-globe" aria-hidden="true"></i></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 no-padding menu-background display-none"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="border-bottom"></div>
    </div>
    <div class="links-carrier">
        <span class="calculator"><i class="fa fa-calculator"></i></span>
        <span class="calculator-link"><a href="{{route('consultancy')}}">إحسب أقساطك</a></span>
    </div>
    <div class="consultancy-square">
        <span class="square-acc"></span>
        <span class="white-color">خدمة الاستشارات العقارية</span>
        <span class="gold-color margin-top-10 ovak">OVAK</span>
        <span class="white-color margin-top-10">أفضل اختيار</span>
        <div class="margin-top-10">
            <a href="{{route('consultancy')}}"><span class="consultancy-square-link">اعرف المزيد</span></a>
        </div>
    </div>
</section>

