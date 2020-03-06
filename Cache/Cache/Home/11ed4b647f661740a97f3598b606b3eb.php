<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <!-- css -->
    <link rel="stylesheet" href="__PUBLIC__/wap/css/swiper-4.5.0.min.css">
    <link rel="stylesheet" href="__PUBLIC__/wap/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/wap/css/reset.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/viewer.min.css">
    <link rel="stylesheet" href="__PUBLIC__/wap/css/main.css">
    <script type="text/javascript" src="__PUBLIC__/wap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/www/js/viewer.min.js"></script>
</head>

<body>

    <!-- header -->
    <header>
        <!-- <div class="top-bar">
            <div class="infos clearfix">
                <div class="phone pull-left">
                    <img src="__PUBLIC__/wap/images/phone.png" alt="">
                    <span>Tel:86-18318897233</span>
                </div>
                <div class="email pull-left">
                    <img src="__PUBLIC__/wap/images/email.png" alt="">
                    <span>Email:inquiry@fsyaolong.com</span></div>
            </div>
        </div> -->
        <div class="top">
            <div class="logo"><a href="">
                    <img src="__PUBLIC__/wap/images/logo.png" alt="">
                </a></div>

            <div class="menu">
                <img src="__PUBLIC__/wap/images/menu.png" alt="" class="menu-btn">
                <div class="nav-ul">
                    <a href="javascript:;">HOME</a>
                    <a href="#product">PRODUCT</a>
                    <a href="#news">NEWS</a>
                    <a href="#about">About us</a>
                    <a href="#contact">Contact us</a>
                </div>
            </div>
        </div>

    </header>
<!-- 中间内容 -->
    <!--轮播图-->
    <!-- <div class="index">
        <div class="top_img">
            <img src="__PUBLIC__/wap/images/top_img.jpg" alt="" />
        </div>
    </div>
    <div class="index_content">
        <div class="contact_2">
            <h6 style="margin-bottom: 1px;">Thanks for your inquiry!</h6>
            <p>Our Professional Team Will Contact With You In 24 Hours.</p>
        </div>
        
        <div class="contact_3">
            <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d3677.8552198953444!2d113.23522731543332!3d22.807827985062172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340248e1962a1313%3A0x32246cb8177d4ac2!2z5bm_5Lic55yB5L2b5bGx5biC6aG65b635Yy66L-e5a6J57q_!5e0!3m2!1szh-CN!2scn!4v1539765743992" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div> -->
    <div class="thanks">
        <h5>Thanks for your inquiry!</h5>
        <p>Our Professional Team Will Contact With You In 24 Hours.</p>
    </div>
 <div class="index">
     <!-- contact -->
     <div class="contact">
         <a name="contact"></a>
         <h3>contact us</h3>

         <div class="list">
             <div class="title"> Select Product <span> * </span> </div>
             <div class="box">
                 <div class="swiper-container">
                     <div class="swiper-wrapper">
                         <!--<?php getcatvar('page','id = 78','pcont');?>-->
                         <?php  $_result=M("slide_data")->field("*")->where("fid = 3 AND status=1 ")->order("id desc")->limit("10")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide" title="<?php echo ($r["title"]); ?>" onclick="checkedf(this);" check="0">
                                 <img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>">
                             </div><?php endforeach; endif;?>
                     </div>
                     <div class="swiper-pagination"></div>
                 </div>
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
         <div class="form-box clearfix">

             <form class="col-lg-7 col-md-7" name="form" method="post" onsubmit="return beforeSubmit2(this);"
                 action="index.php?g=Home&a=message">
                 <input type="hidden" name="product" id="product" value="" />
                 <div class="clearfix" style="padding-bottom:10px">

                     <div class="box">
                         <div class="box-left">
                             <p>Name <span> *</span></p>
                         </div>
                         <input type="text" name="name">
                     </div>
                     <div class="box">
                         <div class="box-left">
                             <p>Email <span>*</span></p>
                         </div>
                         <input type="text" name="email">
                     </div>
                     <div class="box">
                         <div class="box-left">
                             <p>Company name <span>*</span></p>
                         </div>
                         <input type="text" name="com">
                     </div>
                     <div class="box">
                         <div class="box-left">
                             <p>Amount </p>
                         </div>
                         <input type="text" name="Amount">
                     </div>
                     <div class="box">
                         <div class="box-left">
                             <p> Message</p>
                         </div>
                         <textarea name="message"></textarea>
                     </div>
                 </div>
                 <div class="box-btns"> <input type="submit" value="SUBMIT" class="submit-btn"></div>
             </form>
             <div class="details">
                 <div class="boxs clearfix">
                     <div class="boxs-img"><img src="__PUBLIC__/wap/images/ico-contact1.png" alt=""></div>
                     <div class="boxs-txt">
                         <?php echo ($address); ?>
                     </div>
                 </div>
                 <div class="boxs clearfix">
                     <div class="boxs-img"><img src="__PUBLIC__/wap/images/ico-contact2.png" alt=""></div>
                     <div class="boxs-txt">
                         <a class="emails" href="mailto:<?php echo ($email); ?>" target="_blank">Email:<?php echo ($email); ?></a>
                     </div>
                 </div>
                 <div class="boxs clearfix">
                     <div class="boxs-img"><img src="__PUBLIC__/wap/images/ico-contact3.png" alt=""></div>
                     <div class="boxs-txt">
                         Phone:<?php echo ($phone); ?>
                     </div>
                 </div>
                 <div class="boxs clearfix">
                     <div class="boxs-img"><img src="__PUBLIC__/wap/images/ico-contact4.png" alt=""></div>
                     <div class="boxs-txt">
                         Tel:<?php echo ($Tel); ?>
                     </div>
                 </div>
             </div>
         </div>

     </div>

 </div>


 </div>

 <footer>
     <div class="info">

         <div class="copy">
             Guangdong Yaolong Metal Technology Co.,Ltd.
         </div>
     </div>

     <!-- gotop -->
     <div class="goTop" style="display: block;">
         <i class="topIcon"></i>
         <p>TOP</p>
     </div>
 </footer>

 </body>
 <!-- js -->
 <script type="text/javascript" src="__PUBLIC__/wap/js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/wap/js/swiper-4.5.0.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/wap/js/wow.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/wap/js/main.js"></script>

 </html>