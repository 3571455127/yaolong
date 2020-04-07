<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="Robots" content="all">

    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <!-- css -->
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <!-- js -->
    <script type="text/javascript" src="__PUBLIC__/www/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MJRNG84');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- header -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJRNG84" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="phone col-lg-3 col-md-3 col-sm-3"><span>Tel: <?php echo ($phone); ?></span></div>
                    <div class="eamil col-lg-3 col-md-3 col-sm-3">
                        <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                            <span>Email: <?php echo ($email); ?></span></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="/Public/www/images/logo.png"></a>
                </div>

                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">HOME</a></li>
                            <li><a href="#product">PRODUCT</a></li>
                            <li><a href="#case">CASE</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

    </header>
<div class="index">

    <!-- banner -->
    <div class="banner" id="home">

        <!-- pc -->
        <div class="pc-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 ); endforeach; endif;?>
                    <div class="swiper-slide">
                        <a href="#products" title="<?php echo ($r["title"]); ?>" class="banner-a">
                            <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                        </a>
                    </div>
                    </YP:list>
                </div>
                <div class="container">
                    <div class="row">
                        <form method="post" onsubmit="return beforeSubmit3(this);">
                            <h6>Contact Us</h6>
                            <div class="list">
                                <div class="box">
                                    <p>Name <span> *</span></p>
                                    <input type="text" name="name">
                                </div>
                                <div class="box">
                                    <p>E-mail <span> *</span></p>
                                    <input type="text" name="email">
                                </div>
                                <div class="box">
                                    <p>Company Name <span> *</span></p>
                                    <input type="text" name="company">
                                </div>
                                <div class="box">
                                    <p>Amount </p>
                                    <input type="text">
                                </div>
                                <div class="box">
                                    <p>Message </p>
                                    <textarea></textarea>
                                </div>
                            </div>
                            <div style="text-align: center;">
                                <input type="submit" value="Send" class="banner-sub">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <!-- wap -->
        <div class="wap-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>" target="_blank"><img
                                    src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>

    <!-- product -->
    <div id="product">
        <div class="product">
            <!-- pc -->
            <div class="pc-product">
                <?php getcatvar('page','id = 73','cont');?>
            </div>

            <!-- wap -->
            <div class="wap-product">
                <?php getcatvar('page','id = 73','pcont');?>
            </div>
        </div>

    </div>

    <!-- choose -->
    <div class="choose">
        <?php getcatvar('page','id = 77','cont');?>
    </div>

    <!-- case -->
    <div id="case">
        <div class="case">
            <?php getcatvar('page','id = 108','cont');?>
        </div>
    </div>

    <!-- about -->
    <div id="about">
        <div class="about">
            <?php getcatvar('page','id = 74','cont');?>
        </div>
    </div>

    <!-- contact -->
    <div id="contact">
        <div class="contact">
            <!-- pc -->
            <div class="pc-contact">
                <h3>contact us</h3>
                <h6>Get Free Samples Now</h6>
                <h6>Two steps to getting free consultant</h6>
                <div class="container">
                    <div class="row">

                        <div class="list">
                            <div class="title"> ①Select Product </div>
                            <div class="box clearfix selectproduct">

                                <?php  $_result=M("slide_data")->field("*")->where("fid = 3 AND status=1 ")->order("id desc")->limit("10")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="box-img" title="<?php echo ($r["title"]); ?>" onclick="checkedf(this);" check="0">
                                        <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    </div><?php endforeach; endif;?>

                            </div>
                            <style>
                                .redborder img {
                                    border: 2px solid red;
                                }
                            </style>
                            <script>
                                //    alert(1);
                                function checkedf(obj) {
                                    var check = parseInt($(obj).attr('check'));
                                    //    alert(check);
                                    if (check) {
                                        $(obj).attr('check', 0);
                                        $(obj).removeClass('redborder');
                                    } else {
                                        $(obj).attr('check', 1);
                                        $(obj).addClass('redborder');
                                    }
                                    sproduct();
                                }

                                function sproduct() {
                                    var producttitle = '';
                                    $('.selectproduct').find('div').each(function () {
                                        var check = parseInt($(this).attr('check'));
                                        if (check) {
                                            //            alert($(this).attr('title'));
                                            producttitle += $(this).attr('title') + ';';
                                        }
                                        $('#product').val(producttitle);
                                    })
                                }
                            </script>
                        </div>

                        <div class="step2"> ②Fill &amp; submit the form</div>

                        <div class="form-box clearfix">

                            <form class="col-lg-7 col-md-7" name="form" method="post"
                                onsubmit="return beforeSubmit2(this);" action="index.php?g=Home&a=message">
                                <div class="clearfix" style="padding-bottom:10px">
                                    <input name="forward" type="hidden"
                                        value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>" />
                                    <input type="hidden" name="product" id="product" value="" />
                                    <div class="box clearfix">
                                        <div class="box-left col-lg-4 col-md-4">
                                            <p>Name <span> *</span></p>
                                        </div>
                                        <div class="col-lg-8 col-md-8"> <input type="text" name="name"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="box-left col-lg-4 col-md-4">
                                            <p>Email <span>*</span></p>
                                        </div>
                                        <div class="col-lg-8 col-md-8"> <input type="text" name="email"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="box-left col-lg-4 col-md-4">
                                            <p>Company name <span>*</span></p>
                                        </div>
                                        <div class="col-lg-8 col-md-8"> <input type="text" name="com"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="box-left col-lg-4 col-md-4">
                                            <p>Amount </p>
                                        </div>
                                        <div class="col-lg-8 col-md-8"> <input type="text" name="Amount"></div>
                                    </div>
                                    <div class="box clearfix">
                                        <div class="box-left col-lg-4 col-md-4">
                                            <p> Message</p>
                                        </div>
                                        <div class="col-lg-8 col-md-8"> <textarea name="message"></textarea></div>
                                    </div>
                                </div>
                                <div class="box-btns"> <input type="submit" value="SUBMIT" class="submit-btn"></div>
                            </form>
                            <div class="details col-lg-5 col-md-7">
                                <div class="boxs clearfix">
                                    <div class="boxs-img col-lg-2 col-md-2"><img
                                            src="/Public/www/images/ico-contact1.png" alt="">
                                    </div>
                                    <div class="boxs-txt col-lg-10 col-md-10">
                                        <?php echo ($address); ?>
                                    </div>
                                </div>
                                <div class="boxs clearfix">
                                    <div class="boxs-img col-lg-2 col-md-2"><img
                                            src="/Public/www/images/ico-contact2.png" alt="">
                                    </div>
                                    <div class="boxs-txt col-lg-10 col-md-10">
                                        <a href="mailto:<?php echo ($email); ?>" target="_blank"
                                            style="color:#737277">Email:<?php echo ($email); ?></a>
                                    </div>
                                </div>
                                <div class="boxs clearfix">
                                    <div class="boxs-img col-lg-2 col-md-2"><img
                                            src="/Public/www/images/ico-contact3.png" alt="">
                                    </div>
                                    <div class="boxs-txt col-lg-10 col-md-10">
                                        Phone:<?php echo ($phone); ?>
                                    </div>
                                </div>
                                <div class="boxs clearfix">
                                    <div class="boxs-img col-lg-2 col-md-2"><img
                                            src="/Public/www/images/ico-contact4.png" alt="">
                                    </div>
                                    <div class="boxs-txt col-lg-10 col-md-10">
                                        Tel:<?php echo ($Tel); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- wap -->
            <div class="wap-contact">
                <h3>contact us</h3>
                <h6>Get Free Samples Now</h6>
                <h6>Two steps to getting free consultant</h6>
                <div class="container">
                    <div class="row">

                        <div class="list">
                            <div class="title"> ①Select Product </div>
                            <div class="box">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--<?php getcatvar('page','id = 78','pcont');?>-->
                                        <?php  $_result=M("slide_data")->field("*")->where("fid = 3 AND status=1 ")->order("id desc")->limit("10")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide" title="<?php echo ($r["title"]); ?>" onclick="checkedf(this);"
                                                check="0">
                                                <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                            </div><?php endforeach; endif;?>

                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <style>
                                .redborder img {
                                    border: 2px solid red;
                                }
                            </style>
                            <script>
                                //    alert(1);
                                function checkedf(obj) {
                                    var check = parseInt($(obj).attr('check'));
                                    //    alert(check);
                                    if (check) {
                                        $(obj).attr('check', 0);
                                        $(obj).removeClass('redborder');
                                    } else {
                                        $(obj).attr('check', 1);
                                        $(obj).addClass('redborder');
                                    }
                                    sproduct();
                                }

                                function sproduct() {
                                    var producttitle = '';
                                    $('.selectproduct').find('div').each(function () {
                                        var check = parseInt($(this).attr('check'));
                                        if (check) {
                                            //            alert($(this).attr('title'));
                                            producttitle += $(this).attr('title') + ';';
                                        }
                                        $('#product').val(producttitle);
                                    })
                                }
                            </script>
                        </div>

                        <div class="step2"> ②Fill &amp; submit the form</div>

                        <div class="form-box clearfix">

                            <form name="form" method="post" onsubmit="return beforeSubmit2(this);"
                                action="index.php?g=Home&a=message">
                                <input type="hidden" name="product" id="product" value="" />
                                <div class="clearfix" style="padding-bottom:10px">

                                    <div class="clearfix">
                                        <div class="box col-xs-6">
                                            <div class="box-left">
                                                <p>Name <span> *</span></p>
                                            </div>
                                            <input type="text" name="name">
                                        </div>
                                        <div class="box col-xs-6">
                                            <div class="box-left">
                                                <p>Email <span>*</span></p>
                                            </div>
                                            <input type="text" name="email">
                                        </div>
                                        <div class="box col-xs-6">
                                            <div class="box-left">
                                                <p>Company name <span>*</span></p>
                                            </div>
                                            <input type="text" name="com">
                                        </div>
                                        <div class="box col-xs-6">
                                            <div class="box-left">
                                                <p>Amount </p>
                                            </div>
                                            <input type="text" name="Amount">
                                        </div>
                                    </div>
                                    <div class="box ">
                                        <div class="box-left">
                                            <p> Message</p>
                                        </div>
                                        <textarea name="message"></textarea>
                                    </div>
                                </div>
                                <div class="btns"> <input type="submit" value="SUBMIT"></div>
                            </form>
                            <div class="details">
                                <div class="boxs clearfix">
                                    <div class="boxs-img"><img src="/Public/www/images/ico-contact1.png" alt="">
                                    </div>
                                    <div class="boxs-txt">
                                        <?php echo ($address); ?>
                                    </div>
                                </div>
                                <div class="boxs clearfix">
                                    <div class="boxs-img"><img src="/Public/www/images/ico-contact2.png" alt="">
                                    </div>
                                    <div class="boxs-txt">
                                        <a class="emails" href="mailto:<?php echo ($email); ?>" target="_blank">
                                            Email:<?php echo ($email); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="boxs clearfix">
                                    <div class="boxs-img"><img src="/Public/www/images/ico-contact3.png" alt="">
                                    </div>
                                    <div class="boxs-txt">
                                        Phone:<?php echo ($phone); ?>
                                    </div>
                                </div>
                                <div class="boxs clearfix">
                                    <div class="boxs-img"><img src="/Public/www/images/ico-contact4.png" alt="">
                                    </div>
                                    <div class="boxs-txt">
                                        Tel:<?php echo ($Tel); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- footer -->
    <div class="copy"> <?php echo ($cop); ?> </div>
    <div class="goTop" style="display: block;">
        <i class="topIcon"></i>
        <p>TOP</p>
    </div>


</div>
</body>

</html>