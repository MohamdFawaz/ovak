@extends('web.layout')

@section('content')
    <section class="header">
        <div class="home-header-image">
            <div class="ovarlay">
                <div class="login-modal display-none">
                    <div class="user-modal col-lg-6 col-lg-push-3 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1">
                        <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                            <div class="modal-contents margin-top-80 margin-bottom-80">
                                <form method="post" id="login-form">
                                    <h3 class="green-color ovak-font">Sign in to OVAK</h3>
                                    <input name="lemail" id="lemail" type="email" placeholder="Email Address" required />
                                    <small id="lemail-error" class="text-danger"></small>
                                    <input name="lpassword" id="lpassword" type="password" placeholder="Password" required />
                                    <div class="margin-top-10">
                                        <a class="gold-color" href="#">Forget Password?</a>
                                    </div>
                                    <div class="margin-top-25 col-sm-12 no-padding">
                                        <button class="ovak-dark-button" type="submit">Login</button>
                                    </div>
                                    <div class="clearfix"> </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6 no-padding">
                            <img src="{{asset('img/login-form.png')}}" class="image-full-width modal-image" alt="" />
                            <div class="clearfix"></div>
                            <div class="modal-close"><i class="fa fa-close"></i></div>
                            <div class="modal-image-ovarlay">
                                <h4>Hello , Friend</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tempus dui, et interdum velit.</p>
                                <a class="ovak-button login-change-modal">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration-modal display-none">
                    <div class="user-modal col-lg-6 col-lg-push-3 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1">
                        <div class="col-lg-4 col-md-5 col-sm-6 no-padding">
                            <img src="{{asset('img/login-form.png')}}" class="image-full-width modal-image" alt=""/>
                            <div class="clearfix"></div>

                            <div class="modal-image-ovarlay">
                                <h4>Hello , Friend</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tempus dui, et interdum velit.</p>
                                <a class="ovak-button registration-change-modal">Login</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                            <div class="clearfix"></div>
                            <div class="modal-contents margin-top-80 margin-bottom-80">
                                <form>
                                    <div class="registration-modal-close"><i class="fa fa-close"></i></div>
                                    <h3 class="green-color ovak-font">Create Account</h3>
                                    <input class="input-edit" name="rfname" type="text" placeholder="First Name" required />
                                    <input class="input-edit" name="rlname" type="text" placeholder="Last Name" required />
                                    <input name="remail" type="email" placeholder="Email Address" required />
                                    <input name="rphone" type="text" placeholder="Phone Number" required />
                                    <input name="rpassword" placeholder="Password" required />
                                    <div class="margin-top-25 col-sm-12 no-padding">
                                        <button class="ovak-dark-button" type="submit">Register</button>
                                    </div>
                                    <div class="clearfix"> </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="menu">
                    <div class="logo col-md-2 col-sm-3 col-xs-5">
                        <a href="./index.html"><img src="{{asset('web/images/Logo.png')}}" class="image-full-width" alt="" /></a>
                    </div>
                    <div class="menu-list col-md-10 hidden-sm hidden-xs">
                        <div class="menu-list-centere col-md-7 col-sm-6">
                            <ul>
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Developers</a></li>
                                <li><a href="#">About/Contact</a></li>
                                <li><a href="#">Consultancy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 menu-list-right col-sm-6">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:01154474317"> 01154474317</a></li>
                                <li class="login"><i class="fa fa-user-o" aria-hidden="true"></i><a href="#"> Login</a></li>
                                <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#"> Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden-md hidden-lg col-sm-8 col-xs-5 nav-button">
                        <a id="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </div>
                    <div>
                        <div class="col-sm-4 col-xs-8 mobile-menu display-none">
                            <div class="mobile-links">
                                <img class="mobile-menu-logo" src="{{asset('web/images/Logo.png')}}" alt="" />
                                <ul>
                                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"> </i> Home</a></li>
                                    <li><a href="#"><i class="fa fa-building-o" aria-hidden="true"> </i> Projects</a></li>
                                    <li><a href="#"><i class="fa fa-users" aria-hidden="true"> </i> Devlopers</a></li>
                                    <li><a href="#"><i class="fa fa-address-card" aria-hidden="true"> </i> About/contact</a></li>
                                    <li><a href="#"><i class="fa fa-question" aria-hidden="true"> </i> Consultancy</a></li>

                                </ul>
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
                                    <div class="col-sm-12">
                                        <a href="tel:01154474317" class="col-sm-12 phone"> <i class="fa fa-phone" aria-hidden="true"><span class="white-color"> 0111111111111</span> </i></a>
                                    </div>
                                    <div class="col-sm-12">
                                        <ul>
                                            <li class="login"><i class="fa fa-user-o" aria-hidden="true"></i><a href="#"> Login</a></li>
                                            <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#"> Arabic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 no-padding menu-background display-none"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="border-bottom"></div>
            </div>
        </div>
        <div class="links-carrier">
            <span class="calculator"><i class="fa fa-calculator"></i></span>
            <span class="calculator-link"><a href="consultancy.html"> Calculate Your installments</a></span>
        </div>
        <div class="consultancy-square">
            <span class="square-acc"></span>
            <span class="white-color">RELAX & LET </span>
            <span class="gold-color ovak">OVAK</span>
            <span class="white-color">DO THE REST.</span>
            <span class="consultany margin-top-10">CONSULTANCY</span>
            <span class="consultany margin-bottom-10">SERVICE</span>
            <a href="#"><span class="consultancy-square-link">LEARN MORE</span></a>
        </div>
    </section>
    <section class="ovak-filter">
        <div class="container">
            <div class="filter-label col-md-2 col-md-push-5 col-sm-push-4 col-xs-3 col-xs-push-2">
                <span>SEARCH FOR YOUR POROPERTY</span>
            </div>
            <div class="filter-body box-shadow">
                <form>
                    <div class="margin-top-50 filter-select">
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="border-right border-right-md border-right-sm">
                                <div class="custom-select">
                                    <select name="project-type">
                                        <option value="1">Project Type</option>
                                        @foreach($project_types as $project_type)
                                        <option value="{{$project_type->id}}">{{ $project_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="border-right border-right-md">
                                <div class="custom-select">
                                    <select name="project-type">
                                        <option value="1">District Location</option>
                                        @foreach($districts as $district)
                                            <option value="{{$district->id}}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="border-right-sm">
                                <div class="custom-select">
                                    <select name="project-type">
                                        <option value="0">Development Company</option>
                                        @foreach($development_companies as $company)
                                            <option value="{{$company->id}}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="border-right border-right-md">
                                <div class="custom-select">
                                    <select name="project-type">
                                        <option value="0">Finishing Type</option>
                                        @foreach($finish_types as $type)
                                            <option value="{{$type->id}}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="border-right border-right-md border-right-sm">
                                <div class="custom-select">
                                    <select name="project-type">
                                        <option value="0">Unit Type</option>
                                        @foreach($unit_types as $type)
                                            <option value="{{$type->id}}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                            <div class="">
                                <div class="custom-select">
                                    <select name="project-type">
                                        <option value="0">Delivery date</option>
                                        <option value="1">2021</option>
                                        <option value="2">2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-range">
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <label class="gold-color filter-label-text">Price Range</label>
                                <div class="">
                                    <div class="input-type">
                                        <input type="text" name="price-range">
                                        <span class="gold-color"><i class="fa fa-arrow-right"></i></span>
                                        <input type="text" name="prince-range">
                                        <span class="gold-color">/ EGP </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-10 padding-control">
                                <label class="gold-color filter-label-text">Area Range</label>
                                <div class="">
                                    <div class="input-type">
                                        <input type="text" name="prince-range">
                                        <span class="gold-color"><i class="fa fa-arrow-right"></i> </span>
                                        <input type="text" name="prince-range">
                                        <span class="gold-color">/ M<sup>2</sup> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-button">
                        <div class="hidden-lg hidden-sm hidden-md col-xs-6">
                            <a id="show" class="gold-color"><i class="fa fa-plus"> </i> More Filters </a>
                        </div>
                        <div class="col-sm-11 col-xs-6">
                            <a href="#" class="ovak-button float-right">Search </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="home-vision">
        <div class="col-sm-12 no-padding">
            <div class="col-sm-6 col-xs-12 no-padding"><img class="image-full-width" src="{{asset('web/images/home-vision.png')}}" alt="" /> </div>
            <div class="col-sm-6 col-xs-12 no-padding vision-water-mark">
                <div class="vision-img-show">
                    <div class="col-lg-9 col-lg-push-1 col-md-11 col-md-push-1 col-xs-12 vision-text">
                        <h2 class="section-first-header header-letter-spacing"><span class="col-lg-8 col-md-10 col-sm-11 col-xs-8 no-padding">we find you</span><span class="header-line col-md-2 col-sm-1 col-xs-1 no-padding"></span></h2>
                        <div class="clearfix"></div>
                        <h2 class="section-second-header letter-spacing no-padding">the perfect choice</h2>
                        <div class="clearfix"></div>
                        <p class="vision-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <div class="margin-top-50"><a href="#" class="ovak-button">Mission & Vision</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <div class="clearfix"></div>
    <section id="projects" class="projects">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-md-4 col-md-push-1 col-sm-8 col-sm-push-1 col-xs-12 no-padding-xs">
                <h2 class="section-first-header letter-spacing"><span class="col-sm-6">featured</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span class="col-lg-5 col-md-8 col-sm-5 col-xs-6">projects</span> <span class="header-line col-lg-push-1 col-md-2 col-sm-1 hidden-xs no-padding"></span></h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12">Discover how much the latest properties have been sold for</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="variable slider">
            <div class="slider-item">
                <div class="slider-image slider-ovarlay">
                    <img src="{{asset('img/slider-5.png')}}" alt="" />
                    <a href="#" class="ovak-button"> View More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="slider-body">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-8 no-padding">
                            <h4 class="project-name">Palm Hills</h4>
                        </div>
                        <div class="col-sm-2 no-padding col-xs-3 developer-icon">
                            <img src="resources/assets/images/developer-icon.png" alt="" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="slider-list-text">
                            <div><span class="gold-color">District :</span><span> West Cairo</span></div>
                            <div><span class="gold-color">type of property :</span><span> Villa</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> West Cairo 120, ring road</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-image slider-ovarlay">
                    <img src="resources/assets/images/slider-5.png" alt="" />
                    <a href="#" class="ovak-button"> View More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="slider-body">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-8 no-padding">
                            <h4 class="project-name">Palm Hills</h4>
                        </div>
                        <div class="col-sm-2 no-padding col-xs-3 developer-icon">
                            <img src="resources/assets/images/developer-icon.png" alt="" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="slider-list-text">
                            <div><span class="gold-color">District :</span><span> West Cairo</span></div>
                            <div><span class="gold-color">type of property :</span><span> Villa</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> West Cairo 120, ring road</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-image slider-ovarlay">
                    <img src="resources/assets/images/slider-4.png" alt="" />
                    <a href="#" class="ovak-button"> View More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="slider-body">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-8 no-padding"><h4 class="project-name">Palm Hills</h4></div>
                        <div class="col-sm-2 no-padding col-xs-3 developer-icon"><img src="resources/assets/images/developer-icon.png" alt="" /></div>
                        <div class="clearfix"></div>
                        <div class="slider-list-text">
                            <div><span class="gold-color">District :</span><span> West Cairo</span></div>
                            <div><span class="gold-color">type of property :</span><span> Villa</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> West Cairo 120, ring road</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-image slider-ovarlay">
                    <img src="resources/assets/images/slider-3.png" alt="" />
                    <a href="#" class="ovak-button"> View More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="slider-body">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-8 no-padding">
                            <h4 class="project-name">Palm Hills</h4>
                        </div>
                        <div class="col-sm-2 col-xs-3 no-padding developer-icon">
                            <img src="resources/assets/images/developer-icon.png" alt="" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="slider-list-text">
                            <div><span class="gold-color">District :</span><span> West Cairo</span></div>
                            <div><span class="gold-color">type of property :</span><span> Villa</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> West Cairo 120, ring road</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-image slider-ovarlay">
                    <img src="resources/assets/images/slider-1.png" alt="" />
                    <a href="#" class="ovak-button"> View More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="slider-body">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-8 no-padding">
                            <h4 class="project-name">Palm Hills</h4>
                        </div>
                        <div class="col-sm-2 col-xs-3 no-padding developer-icon">
                            <img src="resources/assets/images/developer-icon.png" alt="" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="slider-list-text">
                            <div><span class="gold-color">District :</span><span> West Cairo</span></div>
                            <div><span class="gold-color">type of property :</span><span> Villa</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> West Cairo 120, ring road</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-image slider-ovarlay">
                    <img src="resources/assets/images/slider-2.png" alt="" />
                    <a href="#" class="ovak-button">View More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="slider-body">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-xs-8 no-padding">
                            <h4 class="project-name">Palm Hills</h4>
                        </div>
                        <div class="col-sm-2 col-xs-3 no-padding developer-icon">
                            <img src="resources/assets/images/developer-icon.png" alt="" />
                        </div>
                        <div class="clearfix"></div>
                        <div class="slider-list-text">
                            <div><span class="gold-color">District :</span><span> West Cairo</span></div>
                            <div><span class="gold-color">type of property :</span><span> Villa</span></div>
                            <div><span class="gold-color"><i class="fa fa-map-marker"></i>:</span><span> West Cairo 120, ring road</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a class="ovak-button">View all properties</a></div>
    </section>
    <div class="clearfix"></div>
    <div class="margin-top-75"></div>
    <section id="subscription" class="subscription">
        <div class="col-sm-12">
            <div class="col-md-6 col-md-push-1 col-sm-6 margin-top-100">
                <h2 class="section-second-header header-letter-spacing"><span class="col-lg-5 col-md-7 col-sm-10 col-xs-9 no-padding">subscripe</span><span class="header-line col-sm-1 hidden-xs no-padding"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-first-header bold letter-spacing no-padding">market news</h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12 no-padding">Get notifications about marketplace, updates and latest offers post.</p>
                <div class="clearfix"></div>
                <div class="margin-top-50"></div>
                <div class="subscription-input col-md-6 col-sm-10 no-padding">
                    <form>
                        <input type="email" maxlength="40" placeholder="Enter Your E-mail" required />
                        <button class="subscription-button" type="submit">subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-sm-pull-1"><img src="resources/assets/images/subscribe.png" class=" image-full-width" alt="" /></div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="developers" class="developers">
        <div class="col-sm-12 no-padding-xs">
            <div class="col-lg-4 col-lg-push-1 col-md-6 col-md-push-1 col-sm-8 col-xs-12 no-padding-xs">
                <h2 class="section-first-header"><span class="col-md-6 col-sm-6 col-xs-7">projects</span> <span class="header-line col-md-1 col-sm-1 hidden-xs"></span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header letter-spacing"><span class="col-sm-6">developers</span></h2>
                <div class="clearfix"></div>
                <p class="vision-paragraph col-sm-12">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="slider-background">
            <div class="variable slider">
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/palmhills.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image ">
                        <a href="#"><img src="resources/assets/images/palmhills-1.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/sodic-1.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/sodic-1.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/elmorshedy.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/elmorshedy.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/talat-group.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/elmorshedy.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/elmorshedy.png" alt="" /></a>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <a href="#"><img src="resources/assets/images/talat-group.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center margin-top-75"><a class="ovak-button">View all developers</a></div>
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function (){
           $('#login-form').on('submit',function (e){
               e.preventDefault();
               let email = $('#lemail').val();
               let password = $('#lpassword').val();
               let formData = new FormData();
               formData.append('password',password);
               formData.append('email',email);
               axios.post('/api/auth/user-login', formData, {
                   headers: {
                       'Content-Type': 'application/json',
                     },
               }).then((response) => {
                   $('#lemail-error').text('');
                   console.log(response.data);
                   let user = response.data;
                   localStorage.setItem('user',JSON.stringify(user));
                   $('.modal-close').trigger('click');
               }).catch((error) => {
                   $('#lemail-error').text(error.response.statusText);
                   console.log(error.response)
               });
           });
        });
    </script>
@endsection
