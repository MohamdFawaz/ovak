<section class="modals">
    <div class="col-sm-4 col-xs-10">
        <div class="login-modal white-background display-none text-direction">
            <div class="user-modal">
                <div class="modal-contents h-100">
                    <div class="container-fluid h-100">
                        <form class="h-100" id="login-form">
                            <div class="row h-100">
                                <div class="col-sm-6 h-100">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <div>
                                            <div class="modal-close d-xs-block d-sm-none"><i class="fa fa-times"></i></div>
                                            <h3 class="green-color ovak-font">{{__('front.login.sign_in')}} <span class="gold-color">{{__('front.head.title.name')}}</span></h3>
                                            {{csrf_field()}}
                                            <input name="email" type="email" id="login_email" placeholder="{{__('front.login.email')}}" required />
                                            <small class="login-error" style="display: none;color: red"></small>
                                            <input name="password" type="password" id="login_password" placeholder="{{__('front.login.password')}}" required />
                                            <div class="margin-top-10 forget-cahnge-modal"><a class="links" href="#">{{__('front.forget_password.forgot_password')}}</a></div>
                                            <div class="mt-3">
                                                <button class="ovak-dark-button pointer" type="submit">{{__('front.login.action.login')}}</button>
                                            </div>
                                            <div class="col-12 p-0 mt-3 d-xs-none d-sm-none">
                                                <span class="gold-color">{{__('front.login.dont_have_an_account')}}</span>
                                                <div class="mt-3">
                                                    <button class="ovak-dark-button pointer login-change-modal" type="button">{{__('front.login.sign_up')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="d-none d-sm-block">
                                        <img src="{{asset('static/assets/images/login-form.png')}}" class="img-fluid modal-image" alt="" />
                                        <div class="modal-close"><i class="fa fa-times"></i></div>
                                        <div class="modal-image-ovarlay">
                                            <h2>{{__('front.login.hello')}}</h2>
                                            <p>{{__('front.login.join')}} <span class="gold-color">{{__('front.head.title.name')}}</span> {{__('front.login.text')}}</p>
                                            <div class="clearfix"></div>
                                            <div class="margin-top-25">
                                                <a class="ovak-button login-change-modal">{{__('front.login.sign_up')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ask-modal display-none">
            <div class="modal-contents h-100 white-background">
                <div class="col-sm-12 green-background p-3">
                    <div class="px-3 row">
                        <div class="modal-close second-color"><i class="fa fa-times"></i></div>
                        <div class="gold-color">Project Name</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center h-100 mt-5">
                    <div class="col-12 text-center">
                        <div>
                            <i class="far fa-check-circle fa-5x gold-color"></i>
                        </div>
                        <div class="mt-3">
                            <h4 class="gold-color">Compeleted successfully</h4>
                        </div>
                        <div class="col-12 d-flex justify-content-center py-3">
                            <div class="col-6">
                                <button class="ovak-dark-button ask-confirm">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="password-modal white-background display-none text-direction">
            <div class="user-modal">
                <div class="modal-contents h-100">
                    <div class="container-fluid h-100">
                        <form class="h-100" id="forgot-password-form" method="post">
                            <div class="row h-100">
                                <div class="col-sm-6 h-100">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <div>
                                            {{csrf_field()}}
                                            {{method_field('post')}}
                                            <div class="modal-close d-xs-block d-sm-none"><i class="fa fa-times"></i></div>
                                            <h3 class="green-color ovak-font">{{__('front.forget_password.reset_password')}}</h3>
                                            <input name="email" id="forgot-password-mail" type="email" placeholder="{{__('front.login.email')}}" required />
                                            <div class="mt-3">
                                                <button class="ovak-dark-button pointer open-change-password-modal">{{__('front.forget_password.reset_password')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="d-none d-sm-block">
                                        <img src="{{asset('static/assets/images/login-form.png')}}" class="img-fluid modal-image" alt="" />
                                        <div class="modal-close"><i class="fa fa-times"></i></div>
                                        <div class="modal-image-ovarlay">
                                            <h2>{{__('front.forget_password.reset_password')}}</h2>
                                            <p>{{__('front.forget_password.text_1')}}</p>
                                            <p>{{__('front.forget_password.text_2')}}</p>
                                            <div class="margin-top-25">
                                                <a class="ovak-button password-change-modal">{{__('front.forget_password.sign_up')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="password-token-modal white-background display-none text-direction">
            <div class="user-modal">
                <div class="modal-contents h-100">
                    <div class="container-fluid h-100">
                        <form class="h-100" id="verify-code" method="post">
                            <div class="row h-100">
                                <div class="col-sm-6 p-0">
                                    <div class="d-none d-sm-block">
                                        <img src="{{asset('static/assets/images/login-form.png')}}" class="img-fluid modal-image" alt="" />
                                        <div class="modal-image-ovarlay">
                                            <h2>{{__('front.modals.email_password.title')}}</h2>
                                            <p>{{__('front.modals.email_password.enter_the_code_you_received_on_your_mail')}}</p>
                                            <p>{{__('front.modals.email_password.or_you_can_sign_up_now')}} </p>
                                            <div class="margin-top-25">
                                                <a class="ovak-button password-change-modal">{{__('front.modals.email_password.sign_up')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 h-100">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <div>
                                            <div class="modal-close"><i class="fa fa-times"></i></div>
                                            <h3 class="green-color ovak-font">{{__('front.modals.email_password.reset_password')}}</h3>
                                            {{csrf_field()}}
                                            <input name="code" id="verify_code" type="text" placeholder="{{__('front.modals.email_password.sign_up')}}" required />
                                            <span class="small text-red verify-code-error"></span>
                                            <div class="mt-3">
                                                <button class="ovak-dark-button pointer open-change-password-modal">
                                                    {{__('front.modals.email_password.submit')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="registration-modal white-background display-none text-direction">
            <div class="user-modal">
                <div class="modal-contents h-100">
                    <div class="container-fluid h-100">
                        <form class="h-100" id="regsiter-form">
                            <div class="row h-100">
                                <div class="col-sm-6 p-0">
                                    <div class="d-none d-sm-block">
                                        <img src="{{asset('static/assets/images/login-form.png')}}" class="img-fluid modal-image" alt="" />
                                        <div class="modal-image-ovarlay">
                                            <h2>{{__('front.register.welcome_back')}}</h2>
                                            <p>{{__('front.register.text')}} <span class="gold-color">{{__('front.head.title.name')}}</span> {{__('front.register.website')}}</p>
                                            <div class="margin-top-25">
                                                <a class="ovak-button registration-change-modal">{{__('front.login.action.login')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 h-100">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <div class="px-4-xs">
                                                {{csrf_field()}}
                                            <div class="modal-close"><i class="fa fa-times"></i></div>
                                            <h2 class="green-color ovak-font">{{__('front.register.registration')}}</h2>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input name="rfname" id="rfname" type="text" placeholder="{{__('front.register.first_name')}}" required />
                                                </div>
                                                <div class="col-sm-6">
                                                    <input name="rlname" id="rlname" type="text" placeholder="{{__('front.register.last_name')}}" required />
                                                </div>
                                            </div>
                                            <input name="remail" type="email" id="remail" placeholder="{{__('front.register.email_address')}}" required />
                                            <small class="email-error" style="display: none;color: red;"></small>
                                            <input name="rphone" type="text" id="rphone" placeholder="{{__('front.register.phone_number')}}" required />
                                            <small class="phone-error" style="display: none;color: red;"></small>
                                            <input name="rpassword" type="password" id="rpassword" placeholder="{{__('front.register.password')}}" required />
                                            <small class="password-error" style="display: none;color: red;"></small>
                                            <div class="mt-3">
                                                <button class="ovak-dark-button pointer" type="submit">{{__('front.register.action.sign_up')}}</button>
                                            </div>
                                            <div class="col-12 p-0 mt-3 d-xs-none d-sm-none">
                                                <span class="gold-color">{{__('front.register.already_have_account')}}</span>
                                                <div class="mt-3">
                                                    <button class="ovak-dark-button pointer registration-change-modal" type="button">{{__('front.login.action.login')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

