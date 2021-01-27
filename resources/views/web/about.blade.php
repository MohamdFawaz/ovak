@extends('web.layout')


@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.about')}}</title>
@endsection

@section('pre_header_content')
    <div class="h-75 w-100 d-flex justify-content-center align-items-center">
        <div>
            <h4 class="section-first-header white-color header-letter-spacing"><span>{{__('front.about.about')}}</span></h4>
            <h4 class="section-second-header bold letter-spacing">{{__('front.head.title.name')}} <span class="header-line"></span></h4>
        </div>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')
    <section class="about-body my-5">
        <div class="container py-5">
            <div class="details-paragraph text-direction mt-5">
                <span class="gold-color bold">{{__('front.about.name')}}</span>
                {{__('front.about.about_section')}}
            </div>
            <div class="d-flex justify-content-center mt-5">
                <div class="col-sm-6 col-xs-8">
                    <div class="gold-border-bottom"></div>
                </div>
            </div>
            <div class="text-direction mt-5">
                <h2 class="section-first-header letter-spacing"><span>{{__('front.about.our')}}</span></h2>
                <h2 class="section-second-header"><span>{{__('front.about.vision')}}</span> <span class="header-line"></span></h2>
                <div class="details-paragraph mt-3">
                    {!! __('front.about.about_section_2') !!}
                </div>
            </div>
            <div class="text-direction mt-5">
                <h2 class="section-first-header letter-spacing"><span>{{__('front.about.our')}}</span></h2>
                <h2 class="section-second-header"><span>{{__('front.about.mission')}}</span> <span class="header-line"></span></h2>
                <div class="details-paragraph mt-3">
                    {{__('front.about.about_section_3')}}
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="about-service">
        <div class="service-background py-5">
            <div class="service-details margin-top-75">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <div class="service-details-header w-100 h-100 col-lg-6 col-md-4 col-sm-2 col-xs-12 text-direction">
                                <h2 class="section-first-header letter-spacing"><span>{{__('front.about.our')}}</span> <span class="header-line"></span></h2>
                                <h2 class="section-second-header ovak-font letter-spacing"><span class="white-color">{{__('front.about.services')}}</span></h2>
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 w-100 h-100 text-direction">
                                <div class="col-sm-12 mb-5">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2 col-sm-3 green-color"><div class="about-icon-design"><i class="fas fa-comments fa-2x"></i></div></div>
                                            <div class="col-sm-9 col-md-10 white-color about-paragraph">
                                                <h4 class="gold-color">{{__('front.about.consultation_service')}}</h4>
                                                <p>{{__('front.about.consultation_service_description')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-5">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2 col-sm-3 green-color"><div class="about-icon-design"><i class="fas fa-filter fa-2x"></i></div></div>
                                            <div class="col-sm-9 col-md-10 white-color about-paragraph">
                                                <h4 class="gold-color">{{__('front.about.units_filter')}}</h4>
                                                <p>{{__('front.about.units_filter_description')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-5">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2 col-sm-3 green-color"><div class="about-icon-design"><i class="fas fa-calculator fa-2x"></i></div></div>
                                            <div class="col-sm-9 col-md-10 white-color about-paragraph">
                                                <h4 class="gold-color">{{__('front.about.installments_calculation')}}</h4>
                                                <p>{{__('front.about.installments_calculation_description')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-5">
                                    <div class="container-fluid">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-2 col-sm-3 green-color"><div class="about-icon-design"><i class="fas fa-calendar-check fa-2x"></i></div></div>
                                            <div class="col-sm-9 col-md-10 white-color about-paragraph">
                                                <h4 class="gold-color">{{__('front.about.booking_service')}}</h4>
                                                <p>{{__('front.about.booking_service_description_1')}} <span class="bold gold-color">&nbsp; {{__('front.about.booking_service_ask_now')}}</span> {{__('front.about.booking_service_description_2')}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-us">
        <div class="container text-direction my-5">
            <h2 class="section-first-header letter-spacing"><span>{{__('front.about.contact')}}</span></h2>
            <h2 class="section-second-header ovak-font letter-spacing"><span>{{__('front.about.us')}}</span> <span class="header-line"></span></h2>
        </div>
        <div class="gold-background py-5">
            <div class="container white-color w-100 h-100 d-flex align-items-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                            <div class="container-fluid">
                                <div class="row text-direction">
                                    <div class="col-sm-6">
                                        <div><i class="fas fa-2x fa-map-marker-alt"></i></div>
                                        <p>{{__('front.about.address')}}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div><i class="far fa-2x fa-envelope"></i></div>
                                        <a class="white-color" href="mailto:{{config('settings.support_email')}}">{{config('settings.support_email')}}</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <div><i class="far fa-2x fa-clock"></i></div>
                                        <p>{{__('front.about.working_days')}}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div><i class="fas fa-2x fa-phone-alt"></i></div>
                                        <a class="white-color" href="tel:{{config('settings.support_mobile_number')}}">{{config('settings.support_mobile_number')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="contact-form">
                                <form method="post" action="{{route('contact')}}">
                                    {{method_field('post')}}
                                    {{csrf_field()}}
                                    <input type="text" name="name" placeholder="Name" required />
                                    <input type="email" name="email" placeholder="Email" required />
                                    <input type="tel" name="phone" placeholder="Phone Number" required />
                                    <textarea placeholder="Message" name="message"></textarea>
                                    <button type="submit" class="ovak-dark-button">{{__('front.about.form.submit')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
