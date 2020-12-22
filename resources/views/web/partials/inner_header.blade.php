<section class="header">
    <div class="home-header-image">
        <div class="menu">
            <div class="logo col-sm-3 col-sm-push-1 col-xs-5">
                <a href="{{url('/')}}"><img src="{{asset('web/images/logo.png')}}" class="image-full-width" alt="Logo" /></a>
            </div>
            <div class="menu-list col-md-9 hidden-sm hidden-xs">
                <div class="menu-list-centere col-md-7 col-sm-6">
                    <ul>
                        <li class="active"><a href="{{url('/')}}">{{__('front.header.home')}}</a></li>
                        <li><a href="{{route('projects.list')}}">{{__('front.header.projects')}}</a></li>
                        <li><a href="{{route('developers.list')}}">{{ __('front.header.developers') }}</a></li>
                        <li><a href="{{route('about')}}">{{__('front.header.about_contact')}}</a></li>
                        <li><a href="{{route('consultancy')}}">{{__('front.header.consultancy')}}</a></li>
                    </ul>
                </div>
                <div class="col-md-5 menu-list-right col-sm-6">
                    <ul>
                        @if(Auth::check())
                            <li class="not-link"><i class="fa fa-user-o" aria-hidden="true"></i><a class=""> {{Auth::user()->name}}</a></li>
                            <li class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i><a href="#"> {{__('front.header.logout')}}</a></li>
                        @else
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+20 103 079 6861"> +20 103 079 6861</a></li>
                            <li class="login"><i class="fa fa-user-o" aria-hidden="true"></i><a href="javascript:void(0)"> {{__('front.header.login')}}</a></li>
                        @endif
                        <li><i class="fa fa-globe" aria-hidden="true"></i><a href="./index-ar.html"> العربية</a></li>
                    </ul>
                </div>
            </div>
            <div class="hidden-md hidden-lg col-sm-8 col-xs-5 nav-button">
                <a id="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
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
                                <a href="https://twitter.com/OVAK48555581" target="_blank" class="col-sm-3 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <div class="clearfix"></div>
                                <div class="side-menu-border"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <ul>
                                <li><a href="tel:+20 103 079 6861" class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> +20 103 079 6861 </a></li>
                                <li class="login"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a></li>
                                <li><a href="./index-ar.html"><i class="fa fa-globe" aria-hidden="true"></i> العربية</a></li>
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
        <span class="calculator-link"><a href="{{route('consultancy')}}"> Calculate Your installments</a></span>
    </div>
    @yield('post_header_content')
    {!! $innerContent ?? "" !!}
</section>
