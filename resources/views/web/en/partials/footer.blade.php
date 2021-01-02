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
                    <li> <a href="https://www.facebook.com/ovakestate" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"> </i></a></li>
                    <li><a href="https://www.instagram.com/ovakestate"  target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/OVAK48555581" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href=" https://wa.me/+0201030796861 " target="_blank" class="twitter"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
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
                        <button type="button" class="subscription-button">SUBSCRIBE</button>
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
@include('web.en.partials.Modals')
<script src="{{asset('web/javascripts/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('web/javascripts/select.js')}}"></script>
<script src="{{asset('web/javascripts/navbar.js')}}"></script>
<script src="{{asset('web/javascripts/slick.min.js')}}"></script>
<script src="{{asset('web/javascripts/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
<script>
    var loginUri = "{{route('user.login')}}"
    var registerUri = "{{route('user.register')}}"
    var logUserCalculationUri = "{{route('user.logCalculation')}}"
    var logUserAskingUri = "{{route('user.logAsking')}}"
    var forgotPasswordUri = "{{route('user.forgotPassword')}}"
    var verifyCodeUri = "{{route('user.verifyCode')}}"

</script>
</body>
</html>
