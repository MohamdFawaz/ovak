@extends('web.en.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection

@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.about')}}</title>
@endsection

@section('pre_header_content')
    <div class="header-text">
        <div class="secondery-page-header-ovarlay">
            <h2 class="white-color header-letter-spacing">{{__('front.header.about')}}</h2>
            <h2 class="green-color">{{__('front.head.title.name')}} <span class="header-line"></span></h2>
        </div>
    </div>
@endsection

@section('content')
    @include('web.en.partials.inner_pages_header')

    <section id="vision" class="about-ovak margin-top-75">
        <div class="container">
            <div class="details-paragraph"><span class="gold-color">OVAK</span>{{__('front.about.about_section')}}</div>
            <div class="col-sm-6 col-xs-4 col-sm-push-3 text-center">
                <hr class="gold-border-bottom margin-top-25"/>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>Our</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>Vision</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="details-paragraph">{{__('front.about.our_vision_1')}} <span class="gold-color">{{__('front.about.slogan')}}</span> {{__('front.about.our_vision_2')}}</div>
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>Our</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>Mission</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
            <p class="details-paragraph">{{__('front.about.our_mission')}}</p>
        </div>
    </section>
    <section id="service" class="about-service">
        <div class="service-background">
            <div class="service-details margin-top-75">
                <div class="container">
                    <div class="service-details-header col-sm-6">
                        <div class="col-md-8 col-sm-10 col-xs-12 no-padding-xs margin-top-50">
                            <h2 class="section-first-header letter-spacing"><span>Our</span> <span class="header-line"></span></h2>
                            <div class="clearfix"></div>
                            <h2 class="section-second-header ovak-font letter-spacing"><span class="white-color">Services</span></h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-6 no-padding mobile-margin-top-50">
                        <div class="col-sm-12 no-padding">
                            <div class="col-md-2 col-sm-3 green-color margin-top-10 no-padding"><div class="about-icon-design"><i class="fas fa-comments"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <h4 class="gold-color">Consultation Service</h4>
                                <p>We provide you the precise consultation for your choice with our variable advanced knowledge to meet your exact needs.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="col-md-2 col-sm-3 margin-top-10 no-padding green-color"><div class="about-icon-design"><i class="fas fa-filter"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <h4 class="gold-color">Units Filter</h4>
                                <p>We expedite for you the searching process for the perfect unit you dream of, amongst the widest range of the biggest developers in the market.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="col-md-2 col-sm-3 margin-top-10 no-padding green-color"><div class="about-icon-design"><i class="fas fa-calculator"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <h4 class="gold-color">Installments Calculation</h4>
                                <p>With our installments calculator, you can easily calculate the installments of the unit you choose either; semi-annually, quarterly or monthly, and you'll have all the results right away.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="col-md-2 col-sm-3 margin-top-10 no-padding green-color"><div class="about-icon-design"><i class="fas fa-calendar-check"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <h4 class="gold-color">Booking Service</h4>
                                <p>We provide the booking option, by clicking <span class="bold gold-color">&nbsp; ASK NOW</span> and one of our agents will contact you in the soonest time to set a direct appointment with the developer of your chosen unit. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="contact" class="contact-us">
        <div class="container">
            <div class="col-md-8 col-sm-8 col-xs-12 no-padding-xs margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>Contact</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header ovak-font letter-spacing"><span>US</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="contact-background">
            <div class="container white-color contact-display">
                <div class="col-sm-6 col-xs-12 margin-top-50 margin-bottom-50">
                    <div class="margin-top-25">
                        <div class="col-sm-8 no-padding">
                            <div><i class="fas fa-2x fa-map-marker-alt"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10"><p>601 , Al Narges - 5th Settlement - New Cairo - Cairo - Egypt</p></div>
                        </div>
                        <div class="col-sm-4 no-padding">
                            <div><i class="far fa-2x fa-envelope"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10"><a class="white-color" href="mailto: info@ovakestate.com">info@ovakestate.com</a></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top-75">
                        <div class="col-sm-8 no-padding">
                            <div><i class="far fa-2x fa-clock"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10"><p>Sun-Thu 8AM-6PM</p></div>
                        </div>
                        <div class="col-sm-4 no-padding">
                            <div><i class="fas fa-2x fa-phone-alt"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10"><a class="white-color" href="tel:0201030796861">0201030796861</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 margin-top-50 margin-bottom-50">
                    <div class="contact-form">
                        <form method="post" action="{{route('contact')}}">
                            {{method_field('post')}}
                            {{csrf_field()}}
                            <input type="text" name="name" placeholder="Name" required />
                            <input type="email" name="email" placeholder="Email" required />
                            <input type="tel" name="phone" placeholder="Phone Number" required />
                            <textarea placeholder="Message" name="message"></textarea>
                            <div class="clearfix"></div>
                            <div class="col-sm-4 no-padding"><button type="submit" class="ovak-dark-button">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
