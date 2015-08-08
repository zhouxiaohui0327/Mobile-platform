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
<body onload="slideUp()">
<?php
include "header.php";
?>

<?php
include "carousel.php";
?>
<script>
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
            <h3 class="title">联系方式</h3>
            <h5>邮箱</h5>
            <p class="explain_1" style="margin-top: 20px"><span>Ø</span>&nbsp&nbsp<a href="mailto:jiang@51kuwei.com">jiang@51kuwei.com</a>&nbsp&nbsp&nbsp&nbsp<span>Ø</span>&nbsp&nbsp<a href="mailto:st@51kuwei.com">st@51kuwei.com</a></p>
            <h5>QQ</h5>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp291950358&nbsp&nbsp&nbsp&nbsp<span>Ø</span>&nbsp&nbsp5423039</p>
            <h5>电话</h5>
            <p class="explain_1"><span>Ø</span>&nbsp&nbsp13588105680&nbsp&nbsp&nbsp&nbsp<span>Ø</span>&nbsp&nbsp13880156042</p>
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