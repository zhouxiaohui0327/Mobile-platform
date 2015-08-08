
<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <title>app专业推广平台</title>
    <link rel="stylesheet" type="text/css"  href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/myjs.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/holder/2.0/holder.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>

<?php
include "carousel.php";
?>
<script>
    $(".header .nav a").eq(0).addClass("active");
    $(".carousel-inner .item").eq(0).addClass("active");
</script>

<!--    <div class="notice container-fluid ">-->
<!--        <div class="w-1000 container">-->
<!--                <ul style="height:208px;position:relative;padding:0;margin: 0;top: 0">-->
<!--                    <li class="clone" style="height:52px;">-->
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
<!--        </div>-->
<!--    </div>-->
<div class="content container-fluid">
    <?php
    include "carousel-multi.php";
    ?>

</div>
<?php
include "footer.php";
?>

</body>
</html>