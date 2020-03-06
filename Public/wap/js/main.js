
$(function () {

    // index
    var swiper = new Swiper('.index .index-swiper .swiper-container', {
        autoplay: true,
        loop: true,
        pagination: {
            el: '.index .index-swiper .swiper-pagination',
        },
    });
    var swiper = new Swiper('.index .contact .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 10,
        autoplay: true,
        loop: true,
        pagination: {
            el: '.index .contact .swiper-pagination',
        },
    });

    $(".about-more").on('click', function () {

        if ($(this).prev().hasClass("heightAuto")) {

            $(this).text("MORE");

            $(this).prev().removeClass("heightAuto")

        } else {

            $(this).text("UP");

            $(this).prev().addClass("heightAuto")

        }
    })


    // 返回顶部
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".goTop").fadeIn(1000);

        } else {
            $(".goTop").fadeOut(1000);
        }
    });
    $(".goTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
    });

    // 导航
    $("header .menu .menu-btn").click(function () {
        // $("header .menu .nav-ul").show(600);
        var flag = $(this).next().is(':hidden');
        console.log(flag);
        if (flag) {
            $(this).next().show(600);
        } else {
            $(this).next().hide(600);
        }
    })
    $("header .menu .nav-ul a").click(function () {
        $("header .menu .nav-ul").hide();
    })

    $(window).scroll(function () {
        /* 判断滚动条 距离页面顶部的距离 100可以自定义*/
        if ($(window).scrollTop() > 100) {
            $("header .menu .nav-ul").hide();
        }

    });


})

var submitcount2 = 0;

function beforeSubmit2(form) {

    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (form.company.value == '') {
        alert('The company can not be empty');
        form.company.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}





