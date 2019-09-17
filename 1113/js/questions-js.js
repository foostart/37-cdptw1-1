$(document).ready(function () {
    $(".a").click(function () {
        $(".a").css("display","none");
        $(".a1").css("display","block");
         $(".a2").css("background","#106EAA");
          $(".a4").css("color","white");
        $(".ap").slideToggle(400);
        
    });
    $(".a1").click(function () {
        $(".a").css("display","block");
        $(".a1").css("display","none");
         $(".a2").css("background","white");
           $(".a4").css("color","#fff");
        $(".ap").slideToggle(400);
        
    });
     $(".b").click(function () {
        $(".b").css("display","none");
       $(".b2").css("background","#106EAA");
        $(".b1").css("display","block");
         $(".b4").css("color","white");
          $(".b3").css("color","white");
         $(".b5").css("color","white");
        $(".bp").slideToggle(400);
        
    });
    $(".b1").click(function () {
         $(".b2").css("background","white");
        $(".b").css("display","block");
        $(".b1").css("display","none");
        $(".b4").css("color","gray");
        $(".b3").css("color","gray");
        $(".b5").css("color","white");
        $(".bp").slideToggle(400);
        
    });
     $(".c").click(function () {
          $(".c4").css("color","");
          $(".c2").css("background","#106EAA");
        $(".c").css("display","none");
        $(".c1").css("display","block");
        $(".c4").css("color","white");
        $(".c3").css("color","white");
        $(".cp").slideToggle(400);
        
    });
    $(".c1").click(function () {
         $(".c2").css("background","white");
        $(".c").css("display","block");
        $(".c1").css("display","none");
       $(".c4").css("color","gray");
        $(".c3").css("color","gray");
        $(".cp").slideToggle(400);
        
    });
    
});
$(document).ready(function ()
{


    $('.fluid-question-li-1').click(function () {
        $('.fluid-question li').removeClass('active-li');
        $(this).addClass('active-li');
        $('.text-li1').slideDown();
        $('.text-li2').slideUp();
    });
    $('.fluid-question-li-2').click(function () {
        $('.fluid-question li').removeClass('active-li');
        $(this).addClass('active-li');
        $('.text-li2').slideDown();
        $('.text-li1').slideUp();
    });
});