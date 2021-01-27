<section class="header">
    <div class="home-header-image">
        <nav class="menu navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('static/assets/images/logo.png')}}" class="img-fluid" alt="Logo" /></a>
                <button class="navbar-toggler" id="nav-toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="active" href="{{url('/')}}">{{__('front.header.home')}}</a></li>
                        <li class="nav-item"><a href="{{route('projects.list')}}">{{__('front.header.projects')}}</a></li>
                        <li class="nav-item"><a href="{{route('developers.list')}}">{{ __('front.header.developers') }}</a></li>
                        <li class="nav-item"><a href="{{route('about')}}">{{__('front.header.about_contact')}}</a></li>
                        <li class="nav-item"><a href="{{route('consultancy')}}">{{__('front.header.consultancy')}}</a></li>
                    </ul>
                    <ul class="navbar-nav s-ul ml-auto mb-2 mb-lg-0">
                        @if(Auth::check())
                            <li class="nav-item"><a href="javascript:void(0)">{{Auth::user()->name}}</a></li>
                            <li><i class="fa fa-user-o" aria-hidden="true"></i><a href="{{route('user.logout')}}"> {{__('front.header.logout')}}</a></li>
                        @else
                            <li class="nav-item"><a href="tel:{{config('settings.mobile')}}" class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> {{config('settings.mobile')}} </a></li>
                            <li class="login"><i class="fa fa-user-o" aria-hidden="true"></i><a href="javascript:void(0)"> {{__('front.header.login')}}</a></li>
                        @endif
                        @if(App::getLocale() == 'ar')
                            <li><i class="fa fa-globe" aria-hidden="true"></i><a href="{{route('change.locale', 'en')}}"> English</a></li>
                        @else
                            <li><i class="fa fa-globe" aria-hidden="true"></i><a href="{{route('change.locale','ar')}}"> العربية</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-sm-12 col-xs-12 no-padding menu-background display-none"></div>
        <div class="row">
            <div class="col-12 p-0 mobile-menu display-none text-direction">
                <div class="mobile-links">
                    <div class="mobile-header-logo">
                        <div class="row">
                            <div class="col-6">
                                <img class="mobile-menu-logo" src="{{asset('static/assets/images/logo.png')}}" alt="logo" />
                            </div>
                            <div class="col-6 social-links">
                                <a href="{{config('settings.facebook_link')}}" target="_blank" class="col-sm-3 facebook"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                                <a href="{{config('settings.twitter_link')}}" target="_blank" class="col-sm-3 instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="{{config('settings.twitter_link')}}" target="_blank" class="col-sm-3"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mobile-li">
                        <div class="col-sm-12">
                            <ul>
                                <li><a href="{{url('/')}}">>{{__('front.header.home')}}</a></li>
                                <li><a href="{{route('projects.list')}}">{{__('front.header.projects')}}</a></li>
                                <li><a href="{{route('developers.list')}}">{{ __('front.header.developers') }}</a></li>
                                <li><a href="{{route('about')}}">{{__('front.header.about_contact')}}</a></li>
                                <li><a href="{{route('consultancy')}}">{{__('front.home.consultancy')}}</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <ul>
                                <li><a href="tel:{{config('settings.mobile')}}" class="phone">{{config('settings.mobile')}}</a></li>
                                <li class="login"><a href="javascript:void(0)">{{__('front.header.login')}}</a></li>
                                <li><a href="#" onclick="changeLanguage()">العربية</a></li>
                                @if(App::getLocale() == 'ar')
                                    <li><a href="{{route('change.locale','en')}}">English</a></li>
                                @else
                                    <li><a href="{{route('change.locale','ar')}}">العربية</a></li>
                                @endif
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="links-carrier">
            <span class="calculator"><i class="fa fa-calculator"></i></span>
        </div>
        <div class="links-carrier">
            <span class="calculator"><i class="fa fa-calculator"></i></span>
            <span class="calculator-link"><a href="{{route('consultancy')}}"> {{__('front.header.calculate_your_installments')}}</a></span>
        </div>
        @yield('post_header_content')

    </div>
</section>
