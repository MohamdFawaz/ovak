<section class="header">
    <div class="clearfix"></div>
    <div class="home-header-image">
        <div class="clearfix"></div>
        @yield('pre_header_content')
        <div class="menu">
            <div class="menu-list col-md-9 hidden-sm hidden-xs">
                <div class="col-md-5 menu-list-right col-sm-6">
                    <ul>
                        @if(Auth::check())
                            <li class="not-link"><i class="fa fa-user-o" aria-hidden="true"></i><a class=""> {{Auth::user()->name}}</a></li>
                            <li class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i><a href="#"> {{__('front.header.logout')}}</a></li>
                        @else
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:01154474317"> 01154474317</a></li>
                            <li class="login" id="login"><i class="fa fa-user-o" aria-hidden="true"></i><a href="javascript:void(0)"> {{__('front.header.login')}}</a></li>
                        @endif
                        <li><i class="fa fa-globe" aria-hidden="true"></i><a href="{{route('change.locale','en')}}"> English </a></li>
                    </ul>
                </div>

                <div class="menu-list-centere col-md-7 col-sm-6">
                    <ul>
                        <li><a href="{{url('/')}}">الرئيسية</a></li>
                        <li @if(strpos(\Request::url(),'projects')) class="active" @endif><a href="{{route('projects.list')}}">{{__('front.header.projects')}}</a></li>
                        <li @if(strpos(\Request::url(),'developers')) class="active" @endif><a href="{{route('developers.list')}}">{{__('front.header.developers')}}</a></li>
                        <li @if(strpos(\Request::url(),'about')) class="active" @endif><a href="{{route('about')}}">{{__('front.header.about_contact')}}</a></li>
                        <li @if(strpos(\Request::url(),'consultancy')) class="active" @endif><a href="{{route('consultancy')}}">{{__('front.header.consultancy')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="logo col-md-2 col-sm-3 col-xs-5">
                <a href="{{url('/')}}"><img src="{{asset('web/images/logo.png')}}" class="image-full-width" alt="" /></a>
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
                                <li><a href="{{url('/')}}">الرئيسية</a></li>
                                <li @if(strpos(\Request::url(),'projects')) class="active" @endif><a href="{{route('projects.list')}}">{{__('front.header.projects')}}</a></li>
                                <li @if(strpos(\Request::url(),'developers')) class="active" @endif><a href="{{route('developers.list')}}">{{__('front.header.developers')}}</a></li>
                                <li @if(strpos(\Request::url(),'about')) class="active" @endif><a href="{{route('about')}}">{{__('front.header.about_contact')}}</a></li>
                                <li @if(strpos(\Request::url(),'consultancy')) class="active" @endif><a href="{{route('consultancy')}}">{{__('front.header.consultancy')}}</a></li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <div class="col-sm-12">
                                <span class="col-sm-1"></span>
                                <a href="#" class="col-sm-3 facebook"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                                <a href="#" class="col-sm-3 instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="col-sm-3 google"><i class="fa fa-google" aria-hidden="true"></i></a>
                                <div class="clearfix"></div>
                                <div class="side-menu-border"></div>
                            </div>
                            <div class="col-sm-12">
                                <span class="col-sm-1"></span>
                                <a href="#" class="col-sm-3 whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"> </i></a>
                                <a href="#" class="col-sm-3 twitter"><i class="fa fa-twitter" aria-hidden="true"> </i></a>
                                <a href="#" class="col-sm-3 youtube"><i class="fa fa-youtube" aria-hidden="true"> </i></a>
                                <div class="clearfix"></div>
                                <div class="side-menu-border"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <ul>
                                <li><a href="tel:01154474317" class="phone"> <i class="fa fa-phone" aria-hidden="true"></i> 0111111111111 </a></li>
                                <li class="login"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a></li>
                                <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Arabic</a></li>
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
</section>
