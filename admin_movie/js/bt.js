$(function() {
    $(".headline2 li").each(function(index) {
        $(this).click(function(e) {
            $(this).addClass("qiu").siblings().removeClass("qiu");
            $(".detail").eq(index).show().siblings(".detail").hide();
        })
    });
})