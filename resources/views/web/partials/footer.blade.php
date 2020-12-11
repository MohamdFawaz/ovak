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
                        <li><a href="{{url('/')}}#filter">Filter</a></li>
                        <li><a href="{{url('/')}}#vision">Vision & Mission</a></li>
                        <li><a href="{{url('/')}}#projects">Projects</a></li>
                        <li><a href="{{url('/')}}#subscription">Subscription</a></li>
                        <li><a href="{{url('/')}}#developers">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>Projects</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="{{route('projects.list')}}#projects">Projects</a></li>
                        <li><a href="{{route('projects.list')}}#developers">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>Developers</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="{{route('developers.list')}}#developers">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>Consultancy</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="{{route('consultancy')}}#consult">Consult</a></li>
                        <li><a href="{{route('consultancy')}}#install">Installments</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5>About us</h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="{{route('about')}}#vision">Our Vision</a></li>
                        <li><a href="{{route('about')}}#service">Our Services</a></li>
                        <li><a href="{{route('about')}}#contact">Contact us</a></li>
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
        <img class="" src="{{asset('images/footer-logo.png')}}" alt="" />
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
                    <form id="login-form">
                        <div class="modal-close hidden-sm hidden-md hidden-lg"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">{{__('front.login.sign_in')}} {{__('front.head.title.name')}}</h3>
                        {{csrf_field()}}
                        <input name="email" type="email" id="login_email" placeholder="{{__('front.login.email')}}" required />
                        <small class="login-error" style="display: none;color: red"></small>
                        <input name="password" type="password" id="login_password" placeholder="{{__('front.login.password')}}" required />
                        <div class="margin-top-10 forget-cahnge-modal">
                            <a class="gold-color" href="#">Forget Password ? </a>
                        </div>
                        <div class="margin-top-25 col-sm-12 col-xs-12 no-padding">
                            <div class="col-xs-5 hidden-sm hidden-md hidden-lg no-padding-xs float-left">
                                <button class="ovak-dark-button registration-change-modal" type="button">register</button>
                            </div>
                            <div class="col-xs-5 col-sm-12 no-padding-xs margin-right-xs no-padding float-right">
                                <button class="ovak-dark-button" type="submit">{{__('front.login.action.login')}}</button>
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
                    <h4>{{__('front.login.hello')}}</h4>
                    <p>{{__('front.login.text')}}</p>
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
                    <img src="{{asset('web/images/logo.png')}}" />
                </div>
                <div class="clearfix"> </div>
                <div class="modal-contents">
                    <h4>{{__('front.logout.are_you_sure')}}</h4>
                    <div class="col-sm-8 col-sm-push-2 text-center margin-bottom-25">
                        <a href="{{route('user.logout')}}" onclick="clearUser()"><button class="ovak-dark-button">{{__('front.logout.logout')}}</button></a>
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
                    <h4>{{__('front.login.hello')}}</h4>
                    <p>{{__('front.login.text')}}</p>
                    <a class="ovak-button registration-change-modal">{{__('front.login.action.login')}}</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                <div class="clearfix"></div>
                <div class="modal-contents margin-top-80 margin-bottom-80">
                    <form id="regsiter-form">
                        {{csrf_field()}}
                        <div class="modal-close"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">{{__('front.register.create_account')}}</h3>
                        <div class="col-sm-5 float-left no-padding">
                            <input class="input-edit" name="rfname" id="rfname" type="text" placeholder="{{__('front.register.first_name')}}" required />
                        </div>
                        <div class="col-sm-5 float-right no-padding">
                            <input class="input-edit" name="rlname" id="rlname" type="text" placeholder="{{__('front.register.last_name')}}" required />
                        </div>
                        <div class="clearfix"></div>
                        <input name="remail" type="email" id="remail" placeholder="{{__('front.register.email_address')}}" required />
                        <small class="email-error" style="display: none;color: red;"></small>
                        <input name="rphone" type="text" id="rphone" placeholder="{{__('front.register.phone_number')}}" required />
                        <small class="phone-error" style="display: none;color: red;"></small>
                        <input name="rpassword" type="password" id="rpassword" placeholder="{{__('front.register.password')}}" required />
                        <small class="password-error" style="display: none;color: red;"></small>
                        <div class="margin-top-25 col-sm-12 no-padding">
                            <div class="col-xs-5 hidden-sm hidden-md hidden-lg no-padding-xs float-left">
                                <button class="ovak-dark-button registration-change-modal" type="button">{{__('front.login.action.login')}}</button>
                            </div>
                            <div class="col-xs-5 col-sm-12 no-padding-xs margin-right-xs no-padding float-right">
                                <button class="ovak-dark-button" type="submit">{{__('front.register.action.register')}}</button>
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
</section>
<script src="{{asset('web/javascripts/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('web/javascripts/navbar.js')}}"></script>
<script src="{{asset('web/javascripts/slick.min.js')}}"></script>
<script src="{{asset('web/javascripts/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
<script>
    $(document).ready(function () {
        $('#login-form').submit(function (e) {
            e.preventDefault();
            let form = new FormData();
            let email = $(this).find('#login_email').val();
            let password = $(this).find('#login_password').val();
            let _token = $(this).find('input[name="_token"]').val();
            form.append('email',email);
            form.append('password',password);
            form.append('_token',_token);

            $('.login-error').css('display','none');
            axios({
                method: 'post',
                url: '{{route('user.login')}}',
                data: form,
                headers: {'Content-Type': 'application/json' }
            }).then(function (response) {
                    localStorage.setItem('currentUser',JSON.stringify(response.data));
                    window.location.reload();
                }).catch(error => {
                    $('.login-error').css('display','block');
                    $('.login-error').text(error.response.data.error);
                });
        })

        $('#regsiter-form').submit(function (e) {
            e.preventDefault();
            let form = new FormData();
            let firstName = $(this).find('#rfname').val();
            let lastName = $(this).find('#rlname').val();
            let email = $(this).find('#remail').val();
            let phoneNumber = $(this).find('#rphone').val();
            let password = $(this).find('#rpassword').val();
            let _token = $(this).find('input[name="_token"]').val();
            form.append('email',email);
            form.append('first_name',firstName);
            form.append('last_name',lastName);
            form.append('phone',phoneNumber);
            form.append('password',password);
            form.append('_token',_token);
            form.forEach(function (item,key){
                let el = $('.'+key+'-error');
                el.css('display','none');
                el.empty();
            });
            axios({
                method: 'post',
                url: '{{route('user.register')}}',
                data: form,
                headers: {'Content-Type': 'application/json' }
            }).then(function (response) {
                    localStorage.setItem('currentUser',JSON.stringify(response.data));
                    window.location.reload();
                }).catch(error => {
                    let errors = error.response.data;
                    Object.entries(errors).forEach(([key, value]) => {
                        $('.'+key+'-error').css('display','block');
                        value.forEach(function (text){
                            $('.'+key+'-error').append(text + "<br>");
                        });
                    })
                });
        });
        clearUser = () => {
            localStorage.clear();
        }
    })
</script>
</body>
</html>
