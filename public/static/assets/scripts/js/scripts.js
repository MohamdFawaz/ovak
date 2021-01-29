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
//$(".variable").slick({
//    rtl: false,
//    dots: true,
//    infinite: true,
//    variableWidth: true,
//    autoplay: true
//});
var lang = document.getElementsByTagName("html")[0].getAttribute("dir");
if (lang == "ltr") {
    $(".variable").slick({
        rtl: false,
        dots: false,
        infinite: true,
        variableWidth: true,
        autoplay: true,
    });
    $(".inner-arrow").append('<i class="fa fa-arrow-right"></i>');
}
else if (lang == "rtl") {
    $(".variable").slick({
        rtl: true,
        dots: false,
        infinite: true,
        variableWidth: true,
        autoplay: true,
    });
    $(".inner-arrow").append('<i class="fa fa-arrow-left"></i>');
}
$(".slider-item").click(function () {
    $(".slider-item").removeClass("slick-current slick-active");
    $(this).toggleClass("slick-current slick-active");
});
function changeLanguage() {
    if ($("html").attr("dir") == ("rtl")) {
        $("html").attr("dir", "ltr");
        $(".mobile-menu").addClass("display-none");
        $(".menu-background").toggleClass("display-none");
        $(".consultancy-square").removeClass("display-none");
        $(".links-carrier").removeClass("display-none");
    } else {
        $("html").attr("dir", "rtl");
        $(".mobile-menu").addClass("display-none");
        $(".menu-background").toggleClass("display-none");
        $(".consultancy-square").removeClass("display-none");
        $(".links-carrier").removeClass("display-none");
    }
}


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
    $(".login-modal").toggleClass("display-none");
    $(".mobile-menu").addClass("display-none");
    $(".menu-background").toggleClass("display-none");
    $("body").toggleClass("custom-body");
    $(".consultancy-square").addClass("display-none");
    $(".links-carrier").addClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
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
    $("body").toggleClass("custom-body");
});
$(".login-change-modal").click(function () {
    $(".registration-modal").toggleClass("display-none");
    $(".login-modal").toggleClass("display-none");
});
$(".open-password-change-modal").click(function () {
    $(".password-modal").toggleClass("display-none");
    $(".blolom").toggleClass("display-none");
});
$(".password-change-modal").click(function () {
    $(".password-modal").toggleClass("display-none");
    $(".registration-modal").toggleClass("display-none");
});
$(".registration-change-modal").click(function () {
    $(".registration-modal").toggleClass("display-none");
    $(".login-modal").toggleClass("display-none");
});
$(".logout").click(function () {

});
$(".ask").click(function () {
    $(".ask-modal").toggleClass("display-none");
    $(".links-carrier").toggleClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $("body").toggleClass("custom-body");
});
$(".ask-confirm").click(function () {
    $(".links-carrier").toggleClass("display-none");
    $(".modals").toggleClass("page-ovarlay");
    $(".ask-modal").toggleClass("display-none");
    $("body").toggleClass("custom-body");
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
//$(document).ready(function () {
//    var item = $(".column , .developer-item");
//    var numToShow = 8;
//    var button = $("#show");
//    var numInList = item.length;
//    item.hide();
//    if (numInList > numToShow) {
//        button.show();
//    } else {
//        button.hide()
//    }
//    item.slice(0, numToShow).show();

//    button.click(function () {
//        var showing = item.filter(':visible').length;
//        item.slice(showing - 1, showing + numToShow).fadeIn();
//        var nowShowing = item.filter(':visible').length;
//        if (nowShowing >= numInList) {
//            button.hide();
//        }
//    });
//});

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
$("#FirstProject").select2({
    placeholder: "Select Project",
    allowClear: true
});
$("#SecondProject").select2({
    placeholder: "Select Project",
    allowClear: true
});

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
    $('#forgot-password-form').submit(function (e) {
        e.preventDefault();
        let form = new FormData();
        let email = $(this).find('#forgot-password-mail').val();
        let _token = $(this).find('input[name="_token"]').val();
        form.append('email',email);
        form.append('_token',_token);

        axios({
            method: 'post',
            url: `${forgotPasswordUri}`,
            data: form,
            headers: {'Content-Type': 'application/json' }
        }).then(function (response) {
            $(".password-modal").addClass("display-none")
            $(".password-token-modal").removeClass("display-none")
            // window.location.reload();
        }).catch(error => {
            console.error(error);
        });
    })

    $('#verify-code').submit(function (e) {
        e.preventDefault();
        let form = new FormData();
        let email = $('#forgot-password-mail').val();
        let code = $(this).find('#verify_code').val();
        let _token = $(this).find('input[name="_token"]').val();
        form.append('email',email);
        form.append('token',code);
        form.append('_token',_token);
        $(".verify-code-error").css('display','none');
        axios({
            method: 'post',
            url: `${verifyCodeUri}`,
            data: form,
            headers: {'Content-Type': 'application/json' }
        }).then(function (response) {
            console.log(response);
            // window.location.reload();
        }).catch(error => {
            $(".verify-code-error").css('display','block');
            let errors = error.response.data;
            $(".verify-code-error").text(errors);
        });
    })

    clearUser = () => {
        localStorage.clear();
    }

    getFromFields = (installmentForm, formFields) => {
        formFields.totalAmount = $(installmentForm+" input[name='installment-total-amount']");
        formFields.downPaymentAmount = $(installmentForm+" input[name='installment-down-payment-amount']");
        formFields.downPaymentPercentage = $(installmentForm+" input[name='installment-down-payment-percentage']");
        formFields.years = $(installmentForm+" input[name='installment-years']");
        formFields._token = $(installmentForm+" input[name='_token']");
        return formFields;
    }

    calculateInstallment = (e) => {
        e.preventDefault();
        let currentUser = localStorage.getItem('currentUser');
        if (currentUser) {
            let formFields = {};
            let installmentForm = '#installment-form';

            formFields = getFromFields(installmentForm, formFields);

            if (formFields.totalAmount.val() &&
                (formFields.downPaymentAmount.val() || formFields.downPaymentPercentage.val()) &&
                formFields.years.val()) {
                let result = {};
                let remainingAmount = 0;
                let remainingAmountOverYears = 0;
                if (formFields.downPaymentAmount.val().length) {
                    console.log(formFields.downPaymentAmount.val());
                    remainingAmount = (formFields.totalAmount.val() - formFields.downPaymentAmount.val());
                } else {
                    remainingAmount = (formFields.totalAmount.val() - ((parseInt(formFields.downPaymentPercentage.val()) / 100)) * formFields.totalAmount.val());
                }
                remainingAmountOverYears = (remainingAmount / formFields.years.val()).toFixed(1);

                result.monthly = ((remainingAmountOverYears) / 12).toFixed(1);
                result.quarterly = (remainingAmountOverYears / 12 * 3).toFixed(1);
                result.yearly = (remainingAmountOverYears / formFields.years.val()).toFixed(1);

                initInstallmentTable(remainingAmount, result,formFields.years.val());
                logUserCalculation(formFields,JSON.parse(currentUser));
            }
        }else {
            $('#login').trigger('click')
        }
    }
    initInstallmentTable = (remaining,result,year) => {
        let currency = "LE";
        $('#remaining-result').text(remaining + currency)
        $('#monthly').text(result.monthly + currency)
        $('#monthly-count').text(year * 12)
        $('#quarterly').text(result.quarterly + currency)
        $('#quarterly-count').text(year * 4)
        $('#yearly').text(result.yearly + currency)
        $('#yearly-count').text(year * 2)
        $('#installment-table').removeClass('hide');
        $('#remaining-result-field').css('display','block');
    }
    clearInstallment = (e) => {
        e.preventDefault();
        let formFields = {};
        let installmentForm = '#installment-form';
        formFields = getFromFields(installmentForm,formFields);
        formFields.totalAmount.val('');
        formFields.downPaymentAmount.val('');
        formFields.downPaymentPercentage.val('');
        formFields.years.val('');
        $('#remaining-result').empty()
        $('#monthly').empty();
        $('#quarterly').empty();
        $('#yearly').empty();
        $('#installment-table').addClass('hide');
        $('#remaining-result-field').css('display','none');
    }
    convertDownPayment = (e) =>
    {
        let formFields = {};
        let installmentForm = '#installment-form';
        formFields = getFromFields(installmentForm,formFields);

        if (formFields.totalAmount.val().length){

            if (e.currentTarget.classList.contains('percentage')){
                formFields.downPaymentAmount.val('');
            }else{
                formFields.downPaymentPercentage.val('');
            }

            if (formFields.downPaymentAmount.val().length && (parseInt(formFields.downPaymentAmount.val()) <= parseInt(formFields.totalAmount.val()))){
                let downPaymentPercentage = (formFields.downPaymentAmount.val() / (formFields.totalAmount.val() * 100));
                downPaymentPercentage = downPaymentPercentage * 10000;
                formFields.downPaymentPercentage.val(Math.ceil(downPaymentPercentage));
            } else if (formFields.downPaymentPercentage.val().length && formFields.downPaymentPercentage.val().match("^[1-9]$|^[1-9][0-9]$|^(100)$")){
                let downPaymentInAmount = ((parseInt(formFields.downPaymentPercentage.val()) / 100) * formFields.totalAmount.val());
                formFields.downPaymentAmount.val(downPaymentInAmount);
            }
        }
    }

    logUserCalculation = (formFields,user) =>
    {
        let form = new FormData();
        let userId = user.id;
        let projectTotalAmount = formFields.totalAmount.val();
        let downPayment = formFields.downPaymentAmount.val();
        let numberOfYears = formFields.years.val();
        let _token = formFields._token.val();
        form.append('user_id',userId);
        form.append('project_total_amount',projectTotalAmount);
        form.append('down_payment',downPayment);
        form.append('number_of_years',numberOfYears);
        form.append('_token',_token);
        axios({
            method: 'post',
            url: `${logUserCalculationUri}`,
            data: form,
            headers: {'Content-Type': 'application/json' }
        }).then(function (response) {
            console.log(response);
        }).catch(error => {
            console.error(error);
        });
    }

    $('.trigger-ask').on('click',function (e) {
        let entityId = $(this).data('entityId');
        let entityType = $(this).data('entityType');
        let entityName = $(this).data('entityName');
        $('#ask-modal-title').text(entityName);
        if (localStorage.getItem('currentUser') && entityId !== undefined){
            let currentUser = JSON.parse(localStorage.getItem('currentUser'));
            logUserAsking(currentUser,entityId, entityType);
        }else{
            e.stopPropagation();
            $('#login').trigger('click');
        }
    });

    logUserAsking = (currentUser,entityId, entityType) => {
        let form = new FormData();
        let userId = currentUser.id;
        form.append('user_id',userId);
        form.append('entity_id',entityId);
        form.append('entity_type',entityType);
        axios({
            method: 'post',
            url: `${logUserAskingUri}`,
            data: form,
            headers: {'Content-Type': 'application/json' }
        }).then(function (response) {
            console.log(response);
        }).catch(error => {
            console.error(error);
        });
    }

    checkIsUserLoggedIn = () => {
        let currentUser = localStorage.getItem('currentUser');
        if (currentUser != null){
            return currentUser
        }
        return false;
    }

    $('#consultancy-form').on('submit',function (e){
        e.preventDefault();
        var user =  checkIsUserLoggedIn();
        if (user) {
            let form = new FormData();
            let userId = JSON.parse(user).id;
            let unit_type_id = $('#consultancy-form select[name="unit_type"]').val();
            let district_id = $('#consultancy-form select[name="district_id"]').val();
            let first_project = $('#consultancy-form select[name="first_project"]').val();
            let _token = $('#consultancy-form input[name="_token"]').val();
            form.append('user_id', userId);
            form.append('unit_type_id', unit_type_id);
            form.append('district_id', district_id);
            form.append('project_id', first_project);
            form.append('_token', _token);
            axios({
                method: 'post',
                url: `${consultFormUri}`,
                data: form,
                headers: {'Content-Type': 'application/json'}
            }).then(function (response) {
                console.log(response);
            }).catch(error => {
                console.error(error);
            });
        } else {
            $('#login').trigger('click');
        }
    })
})
