<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <title>app专业推广平台</title>
    <link rel="stylesheet"  href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/pay.css">
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/myjs.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/holder/2.0/holder.min.js"></script>
</head>
<body>
<?php
include "header.php";
?>
<?php
include "carousel.php";
?>
<script>
    $(".header .nav a").eq(1).addClass("active");
    $(".carousel-inner .item").eq(0).addClass("active");
</script>

<!--    <div class="notice container-fluid ">-->
<!--        <div class="w-1000 container">-->
<!--            <div class="tempWrap"  style="overflow: hidden;position: relative;height: 52px">-->
<!--                <ul style="height:208px;position:relative;padding:0;margin: 0;top: 0">-->
<!--                    <li class="clone"style="height:52px;">-->
<!--                        <a href="" title="新版上线，欢迎试用！" >-->
<!--                            新版上线，欢迎试用！-->
<!--                        </a>-->
<!--                        <span>2015-07-01</span>-->
<!--                    </li>-->
<!--                    <li class="clone" style="height:52px;">-->
<!--                        <a href="" title="新版上线，欢迎试用！" >-->
<!--                            新版上线，欢迎试用！-->
<!--                        </a>-->
<!--                        <span>2014-03-26</span>-->
<!--                    </li>-->
<!--                    <li style="height:52px;">-->
<!--                        <a href="" title="新版上线，欢迎试用！" >-->
<!--                            新版上线，欢迎试用！-->
<!--                        </a>-->
<!--                        <span>2015-07-01</span>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<div class="content container-fluid">
    <div class="bg-grey container-fluid">
        <div class="clump w-1000 container">
            <h3 class="title">业务说明</h3>
            <p class="explain">广点通是由腾讯公司推出的效果广告系统。它是国内领先的效果广告营销平台，依托于腾讯海量优质流量资源，给广告主提供跨平台、跨终端的网络推广方案，并利用腾讯大数据处理算法实现成本可控、效益可观、智能投放的互联网效果广告平台。</p>
            <div class="w-1000 container" style="text-align: center"><img style="width: 500px" src="images/guandiantong.png" alt=""/></div>
            <h5>产品优势</h5>
            <div class="w-1000 container" style="text-align: center"><img style="width: 500px" src="images/guangdiantong_2.png" alt=""/></div>
            <p class="explain_1" style="margin-top: 30px"><span>Ø</span>&nbsp&nbsp两年经验专业优化团队。</p>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp协助客户进行开户，申请广告位置。</p>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp客户产品分析，设计精准投放计划。</p>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp客户跟踪，实时分析，数据优化，提升效果。</p>
        </div>
    </div>
    <?php
    include "carousel-multi.php";
    ?>
</div>
<?php
include "footer.php";
?>
</body>
</html>
