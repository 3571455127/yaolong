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
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper-4.5.0.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">

    <!-- 字体引入 -->
    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('__PUBLIC__/www/font/Roboto.ttf');
        }
    </style>
    <script type="text/javascript" src="__PUBLIC__/www/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/www/js/zoom.js"></script>
    <script>
        $(function () {
            /*
             smallimg   // 小图
             bigimg  //点击放大的图片
             mask   //黑色遮罩
             */
            var obj = new zoom('mask', 'bigimg', 'smallimg');
            obj.init();
        })
    </script>
</head>

<body>
    <!-- header -->

    <header>
        <div class="container">
            <div class="row">

                <div class="top-bar clearfix">
                    <div class="infos">
                        <div class="phone pull-left">
                            <img src="__PUBLIC__/www/images/phone.png" alt="">
                            <span>Tel:<?php echo ($phone); ?></span>
                        </div>
                        <div class="email pull-left">
                            <img src="__PUBLIC__/www/images/email.png" alt="">
                            <a href="mailto:<?php echo ($email); ?>" target="_blank"
                                style="color:#524F3F"><span>Email:<?php echo ($email); ?></span></a></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="top-nav clearfix">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="logo col-lg-4 col-md-4 col-sm-4">
                            <img src="__PUBLIC__/www/images/logo.png" alt="">
                        </div>
                        <div class="list col-lg-8 col-md-8 col-sm-8">
                            <ul class="clearfix">
                                <li class="nav-active"><a href="javascript:;">HOME</a></li>
                                <li><a href="#product">PRODUCT</a></li>
                                <li><a href="#news">NEWS</a></li>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#contact">Contact us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </header>
<div class="index">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["pic"]); ?>"
                            alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- odds -->
    <div class="odds">
        <a name="odds"></a>
        <?php getcatvar('page','id = 77','cont');?>
    </div>

    <!-- product -->
    <div class="product">
        <a name="product"></a>
        <?php getcatvar('page','id = 73','cont');?>
    </div>

    <!-- news -->
    <div class="news">
        <a name="news"></a>
        <?php getcatvar('page','id = 108','cont');?>
    </div>


    <!-- about -->
    <div class="about">
        <a name="about"></a>
        <!-- <?php getcatvar('page','id = 74','cont');?> -->
        <h3>
            about us
        </h3>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="top clearfix">
                        <div class="box-img col-lg-6 col-md-6">
                            <img src="/Public/www/images/about1.png" alt="" />
                        </div>
                        <div class="txt col-lg-6 col-md-6">
                            <div class="title">
                                Guangdong Yaolong Metals Technology Co., Ltd
                            </div>
                            <p>
                                Yaolong is established in 2004. The headquarter of the company is located in Foshan
                                city,Guangdong province, China. We are a professional manufacturer engaged in the
                                research, design, production and distribution of high-class stainless steel bollards.Our
                                company has a complete series of advanced equipment from Germany, Japan, Italy and
                                France, including 16meter long bending machine, plasma auto- welding machine, 12meter
                                laser cutting machine, polishing facility etc.We have a team of professional designers,
                                engineers and skillful welders.We have passed the authentication of the ISO 9001:2000
                                International Quality Management System, the ISO14001 Environment Management System, the
                                GB/T28001-2001 Occupational Health and Safety Management System.
                            </p>
                        </div>
                    </div>
                    <div class="lines">
                    </div>
                    <div class="list">
                        <h5>
                            Certificate
                        </h5>
                        <div class="box-img">
                            <img src="/Public/www/images/ico-about.png" alt="" />
                        </div>
                        <div>
                          
                            <div class="imgs clearfix">
                                <div class="images col-lg-4 col-md-4">
                                    <img class="smallimg" src="/Public/www/images/about2.png" alt="" />
                                </div>
                                <div class="images col-lg-4 col-md-4">
                                    <img class="smallimg" src="/Public/www/images/about3.png" alt="" />
                                </div>
                                <div class="images col-lg-4 col-md-4">
                                    <img class="smallimg" src="/Public/www/images/about4.png" alt="" />
                                </div>
                                <img src="" alt="" class="bigimg">
                                <div class="mask">
                                    <img src="__PUBLIC__/www/images/close.png" alt="">
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- contact -->
    <div class="contact">
        <a name="contact"></a>
        <h3>contact us</h3>
        <div class="lines"></div>
        <div class="container">
            <div class="row">

                <div class="list">
                    <div class="title"> Select Product <span> * </span> </div>
                    <div class="box clearfix">
                        <?php getcatvar('page','id = 78','cont');?>
                    </div>
                </div>

                <div class="form-box clearfix">

                    <form class="col-lg-7 col-md-7" name="form" method="post" onsubmit="return beforeSubmit2(this);"
                        action="index.php?g=Home&a=message">
                        <div class="clearfix" style="padding-bottom:20px">
                            <input name="forward" type="hidden"
                                value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>" />
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
                                <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact1.png" alt=""></div>
                                <div class="boxs-txt col-lg-10 col-md-10">
                                    <?php echo ($address); ?>
                                </div>
                            </div>
                            <div class="boxs clearfix">
                                <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact2.png" alt=""></div>
                                <div class="boxs-txt col-lg-10 col-md-10">
                                    <a href="mailto:<?php echo ($email); ?>" target="_blank" style="color:#737277">Email:<?php echo ($email); ?></a>
                                </div>
                            </div>
                            <div class="boxs clearfix">
                                <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact3.png" alt=""></div>
                                <div class="boxs-txt col-lg-10 col-md-10">
                                    Phone:<?php echo ($phone); ?>
                                </div>
                            </div>
                            <div class="boxs clearfix">
                                <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact4.png" alt=""></div>
                                <div class="boxs-txt col-lg-10 col-md-10">
                                    Tel:<?php echo ($Tel); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <!--footer -->
    <footer>

        <div class="copy"> <?php echo ($cop); ?> </div>

        <div class="goTop" style="display: block;">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div>
    </footer>

</body>

<script type="text/javascript" src="__PUBLIC__/www/js/swiper-4.5.0.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>

</html>