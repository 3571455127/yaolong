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
    <link rel="stylesheet" href="__PUBLIC__/www/css/viewer.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">

    <!-- 字体引入 -->
    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('__PUBLIC__/www/font/Roboto.ttf');
        }
    </style>

    <script type="text/javascript" src="__PUBLIC__/www/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/www/js/viewer.min.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJRNG84');</script>
<!-- End Google Tag Manager -->
<script>
     function IsPC() {
          var userAgentInfo = navigator.userAgent;
          var Agents = ["Android", "iPhone",
                      "SymbianOS", "Windows Phone",
                      "iPad", "iPod"];
          var flag = true;
          for (var v = 0; v < Agents.length; v++) {
              if (userAgentInfo.indexOf(Agents[v]) > 0) {
                  flag = false;
                 break;
             }
         }
         return flag;
      }
      var isp = IsPC();
      if(!isp){
            window.location.href="/mobile.php";
      }
</script>
</head>

<body>
    <!-- header -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJRNG84"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                            <a href="/index.php"><img src="/Public/www/images/logo.png" alt=""></a>
                        </div>
                        <div class="list col-lg-8 col-md-8 col-sm-8">
                            <ul class="clearfix">
                                <li class="nav-active"><a href="/index.php">HOME</a></li>
                                <li><a href="#products">PRODUCT</a></li>
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
            <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>" target="_blank"><img src="<?php echo ($r["pic"]); ?>"
                            alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- product -->
    <div class="product">
        <a name="products"></a>
        <?php getcatvar('page','id = 73','cont');?>
    </div>

    <!-- odds -->
    <div class="odds">
        <a name="odds"></a>
        <?php getcatvar('page','id = 77','cont');?>
    </div>

    <!-- news -->
    <!-- <div class="news">
        <a name="news"></a>
        <?php getcatvar('page','id = 108','cont');?>
    </div> -->

    <div class="case clearfix">
        <div class="container">
            <div class="row">
                <h3>  CASE</h3>
                <div class="col-lg-6 imgs"><img src="__PUBLIC__/www/images/case.png" alt=""></div>
                <div class="col-lg-6 txt">

                    <p>In 2018, Yaolong flagpole supplier is honored to be one of the infrastructure construction
                        suppliers of
                        Abu Dhabi International Airport. We mainly provide stainless steel tapered light poles,
                        stainless steel
                        support rods, stainless steel bollard and stainless steel flagpole for Abu Dhabi International
                        Airport.
                    </p>
                    <p>
                        In addition, the Abu Dhabi International Airport project team also ordered a large number of
                        support
                        rods from Yaolong, Smart light poles are also one of the products we are currently researching.
                    </p>
                    <a href="https://www.yaolongpole.com/Abu-Dhabi-New-International-Airport-pole.html" target="_blank">
                        Know More</a>
                </div>
            </div>
        </div>

    </div>


    <!-- about -->
    <div class="about">
        <a name="about"></a>
        <?php getcatvar('page','id = 74','cont');?>

        <script>
            $('.example-box').viewer();
        </script>

    </div>
 <div class="index">
     <!-- contact -->
     <div class="contact">
         <a name="contact"></a>
         <h3>contact us</h3>
         <div class="lines"></div>
         <h6>Two steps to getting free consultant</h6>
         <div class="container">
             <div class="row">

                 <div class="list">
                     <div class="title"> ①Select Product <span> * </span> </div>
                     <div class="box clearfix selectproduct">

                         <?php  $_result=M("slide_data")->field("*")->where("fid = 3 AND status=1 ")->order("id desc")->limit("10")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="box-img" title="<?php echo ($r["title"]); ?>" onclick="checkedf(this);" check="0">
                                 <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                             </div><?php endforeach; endif;?>
                         <!--<div class="box-img">
<img src="/Public/www/images/contact1.png" alt=""  /> 
</div>-->

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

                 <div class="step2"> ②Fill & submit the form</div>

                 <div class="form-box clearfix">

                     <form class="col-lg-7 col-md-7" name="form" method="post" onsubmit="return beforeSubmit2(this);"
                         action="index.php?g=Home&a=message">
                         <div class="clearfix" style="padding-bottom:20px">
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
                             <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact1.png"
                                     alt="">
                             </div>
                             <div class="boxs-txt col-lg-10 col-md-10">
                                 <?php echo ($address); ?>
                             </div>
                         </div>
                         <div class="boxs clearfix">
                             <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact2.png"
                                     alt="">
                             </div>
                             <div class="boxs-txt col-lg-10 col-md-10">
                                 <a href="mailto:<?php echo ($email); ?>" target="_blank" style="color:#737277">Email:<?php echo ($email); ?></a>
                             </div>
                         </div>
                         <div class="boxs clearfix">
                             <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact3.png"
                                     alt="">
                             </div>
                             <div class="boxs-txt col-lg-10 col-md-10">
                                 Phone:<?php echo ($phone); ?>
                             </div>
                         </div>
                         <div class="boxs clearfix">
                             <div class="boxs-img col-lg-2 col-md-2"><img src="/Public/www/images/ico-contact4.png"
                                     alt="">
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
 </div>


 </div>


 <!--footer -->
 <footer>

     <div class="copy"> <?php echo ($cop); ?> </div>

     <div class="goTop" style="display: block;">
         <i class="topIcon"></i>
         <p>TOP</p>
     </div>
     <a href="#contact" class="footer-contact">Contact us</a>
 </footer>

 </body>

 <script type="text/javascript" src="__PUBLIC__/www/js/swiper-4.5.0.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>

 </html>