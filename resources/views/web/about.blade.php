@extends('web.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
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
    @include('web.partials.inner_pages_header')

    <section id="vision" class="about-ovak margin-top-75">
        <div class="container">
            <p class="details-paragraph">AN EGYPTIAN-based company, <span class="gold-color">OVAK</span> facilitates the process of becoming a property advisor for those passionate to join the business, hassle-free. We provide the opportunity for anyone, whether specialized in the real estate industry or not, to gain access to a network of over 35 of Egypt's real estate powerhouses, which we've partnered up with.</p>
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding-xs margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>Our</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>Vision</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
            <p class="details-paragraph">
                Our individual user's rights are protected and exercised, creating a safe environment to practice the trade without any time restrictions, while also offering the highest commission in the market. And the best part: no previous real-estate experience is required!
            </p>
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding-xs margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>Our</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>Mission</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
            <p class="details-paragraph">
                Trust, Relationships & Integrity,
                Sharing knowledge people can confidently find high-quality content on
                real estate topics, Setting the gold standard in real estate services, with consistently deliver professional services. We have Selective, engaging agents
                who are providing & promoting exceptional services, and thereby earning the stamp of approval.
            </p>
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
                            <span class="white-color">We provide the perfect service for</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-6 no-padding mobile-margin-top-50">
                        <div class="col-sm-12 no-padding">
                            <div class="col-md-2 col-sm-3 green-color no-padding"><div class="about-icon-design"><i class="fas fa-comments"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <p>Consultant Service</p>
                                <p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo</p>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="col-md-2 col-sm-3 no-padding green-color"><div class="about-icon-design"><i class="fas fa-home"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <p>Properties Management</p>
                                <p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="col-md-2 col-sm-3 no-padding green-color"><div class="about-icon-design"><i class="fas fa-shopping-bag"></i></div></div>
                            <div class="col-sm-9 col-md-10 no-padding white-color about-paragraph">
                                <p>Consultant Service</p>
                                <p>In Aenean purus, pretium sito amet sapien denim consectet sed urna placerat sodales magna leo</p>
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
                <span class="white-color">We provide the perfect service for</span>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="contact-background">
            <div class="container white-color contact-display">
                <div class="col-sm-6 col-xs-12 margin-top-50 margin-bottom-50">
                    <h4 class="ovak-font">Ovak</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="margin-top-75">
                        <div class="col-sm-8 no-padding">
                            <div><i class="fas fa-2x fa-map-marker-alt"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10"><p>601 , Al Narges - 5th Compound - New Cairo - Cairo - Egypt</p></div>
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
                            <div class="col-sm-10 no-padding margin-top-10"><p>Sun-Thrthay 8AM-6PM</p></div>
                        </div>
                        <div class="col-sm-4 no-padding">
                            <div><i class="fas fa-2x fa-phone-alt"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10"><a class="white-color" href="tel:0201110006466">020111 000 6466</a></div>
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
