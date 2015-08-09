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
    $(".header .nav a").eq(2).addClass("active");
    $(".carousel-inner .item").eq(2).addClass("active");
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
            <p class="explain_1" style="margin-top: 30px">协助新产品在应用市场初期的下载，评论优化。</p>
            <p class="explain_1">持续跟踪，实时分析，效果提升。</p>
            <div>
                <ul>
                    <li style="width:33.33%;display: inline-block;float: left;text-align: center">
                        <h5 style="text-indent: 0px;">各大手机应用市场</h5>
                        <img style="width: 200px;border-radius:40px;  border: 1px solid blue;" src="images/安卓各大应用市场.png" alt="各大手机应用市场"/>
                    </li>
                    <li style="width:33.33%;display: inline-block;float: left;text-align: center">
                        <h5 style="text-indent: 0px;">苹果商店</h5>
                        <img style="width: 200px" src="images/苹果商店.png" alt="苹果商店"/>
                    </li>
                    <li style="width:33.33%;display: inline-block;float: left;text-align: center">
                        <h5 style="text-indent: 0px;">友盟数据优化</h5>
                        <img style="width: 200px" src="images/友盟.jpg" alt="友盟数据优化"/>
                    </li>
                </ul>
            </div>
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