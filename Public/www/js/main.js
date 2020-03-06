$(function () {
    var swiper = new Swiper('.index .swiper-container', {
        loop: true,
        autoplay: true,
        pagination: {
            el: '.index .swiper-pagination',
        },
        navigation: {
            nextEl: '.index .swiper-button-next',
            prevEl: '.index .swiper-button-prev',
        },
    });

    // nav
    $("header .nav li").mouseover(function () {
        $(this).addClass("nav-active").siblings().removeClass("nav-active");
    })
    $("header .nav li").click(function () {
        $(this).addClass("nav-active").siblings().removeClass("nav-active");
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

    $(".index .contact .list .box .box-img").click(function () {
        // 选中样式
        var avtiveColor = $(this).hasClass('active');
        // console.log(avtiveColor)
        if (avtiveColor === false) {
            $(this).addClass('active')
        } else {
            $(this).removeClass('active')
        }
        var arr = [];
        var thiss = $(this)
        for (i = 0; i < thiss.length; i++) {
            if (!avtiveColor) {
                // var imgTitle = $(this).attr('title')
                // console.log(imgTitle)
                arr[i] = $(this).attr('title');

            }


        }
        // console.log(arr);
        // 将数组合并成字符串
        arrToStr = arr.toString();
        console.log(arrToStr);
        console.log(typeof arrToStr);


    })

    // 获取值
    // var boxImg = $(".index .contact .list .box .box-img");
    // for (i = 0; i < boxImg.length; i++) {
    //     boxImg[i].onclick = function () {
    //         var avtiveColor = $(this).hasClass('active');
    //         if (avtiveColor) {
    //             var imgTitle = $(this).attr('title')
    //             console.log(imgTitle)
    //         }

    //     }
    // }

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
