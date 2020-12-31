<section class="modals">
    <div class="login-modal display-none">
        <div class="user-modal col-lg-6 col-lg-push-4 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1">
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
                            <a class="gold-color" href="#">{{__('front.forget_password.forgot_password')}}</a>
                        </div>
                        <div class="margin-top-25 col-sm-12 col-xs-12 no-padding">
                            <div class="clearfix"></div>
                            <div class="col-xs-5 hidden-sm hidden-md hidden-lg no-padding-xs float-left">
                                <button class="ovak-dark-button login-change-modal">{{__('front.login.sign_up')}}</button>
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
                    <h2>{{__('front.login.hello')}}</h2>
                    <p><span>{{__('front.login.join')}}</span> <span class="gold-color">{{__('front.head.title.name')}}</span> <span>{{__('front.login.text')}}</span></p>
                    <div class="margin-top-25">
                    <a class="ovak-button login-change-modal">{{__('front.login.sign_up')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="password-modal display-none">
        <div class="user-modal col-lg-6 col-lg-push-4 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1">
            <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                <div class="modal-contents margin-top-80 margin-bottom-80">
                    <form id="forgot-password-form" method="post">
                        {{csrf_field()}}
                        <div class="modal-close hidden-sm hidden-md hidden-lg"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">{{__('front.forget_password.reset_password')}}</h3>
                        <input name="email" id="forgot-password-mail" type="email" placeholder="{{__('front.login.email')}}" required />
                        <div class="margin-top-25 margin-bottom-25 col-sm-12 col-xs-12 no-padding">
                            <button class="ovak-dark-button" type="submit">{{__('front.forget_password.reset_password')}}</button>
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
                    <h2>{{__('front.forget_password.reset_password')}}</h2>
                    <p>{{__('front.forget_password.text')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="logout-modal display-none">
        <div class="user-modal col-lg-4 col-lg-push-4 col-md-6 col-md-push-4 col-sm-8 col-sm-push-3 text-center">
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
        <div class="user-modal col-lg-6 col-lg-push-4 col-md-8 col-md-push-3 col-sm-10 col-sm-push-1">
            <div class="col-lg-4 col-md-5 col-sm-6 no-padding hidden-xs">
                <img src="{{asset('img/login-form.png')}}" class="image-full-width modal-image" alt="" />
                <div class="clearfix"></div>
                <div class="modal-image-ovarlay">
                    <h2>{{__('front.register.welcome_back')}}</h2>
                    <p><span>{{__('front.register.text')}}</span> <span class="gold-color">{{__('front.head.title.name')}}</span> <span>{{__('front.register.website')}}</span></p>
                    <div class="margin-top-25">
                    <a class="ovak-button registration-change-modal">{{__('front.login.action.login')}}</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 white-background modal-form no-padding">
                <div class="clearfix"></div>
                <div class="modal-contents margin-top-80 margin-bottom-80">
                    <form id="regsiter-form">
                        {{csrf_field()}}
                        <div class="modal-close"><i class="fa fa-times"></i></div>
                        <h3 class="green-color ovak-font">{{__('front.register.registration')}}</h3>
                        <div class="col-sm-5 col-xs-12 float-left no-padding">
                            <input name="rfname" id="rfname" type="text" placeholder="{{__('front.register.first_name')}}" required />
                        </div>
                        <div class="col-sm-5 col-xs-12 float-right no-padding">
                            <input name="rlname" id="rlname" type="text" placeholder="{{__('front.register.last_name')}}" required />
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
                                <button class="ovak-dark-button" type="submit">{{__('front.register.action.sign_up')}}</button>
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
        <div class="user-modal col-lg-4 col-lg-push-4 col-md-6 col-md-push-4 col-sm-8 col-sm-push-3 text-center">
            <div class="col-lg-10 col-md-9 col-sm-8 white-background modal-form no-padding">
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="ask-img">
                    <img src="{{asset('web/images/logo.png')}}" />
                </div>
                <div class="modal-contents">
                    <h4>{{__('front.modals.ask.header')}}</h4>
                    <span>{{__('front.modals.ask.sub_header')}}</span>
                    <div class="clearfix"></div>
                    <div class="col-sm-8 col-sm-push-2 text-center margin-bottom-25 margin-top-25">
                        <button class="ovak-dark-button ask-confirm">confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="success-modal display-none">
        <div class="user-modal col-lg-4 col-lg-push-4 col-md-6 col-md-push-4 col-sm-8 col-sm-push-3 text-center">
            <div class="col-lg-10 col-md-9 col-sm-8 white-background modal-form no-padding">
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="modal-contents">
                    <div class="success-header"><i class="fas fa-5x fa-check-circle"></i></div>
                    <div class="margin-top-25">
                        <span>{{__('front.modals.success.header')}}</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-8 col-sm-push-2 text-center margin-bottom-25 margin-top-25">
                        <button class="ovak-dark-button ask-confirm">confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Verification-modal display-none">
        <div class="user-modal col-lg-4 col-lg-push-4 col-md-6 col-md-push-4 col-sm-8 col-sm-push-3 text-center">
            <div class="col-lg-10 col-md-9 col-sm-8 white-background modal-form no-padding">
                <div class="modal-close"><i class="fa fa-times"></i></div>
                <div class="modal-contents">
                    <h2>{{__('front.verification.header')}}</h2>
                    <div class="clearfix"></div>
                    <form id="verify-code" method="post">
                    {{csrf_field()}}
                    <input type="text" name="verify_code" id="verify_code" placeholder="{{__('front.verification.input')}}">
                        <small class="verify-code-error" style="display: none"></small>
                    <div class="col-sm-8 col-sm-push-2 text-center margin-bottom-25 margin-top-25">
                        <button class="ovak-dark-button">confirm</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
