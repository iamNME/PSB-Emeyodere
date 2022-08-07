/*jslint browser: true*/
/*global $, console, window*/

$(document).ready(function () {
    'use strict';

    var win = $(window),
        scrollUp = $(".back-to-top");   

    /*========== Start Scroll Up    ==========*/
    // Show And Hide Buttom Back To Top
    win.on('scroll', function () {
        if ($(this).scrollTop() >= 600) {
            scrollUp.show(700);
        } else {
            scrollUp.hide(200);
        }
    });
    // Back To 0 Scroll Top body
    scrollUp.on('click', function () {
        $("html, body").animate({ scrollTop: 0}, 1000);
    });

    

    // (function($) {
    //     $(document).ready(function() {
    //       $(window).scroll(function() {
    //         if ($(this).scrollTop() > 540) {
    //             $(".navigation").addClass("fixed-top");
    //             $('.navigation').slideDown(200);
    //         }else {
    //             $(".navigation").removeClass("fixed-top");
    //             $('.navigation').slideUp(200);
    //         }
    //       });
    //     });
    //   })(jQuery);

    win.on('scroll', function () {
        if ($(this).scrollTop() > 550){
            $(".navigation").addClass("fixed-top");
        } else {
            $(".navigation").removeClass("fixed-top");
        }
    }); 
});