"use strict";
$(document).ready(function(){
    let mainContent = $(".mainContent");
    let opacityContent = $(".opacityContent");
    let opacityCall = $(".opacityCall");
    $("div .calling").on("click", function(){
        opacityContent.css("display", "inline-block");
        opacityCall.css("display", "inline-block");
    });
    $("div .closeCall, .closeMain").on("click", function(){
        let closeCall = $(".closeCall");
        let closeMain = $(".closeMain");
        opacityContent.css("display", "none");
        opacityCall.css("display", "none");
        mainContent.css("display", "none");
        $(".mainAllContent").empty();
        
    });
    let clickAll = ".osnK";
    $(clickAll).on("click", function(){
         opacityContent.css("display", "inline-block");
         mainContent.css("display", "inline-block");
           
        
    });
     $(".TelimP").on("click", function(){
            $(".mainAllContent").load("loading_app/views/mainContent.php");
    });
     $(".KursP").on("click", function(){
        $(".mainAllContent").load("loading_app/views/mainContent2.php");
    });
     $(".LayhelerP").on("click", function(){
         $(".mainAllContent").load("loading_app/views/mainContent3.php");
    });
     $(".testStart").on("click", function(){
         $(".mainAllContent").load("loading_app/views/testStart.php");
    });
     $(".galetyStart").on("click", function(){
         $(".mainAllContent").load("loading_app/views/galeryStart.php");
    });
     $(".footNews").on("click", function(){
         $(".mainAllContent").load("loading_app/views/footNews.php");
    });
     $(".footAds").on("click", function(){
         $(".mainAllContent").load("loading_app/views/footAds.php");
    });
    
   /* $(".TelimP").on("click", function(){
        $(".mainAllContent").load("loading_app/views/mainContent.php");
        /*$.ajax({
            method: "POST",
            url: "loading_app/views/mainContent.php",
            success: function(data){
                $(".mainContent").html(data);
            }
        });
    });*/
});

