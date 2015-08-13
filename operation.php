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
    $(".header .nav a").eq(5).addClass("active");
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
            <h5>产品优势</h5>
            <p class="explain_1" style="margin-top: 30px"><span>Ø</span>&nbsp&nbsp代运营：帮助一些希望做电商的传统企业开展网上销售，目前代运营包括各种各样的方式：从建站、推广、物流、客服、仓储等领域都有相关的公司涉及。百花齐放，百家争鸣。当然，也包括一些为电子商务公司提供服务的专业机构。</p>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp现在很多的app出生，但是却有一个很大的问题也随之出现。出生却不知道怎么去养大！产品出来，却不知道自己能做什么，该做什么？</p>
            <h5>我们能做什么</h5>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp产品分析，分析产品的属性，需求。针对其产品的需求去做一个详细的运营计划。再根据反馈的数据，不断的优化与提升。</p>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp例：产品需求一个用户数量级。但市场这么多，却不知道怎么入手与选择。</p>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp我们会针对每个市场的特点结合产品去分析，那些市场是符合需求的，最后去做一个组合的投放计划，达成预期希望的效果。</p>

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
