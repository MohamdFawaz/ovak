<section class="footer">
    <div class="col-sm-4 hidden-xs white-background footer-img">
        <div class="footer-image-decoration"></div>
        <img class="" src="{{asset('images/footer-logo.png')}}" alt="" />
    </div>
    <div class="col-sm-8">
        <div class="col-md-11 col-md-push-1 col-sm-12">
            <div class="footer-links">
                <div class="col-md-2 col-sm-4">
                    <h5>Home</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="#filter">Filter</a></li>
                        <li><a href="#vision">Vision & Mission</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#subscription">Subscription</a></li>
                        <li><a href="#developers">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>Projects</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="./projects.html#projects">Projects</a></li>
                        <li><a href="./projects.html#developers">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>Developers</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="./developers.html#developers">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>Consultancy</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="./counsultancy.html#consult">Consult</a></li>
                        <li><a href="./counsultancy.html#install">Installments</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>About us</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="./about.html#vision">Our Vision</a></li>
                        <li><a href="./about.html#service">Our Services</a></li>
                        <li><a href="./about.html#contact">Contact us</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-12 social-links">
                <h3>Follow us</h3>
                <ul>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li> <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"> </i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-12 margin-top-25">
                <h3>Market news</h3>
                <p>join our mailing list and keep up with <span class="gold-color">OVAK</span></p>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8 margin-top-25">
                <div class="subscription-input">
                    <form>
                        <input type="email" placeholder="Please type your e-mail" required />
                        <button type="button" class="subscription-button">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 hidden-sm hidden-md hidden-lg white-background footer-img">
        <div class="footer-image-decoration"></div>
        <img class="" src="resources/assets/images/footer-logo.png" alt="" />
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12 no-padding copy-right">
        <h5>Copyright<sup>©</sup> <span id="year"></span> All rights reserved OVAK.</h5>
    </div>
    <div class="clearfix"></div>
</section>
<section class="modals">
    <div class="login-modal display-none">
        <div class="user-modal col-lg-6 col-lg-push-4 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1 col-xs-push-2">
            <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                <div class="modal-contents margin-top-80 margin-bottom-80">
                    <form>
                        <div class="modal-close hidden-sm hidden-md hidden-lg"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">Sign in to OVAK</h3>
                        <input name="lname" type="email" placeholder="Email Address" required />
                        <input name="lpassword" placeholder="Password" required />
                        <div class="margin-top-10 forget-cahnge-modal">
                            <a class="gold-color" href="#">Forget Password ? </a>
                        </div>
                        <div class="margin-top-25 col-sm-12 col-xs-12 no-padding">
                            <div class="col-xs-5 hidden-sm hidden-md hidden-lg no-padding-xs float-left">
                                <button class="ovak-dark-button registration-change-modal" type="button">register</button>
                            </div>
                            <div class="col-xs-5 col-sm-12 no-padding-xs margin-right-xs no-padding float-right">
                                <button class="ovak-dark-button" type="submit">Login</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 hidden-xs no-padding">
                <img src="{{asset('img/login-form.png')}}" class="image-full-width modal-image" alt="" />
                <div class="clearfix"></div>
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="modal-image-ovarlay">
                    <h4>Hello , Friend</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tempus dui, et interdum velit.</p>
                    <a class="ovak-button login-change-modal">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="password-modal display-none">
        <div class="user-modal col-lg-6 col-lg-push-4 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1 col-xs-push-2">
            <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                <div class="modal-contents margin-top-80 margin-bottom-80">
                    <form>
                        <div class="modal-close hidden-sm hidden-md hidden-lg"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">Forget Password</h3>
                        <input name="lname" type="email" placeholder="Email Address" required />
                        <div class="margin-top-25 col-sm-12 col-xs-12 no-padding">
                            <button class="ovak-dark-button" type="submit">Reset Password</button>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 hidden-xs no-padding">
                <img src="{{asset('img/login-form.png')}}" class="image-full-width modal-image" alt="" />
                <div class="clearfix"></div>
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="modal-image-ovarlay">
                    <h4>Hello , Friend</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel tempus dui, et interdum velit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="logout-modal display-none">
        <div class="user-modal col-lg-4 col-lg-push-4 col-md-6 col-md-push-4 col-sm-8 col-sm-push-3 text-center col-xs-push-2">
            <div class="col-lg-10 col-md-9 col-sm-8 white-background modal-form no-padding">
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="logout-image">
                    <img src="./resources/assets/images/logo.png" />
                </div>
                <div class="clearfix"> </div>
                <div class="modal-contents">
                    <h4> Are you sure you want to</h4>
                    <div class="col-sm-8 col-sm-push-2 text-center margin-bottom-25">
                        <button class="ovak-dark-button">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="registration-modal display-none">
        <div class="user-modal col-lg-6 col-lg-push-4 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1 col-xs-push-2">
            <div class="col-lg-4 col-md-5 col-sm-6 no-padding hidden-xs">
                <img src="{{asset('img/login-form.png')}}" class="image-full-width modal-image" alt="" />
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
                        <div class="modal-close"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">Create Account</h3>
                        <div class="col-sm-5 float-left no-padding">
                            <input class="input-edit" name="rfname" type="text" placeholder="First Name" required />
                        </div>
                        <div class="col-sm-5 float-right no-padding">
                            <input class="input-edit" name="rlname" type="text" placeholder="Last Name" required />
                        </div>
                        <div class="clearfix"></div>
                        <input name="remail" type="email" placeholder="Email Address" required />
                        <input name="rphone" type="text" placeholder="Phone Number" required />
                        <input name="rpassword" placeholder="Password" required />
                        <div class="margin-top-25 col-sm-12 no-padding">
                            <div class="col-xs-5 hidden-sm hidden-md hidden-lg no-padding-xs float-left">
                                <button class="ovak-dark-button registration-change-modal" type="button">Login</button>
                            </div>
                            <div class="col-xs-5 col-sm-12 no-padding-xs margin-right-xs no-padding float-right">
                                <button class="ovak-dark-button" type="submit">Register</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ask-modal display-none">
        <div class="user-modal col-lg-4 col-lg-push-4 col-md-6 col-md-push-4 col-sm-8 col-sm-push-3 text-center col-xs-push-2">
            <div class="col-lg-10 col-md-9 col-sm-8 white-background modal-form no-padding">
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="ask-img">
                    <img src="./resources/assets/images/logo.png" />
                </div>
                <div class="modal-contents">
                    <h4>One of our team is going to contact you as soon as possible </h4>
                    <span>Maximum waiting hours is 24 hours</span>
                    <div class="col-sm-8 col-sm-push-2 text-center margin-bottom-25">
                        <button class="ovak-dark-button ask-confirm">confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('web/javascripts/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('web/javascripts/navbar.js')}}"></script>
<script src="{{asset('web/javascripts/slick.min.js')}}"></script>
<script src="{{asset('web/javascripts/scripts.js')}}"></script>

</body>
</html>
