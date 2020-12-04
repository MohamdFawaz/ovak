@extends('web.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection
@section('content')
    @include('web.partials.inner_pages_header',['innerContent' => '<div class="header-text">
                <div class="secondery-page-header-ovarlay">
                    <h2 class="white-color header-letter-spacing">about</h2>
                    <h2 class="green-color">Ovak <span class="header-line"></span></h2>
                </div>
            </div>'])

    <section id="consult" class="consult">
        <div class="container">
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding-xs margin-top-50">
                <h2 class="section-first-header letter-spacing"><span>Consult</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span class="letter-spacing">Ovak</span> <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="about-service">
            <div class="service-background">
                <div class="service-details margin-top-75">
                    <div class="container no-padding-xs">
                        <h2 class="ovak-font white-color text-uppercase text-center">let us find you the perfect choice</h2>
                        <div class="consultation">
                            <div class="col-md-push-2 col-md-8 col-sm-push-1 col-sm-10 col-xs-12 consultation-background no-padding-xs">
                                <div class="col-sm-8 col-sm-push-2 col-xs-12 m text-center consultation-btns no-padding-xs margin-top-50">
                                    <button class="ovak-button click-action st-click-action" value="residential"><i class="fa fa-home"></i> Residential</button>
                                    <button class="ovak-button click-action nd-click-action" value="commercial"><i class="fa fa-building-o"></i> Commercial</button>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 col-sm-push-3 margin-top-10">
                                        <div class="custom-select">
                                            <select name="project-type">
                                                <option value="1">Location </option>
                                                <option value="2">Fifth Sattelment</option>
                                                <option value="3">North Coast</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-sm-push-3 margin-top-10">
                                    <input type="text" placeholder="Please insert project name" />
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-6 col-sm-push-3 margin-top-10">
                                    <input type="text" placeholder="Please insert project name" />
                                </div>
                                <div class="col-xs-12 text-center margin-top-25 margin-bottom-50">
                                    <button class="ovak-button">CONSULT NOW</button>
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
                <h2 class="section-first-header letter-spacing"><i class="fa fa-calculator gold-color"></i><span>INSTALLMENT</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span class="letter-spacing">Ovak</span> <span class="header-line"></span></h2>
            </div>
        </div>
        <div class="about-service">
            <div class="service-background">
                <div class="service-details margin-top-75">
                    <div class="col-md-push-2 col-md-8 col-sm-12 consultation-background">
                        <div class="col-md-8 col-sm-12 no-padding">
                            <span class="ovak-font white-color"> Property Price</span>
                            <span class="float-right gold-background white-color ovak-font"> EGP</span>
                            <h4 class="white-color text-uppercase bold margin-top-10 ovak-font">total amount</h4>
                            <input type="text" placeholder="Amount EGP" />
                            <div class="margin-top-50">
                                <h4 class="white-color bold ovak-font text-uppercase">down payment</h4>
                                <div class="col-sm-6 no-padding">
                                    <h4 class="white-color bold ovak-font text-uppercase">Amount</h4>
                                    <input type="text" placeholder="Amount EGP" />
                                </div>
                                <div class="col-sm-6 pl-10">
                                    <h4 class="white-color bold ovak-font text-uppercase">percent</h4>
                                    <input type="text" placeholder="Amount EGP" />
                                </div>
                                <div class="clearfix"></div>
                                <div class="margin-top-25">
                                    <h4 class="white-color bold ovak-font text-uppercase">installment period</h4>
                                </div>
                                <div>
                                    <div class="col-sm-6 no-padding">
                                        <h4 class="white-color bold ovak-font text-uppercase">years</h4>
                                        <input type="text" placeholder="ENTER YEARS" />
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-25">
                                    <button type="submit" class="ovak-button text-uppercase bold">calculate</button>
                                    <button type="submit" class="ovak-button transperant text-uppercase bold">clear</button>
                                </div>
                                <div class="col-sm-12 margin-top-10">
                                    <span class="ovak-font bold white-color">Remaning =</span>
                                    <span id="result"></span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top-50 margin-bottom-80">
                            <table>
                                <thead>
                                <tr class="gold-color ovak-font bold text-center text-uppercase">
                                    <td class="gold-color">installment type</td>
                                    <td class="gold-color">amount</td>
                                    <td class="gold-color">num</td>
                                </tr>
                                </thead>
                                <tbody class="white-color ovak-font bold text-center text-uppercase">
                                <tr>
                                    <td>
                                        monthly installment =
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="table-num">X0le</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        quarterly installment =
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="table-num">X0le</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        yearly installment =
                                    </td>
                                    <td></td>
                                    <td>
                                        <span class="table-num">X0le</span>
                                    </td>
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
