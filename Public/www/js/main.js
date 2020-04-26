$(function () {
    // banner   
    var mySwiper = new Swiper('.banner .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        pagination: {
            el: '.banner .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.banner .swiper-button-next',
            prevEl: '.banner .swiper-button-prev',
        },

    })


    // about  more
    $(".about-more").click(function () {
        $("#textcontain").height("auto"); //取消文字容器高度限制
        $("#btncontain").hide(); //隐藏查看更多按钮
    })


    var windowWidth = $(window).width();
    if (windowWidth < 768) {
        var mySwiper = new Swiper('.contact .swiper-container', {
            loop: true,
            autoplay: true,
            slidesPerView: 2,
            spaceBetween: 20,
            speed: 1200,
            pagination: {
                el: '.contact .swiper-pagination',
                clickable: true,
            },
        });
        $(".nav li").click(function () {
            $(this).parent().parent().removeClass("in");
        })

    }
    if (windowWidth >= 768) {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 10) {
                $(".navbar").addClass("navbar-fixed-top");
            } else {
                $(".navbar").removeClass("navbar-fixed-top");
            }
        });
    }
    // 滚动监听
    $('body').scrollspy({
        target: '#navbar-example'
    })
    // top
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
        }, 1000);
    });


})

// banner  



// contact
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
    } else if (form.com.value == '') {
        alert('The company can not be empty');
        form.com.focus();
        return false;
    } else if (form.Amount.value == '') {
        alert('The Amount can not be empty');
        form.Amount.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
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


