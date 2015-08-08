/**
 * Created by Admin on 2015/7/27.
 */


//设置自动上滑时间
//$(document).ready(function(){
//    var n = setInterval("slideUp()", 2500);
//    $(".notice ul").hover(function(){clearInterval(n)}, function(){n = setInterval("slideUp()", 2500);});
//});
//notice自动上滑

//function slideUp(){
//    if($(".notice ul").css("top")=="-52px"){
//        $(".notice ul").animate({top:-104})
//    }else{
//        $(".notice ul").css({top:0}).animate({top:-52})
//    }
//}


    //点击next按钮
function clickedNext(){
    var x=$(".product ul").css("left");
    x = x.substring(0, x.indexOf('px'));
    if(x=="-1250"){
        $(".product ul").css({left:0}).animate({left:-250},500)
    }else{
        $(".product ul").animate({left:x-"250"},500)
    }
}
//点击prev按钮
function clickedPrev(){
    var x=$(".product ul").css("left");
    x = x.substring(0, x.indexOf('px'));
    if(x==0){
        $(".product ul").css({left:-1250}).animate({left:-1000},500);
    }else{
        $(".product ul").animate({left:-(-x-250)},500)
    }
}




//text页面的滑动

$(document).ready(function(){
    $(".temp h4").click(function(){
        $(this).addClass("active");
        $(this).parent().siblings().children(".active").removeClass("active");
        $(this).next().slideDown();
        $(this).parent().siblings().children().has("li").slideUp();
    })
})
