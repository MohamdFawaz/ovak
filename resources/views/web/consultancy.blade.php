@extends('web.layout')

@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.consultancy')}}</title>
@endsection


@section('pre_header_content')
    <div class="h-75 w-100 d-flex justify-content-center align-items-center">
        <div>
            <h2 class="white-color header-letter-spacing">{{__('front.consultancy.consultancy')}}</h2>
            <h2 class="green-color">{{__('front.consultancy.service')}} <span class="header-line"></span></h2>
        </div>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')

    <section id="consult">
        <div class="container">
            <div class="my-5 text-direction">
                <h2 class="section-first-header letter-spacing"><span>{{__('front.consultancy.consult')}}</span></h2>
                <h2 class="section-second-header"><span class="letter-spacing">{{__('front.head.title.name')}}</span> <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="about-service">
            <div class="service-background py-5">
                <div class="service-details my-5">
                    <div class="container">
                        <h2 class="ovak-font white-color text-uppercase text-center">{{__('front.consultancy.form.title')}}</h2>
                        <div class="consultation d-flex justify-content-center align-items-center">
                            <div class="col-sm-8 col-12">
                                <form action="{{route('submit.consultancy')}}" id="consultancy-form" method="post">
                                    {{csrf_field()}}
                                    {{method_field('post')}}
                                    <div class="consultation-background col-12 py-5">
                                    <div class="my-5">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-6 col-8">
                                                <div class="custom-select">
                                                    <select name="property_type" required>
                                                        <option value="">{{__('front.filter.all_property_types')}}</option>
                                                        @foreach($propertyTypes as $type)
                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-3">
                                            <div class="col-sm-6 col-8">
                                                <div class="custom-select">
                                                    <select name="district_id" required >
                                                        <option value="">{{__('front.filter.district_location')}} </option>
                                                        @foreach($districts as $district)
                                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-3">
                                            <div class="col-12 col-sm-3 d-sm-block d-flex justify-content-center">
                                                <select id="FirstProject" name="first_project_id" required>
                                                    <option value="">{{__('front.consultancy.form.choices.select_project')}}</option>
                                                        @foreach($projects as $project)
                                                            <option value="{{$project->id}}">{{$project->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3 d-sm-block d-flex justify-content-center mt-3 mt-sm-0 w-100 w-sm-auto">
                                                <select id="SecondProject" name="second_project_id" required>
                                                <option value="">{{__('front.consultancy.form.choices.select_project')}}</option>
                                                    @foreach($projects as $project)
                                                        <option value="{{$project->id}}">{{$project->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <button class="ovak-button py-2 px-4 mt-4 @if(!Auth::check()) login @endif"> {{__('front.consultancy.form.action.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="install" class="installment">
        <div class="container">
            <div class="my-5 text-direction">
                <h2 class="section-second-header letter-spacing"><i class="fa fa-calculator gold-color"> </i><span> {{__('front.consultancy.installment.calculator')}}</span> <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="about-service">
            <div class="service-background">
                <div class="service-details my-5 d-flex justify-content-center py-5">
                    <div class="col-sm-8 col-12">
                        <div class="consultation-background">
                            <div class="container">
                                <div class="col-12 py-5">
                                    <div class="row d-flex justify-content-center h-100">
                                        <div class="col-sm-8 col-12">
                                            <form id="installment-form">
                                                {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-sm-6 col-9">
                                                    <h2 class="ovak-font gold-color"> {{__('front.consultancy.installment.form.property_price')}}</h2>
                                                </div>
                                                <div class="col-sm-6 col-3 text-direction-reverse">
                                                    <span class="gold-background p-3 white-color ovak-font"> {{__('front.consultancy.installment.form.currency')}}</span>
                                                </div>
                                                <div class="col-sm-12 mt-3">
                                                    <h4 class="white-color text-uppercase bold ovak-font">{{__('front.consultancy.installment.form.total_amount')}}</h4>
                                                    <input name="installment-total-amount" type="text"
                                                           placeholder="{{__('front.consultancy.installment.form.total_amount_placeholder')}}" />
                                                </div>
                                            </div>
                                            <div class="col-12 p-0 mt-3">
                                                <h3 class="black-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.down_payment')}}</h3>
                                            </div>
                                            <div class="col-12 p-0">
                                                <div class="row">
                                                <div class="col-6">
                                                        <h4 class="white-color bold ovak-font text-uppercase percentage">{{__('front.consultancy.installment.form.percent')}}</h4>
                                                        <input type="text" name="installment-down-payment-percentage" class="percentage"
                                                               maxlength="3"
                                                               onkeyup="convertDownPayment(event)"
                                                               onchange="convertDownPayment(event)"
                                                               placeholder="{{__('front.consultancy.installment.form.amount_placeholder')}}" />
                                                    </div>
                                                    <div class="col-6">
                                                        <h4 class="white-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.amount')}}</h4>
                                                        <input name="installment-down-payment-amount"
                                                               onkeyup="convertDownPayment(event)"
                                                               onchange="convertDownPayment(event)"
                                                               type="text" placeholder="{{__('front.consultancy.installment.form.amount_placeholder')}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 p-0 mt-3">
                                                <h3 class="black-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.installment_period')}}</h3>
                                            </div>
                                            <div class="col-8 p-0">
                                                <h4 class="white-color bold ovak-font text-uppercase">{{__('front.consultancy.installment.form.years')}}</h4>
                                                <input name="installment-years" type="text" placeholder="{{__('front.consultancy.installment.form.years_placeholder')}}" />
                                            </div>
                                            <div class="col-sm-8 col-12 mt-3 p-0">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="submit"
                                                                onclick="calculateInstallment(event)"
                                                                class="ovak-button w-100 py-2 text-center p-0 text-uppercase @if(!Auth::check()) login @endif bold">{{__('front.consultancy.installment.form.actions.calculate')}}</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="submit"
                                                                class="ovak-button py-2 w-100 text-center transperant text-uppercase bold"
                                                                onclick="clearInstallment(event)">{{__('front.consultancy.installment.form.actions.clear')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="row" id="remaining-result-field" style="display: none">
                                                    <h3 class="ovak-font bold white-color">{{__('front.consultancy.installment.table.remaining')}} =</h3>
                                                    <h3 class="white-color bold ovak-font" id="remaining-result"></h3>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-12">
                                            <table id="installment-table" class="hide mt-5">
                                                <thead>
                                                <tr class="gold-color ovak-font bold text-center text-uppercase">
                                                    <td class="gold-color">{{__('front.consultancy.installment.table.installment_type')}}</td>
                                                    <td class="gold-color">{{__('front.consultancy.installment.table.number')}}</td>
                                                    <td class="gold-color">{{__('front.consultancy.installment.table.amount')}}</td>
                                                </tr>
                                                </thead>
                                                <tbody class="white-color ovak-font bold text-center text-uppercase">
                                                <tr>
                                                    <td>
                                                        {{__('front.consultancy.installment.table.monthly_installment')}} =
                                                    </td>
                                                    <td id="monthly-count"></td>
                                                    <td>
                                                        <span class="table-num" id="monthly"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('front.consultancy.installment.table.quarterly_installment')}} =
                                                    </td>
                                                    <td id="quarterly-count"></td>
                                                    <td>
                                                        <span class="table-num" id="quarterly"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{__('front.consultancy.installment.table.semi_annual_installment')}} =
                                                    </td>
                                                    <td id="yearly-count"></td>
                                                    <td>
                                                        <span class="table-num" id="yearly"></span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
@endsection

