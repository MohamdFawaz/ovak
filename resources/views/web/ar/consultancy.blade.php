@extends('web.ar.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection
@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.consultancy')}}</title>
@endsection
@section('pre_header_content')
    <div class="header-text">
        <div class="secondery-page-header-ovarlay">
            <h2 class="white-color header-letter-spacing">{{__('front.header.inner_header.consultancy.consultancy')}}</h2>
            <h2 class="green-color">{{__('front.header.inner_header.consultancy.service')}} <span
                    class="header-line"></span></h2>
        </div>
    </div>
@endsection

@section('content')
    @include('web.ar.partials.inner_pages_header')

    <section id="consult" class="consult">
        <div class="container">
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding-xs margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>{{__('front.consultancy.consult')}}</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span class="letter-spacing">{{__('front.head.title.name')}}</span>
                    <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="about-service">
            <div class="service-background">
                <div class="service-details margin-top-75">
                    <div class="container no-padding-xs">
                        <h3 class="ovak-font white-color text-uppercase text-center">{{__('front.consultancy.form.title')}}</h3>
                        <div class="consultation">
                            <div class="col-md-push-2 col-md-8 col-sm-push-1 col-sm-10 col-xs-12 consultation-background no-padding-xs">
                                <div class="col-sm-8 col-sm-push-2 col-xs-12 m text-center consultation-btns no-padding-xs margin-top-50">
                                    <button class="ovak-button click-action st-click-action" value="residential"><i class="fa fa-home"></i>
                                        {{__('front.consultancy.form.choices.residential')}}</button>
                                    <button class="ovak-button click-action nd-click-action" value="commercial"><i
                                            class="fa fa-building-o"></i>
                                        {{__('front.consultancy.form.choices.commercial')}}</button>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-sm-push-3 margin-top-25">
                                        <div class="custom-select">
                                            <select name="district">
                                                <option value="">{{__('front.filter.district_location')}} </option>
                                                @foreach($districts as $district)
                                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-25">
                                    <div class="col-sm-3 col-sm-push-3 col-xs-6">
                                        <select id="FirstProject">
                                            <option value="">Select Project</option>
                                            <option value="4">Afghanistan</option>
                                            <option value="248">Aland Islands</option>
                                            <option value="8">Albania</option>
                                            <option value="12">Algeria</option>
                                            <option value="16">American Samoa</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-sm-push-3 col-xs-6 margin-top-10">
                                        <select id="SecondProject">
                                            <option value="">Select Project</option>
                                            <option value="4">Afghanistan</option>
                                            <option value="248">Aland Islands</option>
                                            <option value="8">Albania</option>
                                            <option value="12">Algeria</option>
                                            <option value="16">American Samoa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 text-center margin-top-25 margin-bottom-50">
                                    <button class="ovak-button">{{__('front.consultancy.form.action.submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <section id="install" class="installment">
        <div class="container">
            <div class="margin-top-50">
                <h2 class="section-first-header letter-spacing"><i
                        class="fa fa-calculator gold-color"></i><span>{{__('front.consultancy.installment.installment')}}</span>
                </h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span class="letter-spacing">{{__('front.consultancy.installment.calculator')}}</span>
                    <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="about-service">
            <div class="service-background">
                <div class="service-details margin-top-75">
                    <div class="col-md-push-2 col-md-8 col-sm-12 consultation-background">
                        <div class="col-md-8 col-md-push-2 margin-top-50 col-sm-12 no-padding">
                            <form id="installment-form">
                                {{csrf_field()}}
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class=" no-padding col-sm-6 col-xs-9">
                                            <h2 class="ovak-font gold-color"> {{__('front.consultancy.installment.form.property_price')}}</h2>
                                        </div>
                                        <div class="col-sm-6 col-xs-3">
                                        <span class="float-right gold-background white-color ovak-font"> {{__('front.consultancy.installment.form.currency')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <h4 class="white-color text-uppercase bold margin-top-10 ovak-font">{{__('front.consultancy.installment.form.total_amount')}}</h4>
                                <input name="installment-total-amount" type="text"
                                       placeholder="{{__('front.consultancy.installment.form.total_amount_placeholder')}}"/>
                                <div class="margin-top-50">
                                    <h3 class="black-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.down_payment')}}</h3>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6 no-padding margin-top-xs-25">
                                        <h4 class="white-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.amount')}}</h4>
                                        <input name="installment-down-payment-amount"
                                               onkeyup="convertDownPayment(event)"
                                               onchange="convertDownPayment(event)"
                                               type="text"
                                               placeholder="{{__('front.consultancy.installment.form.amount_placeholder')}}"/>
                                    </div>
                                    <div class="col-sm-6 margin-xs-top-10 pl-10">
                                        <h4 class="white-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.percent')}}</h4>
                                        <input type="text" name="installment-down-payment-percentage"
                                               onkeyup="convertDownPayment(event)"
                                               onchange="convertDownPayment(event)"
                                               placeholder="{{__('front.consultancy.installment.form.amount_placeholder')}}"/>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="margin-top-25">
                                        <h3 class="black-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.installment_period')}}</h3>
                                    </div>
                                    <div class="margin-top-xs-25">
                                        <div class="col-sm-6 no-padding">
                                            <h4 class="white-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.years')}}</h4>
                                            <input name="installment-years" type="text"
                                                   placeholder="{{__('front.consultancy.installment.form.years_placeholder')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 margin-top-25">
                                        <button type="submit" class="ovak-button text-uppercase bold"
                                                onclick="calculateInstallment(event)">{{__('front.consultancy.installment.form.actions.calculate')}}</button>
                                        <button type="submit" class="ovak-button transperant text-uppercase bold"
                                                onclick="clearInstallment(event)">{{__('front.consultancy.installment.form.actions.clear')}}</button>
                                    </div>
                                    <div class="col-sm-12 margin-top-10" id="remaining-result-field"
                                         style="display: none">
                                        <span class="ovak-font bold white-color">{{__('front.consultancy.installment.table.remaining')}} =</span>
                                        <span id="remaining-result" class="white-color"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top-50 margin-bottom-80">
                            <table id="installment-table" class="hidden">
                                <thead>
                                <tr class="gold-color ovak-font bold text-center text-uppercase">
                                    <td class="gold-color">{{__('front.consultancy.installment.table.installment_type')}}</td>
                                    <td class="gold-color">{{__('front.consultancy.installment.table.amount')}}</td>
                                    <td class="gold-color">{{__('front.consultancy.installment.table.number')}}</td>
                                </tr>
                                </thead>
                                <tbody class="white-color ovak-font bold text-center text-uppercase">
                                <tr>
                                    <td>
                                        {{__('front.consultancy.installment.table.monthly_installment')}} =
                                    </td>
                                    <td>
                                        <span class="table-num" id="monthly"></span>
                                    </td>
                                    <td id="monthly-count"></td>
                                </tr>
                                <tr>
                                    <td>
                                        {{__('front.consultancy.installment.table.quarterly_installment')}} =
                                    </td>
                                    <td>
                                        <span class="table-num" id="quarterly"></span>
                                    </td>
                                    <td id="quarterly-count"></td>
                                </tr>

                                <tr>
                                    <td>
                                        {{__('front.consultancy.installment.table.semi_annual_installment')}} =
                                    </td>
                                    <td>
                                        <span class="table-num" id="yearly"></span>
                                    </td>
                                    <td id="yearly-count"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
