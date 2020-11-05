<section class="footer">
    <div class="col-sm-4 hidden-xs white-background footer-img">
        <div class="footer-image-decoration"></div>
        <img class="" src="{{asset('img/footer-logo.png')}}" alt="" />
    </div>
    <div class="col-sm-8">
        <div class="col-md-11 col-md-push-1 col-sm-12">
            <div class="footer-links">
                <div class="col-md-2 col-sm-4">
                    <h5><a href="./index.html">Home</a></h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="">Vision & Mission</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5><a href="">Projects</a></h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="">Commercial</a></li>
                        <li><a href="">Residential</a></li>
                        <li><a href="">Residential</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5><a href="">Developers</a></h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="">Commercial</a></li>
                        <li><a href="">Residential</a></li>
                        <li><a href="">Residential</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5><a href="">Consultancy</a></h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="">Commercial</a></li>
                        <li><a href="">Residential</a></li>
                        <li><a href="">Residential</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4">
                    <h5><a href="">About us</a></h5>
                    <div class="gold-border-bottom col-sm-7"></div>
                    <ul>
                        <li><a href="">Commercial</a></li>
                        <li><a href="">Residential</a></li>
                        <li><a href="">Residential</a></li>
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
        <img class="" src="{{asset('img/footer-logo.png')}}" alt="" />
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12 no-padding copy-right">
        <h5>Copyright<sup>©</sup> 2020 All rights reserved OVAK.</h5>
    </div>
    <div class="clearfix"></div>
</section>
<script src="{{asset('web/javascripts/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web/javascripts/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="{{asset('web/javascripts/navbar.js')}}"></script>
<script src="{{asset('web/javascripts/scripts.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function () {
        $("#nav-toggle").click(function () {
            $(".mobile-menu").toggleClass("display-block","display-none");
            $(".menu-background").toggleClass("filter","display-none");
            $(".login-modal").addClass("display-none");
            $(".ovarlay").removeClass("header-ovarlay");
            $(".consultancy-square").removeClass("display-none");
            $(".links-carrier").removeClass("display-none");
        });
        $(".menu-background").click(function () {
            $(".menu-background").addClass("display-none");
            $(".mobile-menu").removeClass("display-block","display-none");
        })
    });
</script>
<script>
    $(document).ready(function () {
        $("#show").click(function () {
            $(".filter-select").toggleClass("extend");
        });
    });
</script>
<script>
    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true,
        autoplay: true
    });
</script>
<script>
    $(".slider-item").click(function () {
        $(".slider-item").removeClass("slick-current slick-active");
        $(this).toggleClass("slick-current slick-active");
    });
</script>
<script>
    let mybutton = document.getElementById("top");
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script>
    $(".login").click(function () {
        $(".consultancy-square").toggleClass("display-none");
        $(".links-carrier").toggleClass("display-none");
        $(".ovarlay").toggleClass("header-ovarlay");
        $(".login-modal").toggleClass("display-none");
        $(".mobile-menu").removeClass("display-block","display-none");
        $(".menu-background").toggleClass("filter","display-none");
    });
</script>
<script>
    $(".modal-close").click(function () {
        $(".consultancy-square").toggleClass("display-none");
        $(".links-carrier").toggleClass("display-none");
        $(".ovarlay").toggleClass("header-ovarlay");
        $(".login-modal").toggleClass("display-none");
    });
</script>
<script>
    $(".registration-modal-close").click(function () {
        $(".consultancy-square").toggleClass("display-none");
        $(".links-carrier").toggleClass("display-none");
        $(".ovarlay").toggleClass("header-ovarlay");
        $(".registration-modal").toggleClass("display-none");
    });
</script>
<script>
    $(".login-change-modal").click(function () {
        $(".registration-modal").toggleClass("display-none");
        $(".login-modal").toggleClass("display-none");
    });

</script>
<script>
    $(".registration-change-modal").click(function () {
        $(".registration-modal").toggleClass("display-none");
        $(".login-modal").toggleClass("display-none");
    });
</script>
@yield('js')
</body>
</html>
