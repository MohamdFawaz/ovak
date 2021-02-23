<section class="footer mt-5">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-4 p-0 d-sm-block d-none white-background footer-img">
                <div class="footer-image-decoration"></div>
                <img class="img-fluid" src="{{asset('static/assets/images/footer-logo.png')}}" alt="" />
            </div>
            <div class="col-sm-8">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="footer-links w-100">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4">
                                        <h5>{{__('front.footer.menus.home.home')}}</h5>
                                        <div class="gold-border-bottom col-sm-7"></div>
                                        <ul>
                                            <li><a href="{{url('/')}}#filter">{{__('front.footer.menus.home.filter')}}</a></li>
                                            <li><a href="{{url('/')}}#vision">{{__('front.footer.menus.home.vision_and_mission')}}</a></li>
                                            <li><a href="{{url('/')}}#projects">{{__('front.footer.menus.home.projects')}}</a></li>
                                            <li><a href="{{url('/')}}#subscription">{{__('front.footer.menus.home.subscription')}}</a></li>
                                            <li><a href="{{url('/')}}#developers">{{__('front.footer.menus.home.developers')}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <h5>{{__('front.footer.menus.projects.projects')}}</h5>
                                        <div class="gold-border-bottom col-sm-7"></div>
                                        <ul>
                                            <li><a href="{{route('projects.list')}}#projects">{{__('front.footer.menus.projects.projects')}}</a></li>
                                            <li><a href="{{route('projects.list')}}#developers">{{__('front.footer.menus.home.developers')}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <h5>{{__('front.footer.menus.home.developers')}}</h5>
                                        <div class="gold-border-bottom col-sm-7"></div>
                                        <ul>
                                            <li><a href="{{route('developers.list')}}#developers">{{__('front.footer.menus.home.developers')}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <h5>{{__('front.header.inner_header.consultancy.consultancy')}}</h5>
                                        <div class="gold-border-bottom col-sm-7"></div>
                                        <ul>
                                            <li><a href="{{route('consultancy')}}#consult">{{__('front.footer.menus.consultancy.consult')}}</a></li>
                                            <li><a href="{{route('consultancy')}}#install">{{__('front.footer.menus.consultancy.installments')}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <h5>{{__('front.footer.menus.about_us.about_us')}}</h5>
                                        <div class="gold-border-bottom col-sm-7"></div>
                                        <ul>
                                            <li><a href="{{route('about')}}#vision">{{__('front.footer.menus.about_us.out_vision')}}</a></li>
                                            <li><a href="{{route('about')}}#service">{{__('front.footer.menus.about_us.our_services')}}</a></li>
                                            <li><a href="{{route('about')}}#contact">{{__('front.footer.menus.about_us.contact_us')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-direction w-100">
                            <div class="col-sm-12 social-links">
                                <h5>{{__('front.footer.menus.follow_us')}}</h3>
                                <ul class="p-0">
                                    <li class="p-0"><a href="{{config('settings.instagram_link')}}" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="px-2"><a href="{{config('settings.facebook_link')}}" class="facebook"><i class="fab fa-facebook" aria-hidden="true"> </i></a></li>
                                    <li class="px-2"><a href="{{config('settings.twitter_link')}}" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="p-0"><a href="{{config('settings.whatsapp_link')}}" class="whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 margin-top-25">
                                <h5>{{__('front.footer.menus.market_news')}}</h3>
                                <p>{{__('front.footer.menus.join_mail_listing')}}<span class="gold-color"></span></p>
                            </div>
                            <div class="col-sm-5 col-12 margin-top-25">
                                <div class="subscription-input">
                                    <form>
                                        <input class="border" type="email" placeholder="{{__('front.home.subscription.enter_email_placeholder')}}" required />
                                        <button type="button" class="subscription-button h-100">{{__('front.home.subscription.subscribe_button')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block col-12 mt-5 d-sm-none white-background footer-img">
                <div class="footer-image-decoration"></div>
                <img class="" src="{{asset('static/assets/images/footer-logo.png')}}" alt="" />
            </div>
        </div>
    </div>
    <div class="col-sm-12 no-padding copy-right">
        <h5>{{__('front.footer.menus.Copyrights',['year' => date('Y')])}}</h5>
    </div>
</section>
@include('web.partials.modals')

<script src="{{asset('static/assets/scripts/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('static/assets/scripts/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/assets/scripts/js/navbar.js')}}"></script>
<script src="{{asset('static/assets/scripts/js/select.js')}}"></script>
<script src="{{asset('static/assets/scripts/js/slick.min.js')}}"></script>
<script src="{{asset('static/assets/scripts/js/navbar.js')}}"></script>
<script src="{{asset('static/assets/scripts/js/scripts.js?v=1.2')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
@yield('js')
<script>
    var loginUri = "{{route('user.login')}}"
    var registerUri = "{{route('user.register')}}"
    var logUserCalculationUri = "{{route('user.logCalculation')}}"
    var logUserAskingUri = "{{route('user.logAsking')}}"
    var forgotPasswordUri = "{{route('user.forgotPassword')}}"
    var verifyCodeUri = "{{route('user.verifyCode')}}"
    var consultFormUri = "{{route('submit.consultancy')}}"
    var isAuthenticated = "{{Auth::check()}}"
</script>
</body>
</html>
