var x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
document.addEventListener("click", closeAllSelect);
$(document).ready(function () {
    $("#nav-toggle").click(function () {
        $(".mobile-menu").toggleClass("display-none");
        $(".menu-background").toggleClass("display-none", "filter");
        $(".login-modal").addClass("display-none");
        $(".modal").removeClass("page-ovarlay");
        $(".consultancy-square").toggleClass("display-none");
        $(".links-carrier").toggleClass("display-none");
    });
    $(".menu-background").click(function () {
        $(".menu-background").addClass("display-none");
        $(".mobile-menu").toggleClass("display-none");
        $(".consultancy-square").toggleClass("display-none");
        $(".links-carrier").toggleClass("display-none");

    });
});
$(document).ready(function () {
    $("#show").click(function () {
        $(".filter-select").toggleClass("extend");
    });
});
var lang = document.getElementsByTagName("html")[0].getAttribute("dir");
if (lang == "ltr") {
    $(".variable").slick({
        rtl: false,
        dots: true,
        infinite: true,
        variableWidth: true,
        autoplay: true
    });
}
else if (lang == "rtl") {
    $(".variable").slick({
        rtl: true,
        dots: true,
        infinite: true,
        variableWidth: true,
        autoplay: true
    });
}
$(".slider-item").click(function () {
    $(".slider-item").removeClass("slick-current slick-active");
    $(this).toggleClass("slick-current slick-active");
});
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
$(".login").click(function () {
    $(".consultancy-square").addClass("display-none");
    $(".links-carrier").addClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $(".login-modal").toggleClass("display-none");
    $(".mobile-menu").addClass("display-none");
    $(".menu-background").toggleClass("display-none");
});
$(".modal-close").click(function () {
    $(".consultancy-square").toggleClass("display-none");
    $(".links-carrier").toggleClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $(".login-modal").addClass("display-none");
    $(".registration-modal").addClass("display-none");
    $(".logout-modal").addClass("display-none");
    $(".password-modal").addClass("display-none");
    $(".ask-modal").addClass("display-none");
});
$(".login-change-modal").click(function () {
    $(".registration-modal").toggleClass("display-none");
    $(".login-modal").toggleClass("display-none");
});

$(".registration-change-modal").click(function () {
    $(".registration-modal").toggleClass("display-none");
    $(".login-modal").toggleClass("display-none");
});
$(".logout").click(function () {
    $(".logout-modal").toggleClass("display-none");
    $(".consultancy-square").addClass("display-none");
    $(".links-carrier").addClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $(".menu-background").toggleClass("display-none");
    $(".mobile-menu").addClass("display-none");
});
$(".ask").click(function () {
    $(".ask-modal").toggleClass("display-none");
    $(".consultancy-square").addClass("display-none");
    $(".links-carrier").addClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $(".menu-background").toggleClass("display-none");
    $(".mobile-menu").addClass("display-none");
});
$(".ask-confirm").click(function () {
    $(".consultancy-square").toggleClass("display-none");
    $(".links-carrier").toggleClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $(".ask-modal").addClass("display-none");
});
$(".forget-cahnge-modal").click(function () {
    $(".password-modal").toggleClass("display-none");
    $(".login-modal").toggleClass("display-none");
});
$(document).ready(function () {
    $("select.select").change(function () {
        var selectedElement = $(this).children("option:selected").val();
        if (selectedElement === "all") {
            $(".column").removeClass("hide");
        }
        else {
            $(".column").addClass("hide");
            $("." + selectedElement).toggleClass("hide");
        }
    });
});
$(document).ready(function () {
    var item = $(".column , .developer-item");
    var numToShow = 8;
    var button = $("#show");
    var numInList = item.length;
    item.hide();
    if (numInList > numToShow) {
        button.show();
    }
    item.slice(0, numToShow).show();

    button.click(function () {
        var showing = item.filter(':visible').length;
        item.slice(showing - 1, showing + numToShow).fadeIn();
        var nowShowing = item.filter(':visible').length;
        if (nowShowing >= numInList) {
            button.hide();
        }
    });
});

$(".footer a[href^='#']").on("click", function (n) {
    n.preventDefault();
    var e = this.hash;
    $("html, body").animate({ scrollTop: $(e).offset().top }, 1e3, function () {
        window.location.hash = e;
    });
});

$(document).ready(function () {
    $(".st-click-action").click(function () {
        $(".click-action").removeClass("active");
        $(".st-click-action").addClass("active");
    });
    $(".nd-click-action").click(function () {
        $(".click-action").removeClass("active");
        $(".nd-click-action").addClass("active");
    });
});
document.getElementById("year").innerHTML = new Date().getFullYear();

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
            url: `${loginUri}`,
            data: form,
            headers: {'Content-Type': 'application/json' }
        }).then(function (response) {
            localStorage.setItem('currentUser',JSON.stringify(response.data));
            window.location.reload();
        }).catch(error => {
            $('.login-error').css('display','block');
            $('.login-error').text(error.response.data.errors.email[0]);
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
            url: `${registerUri}`,
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
$("#FirstProject").select2( {
    placeholder: "Select Project",
    allowClear: true
} );
$("#SecondProject").select2( {
    placeholder: "Select Project",
    allowClear: true
} );
