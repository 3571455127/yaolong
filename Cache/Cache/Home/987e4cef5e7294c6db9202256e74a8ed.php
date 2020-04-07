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
<div class="thank">
    <div class="container">
        <div class="row">
            <h5>Thanks for your inquiry!</h5>
            <p>Our Professional Team Will Contact With You In 24 Hours</p>
            <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span>s Back Home</a>
            <img class="back" src="__PUBLIC__/www/images/back.png" alt="back" onClick="javascript :history.go(-1);" />
        </div>
    </div>
</div>

<script src="__PUBLIC__/www/js/jquery.js"></script>
<script>
    $(function () {
        setTimeout("lazyGo();", 1000);
    });

    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else

            javascript: history.back(-1);
    }
</script>