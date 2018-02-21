(function ($) {

    "use strict";
    
    var helper = {
        isValidUrlAddress: function(URL) {
            var pattern = new RegExp(/^([a-z]([a-z]|\d|\+|-|\.)*):(\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?((\[(|(v[\da-f]{1,}\.(([a-z]|\d|-|\.|_|~)|[!\$&'\(\)\*\+,;=]|:)+))\])|((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=])*)(:\d*)?)(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*|(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)){0})(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i);
            return pattern.test(URL);
        },
        isValidEmailAddress: function(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        }
    };
    
    function wordit() {
        this.init = function () {
            themenu.init();
            bindControls();
        };

        
        var bindControls = function(){
            
            $(".back-to-top").on("click", function(e) {
                e.preventDefault();
                
                jQuery("html, body").animate({
                    scrollTop:0
                }, 450);
            });
            
            $("#header-search").on("click", function(){
               $(".search-popup-bg").fadeIn(250); 
            });
            
            $(".search-popup-bg, .search-popup-close").on("click", function(){
               $(".search-popup-bg").fadeOut(250); 
            });
            
            $(".search-popup").on("click", function(e){
                e.stopPropagation();
            });
            
        };
        
        
        var themenu = {
            init: function () {
                this.bindControls();
                this.mini.init();
            },
            
            bindControls: function () {
            },
            
            mini: {
                init: function(){
                    this.checkState();
                    this.bindControls();
                    $('<span><i class="fa fa-plus"></i></span>').prependTo($(".the-menu-mini").find(".menu-item-has-children > a"));
                },
                
                checkState: function () {
                    if ($(window).width() < 980) {
                        $(".the-menu").hide();
                        $(".the-menu-mini-header").show();
                        $(".container").css({
                            position: "relative",
                            top: 60
                        });
                    } else {
                        $(".container").css({
                            position: "static",
                            top: 0
                        });
                        $(".the-menu").show();
                        $(".the-menu-mini-header").hide();
                        $(".the-menu-mini").hide();
                        $('.the-menu-mini-toggle-button i').removeClass('fa-times');
                        $('.the-menu-mini-toggle-button i').addClass('fa-bars');
                    }
                },
                
                
                bindControls: function(){
                    
                    $(window).on("resize",function(){
                        themenu.mini.checkState();
                    });


                    $(document).on("click", ".the-menu-mini a span", function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        
                        $(this).find("i").toggleClass("fa-plus fa-minus");
                        $(this).parent().next().slideToggle({
                            easing: "swing",
                            duration: 350
                        });
                    });
                    
                    $('.the-menu-mini-toggle-button').on("click", function (e) {
                        e.preventDefault();
                        $('.the-menu-mini-toggle-button i').toggleClass('fa-bars fa-times');
                        $(".the-menu-mini").slideToggle({
                            easing: "swing",
                            duration: 350
                        });
                    });
                }
            }
        };
        
    }

    $(document).ready(function () {
        new wordit().init();
    });

})(jQuery);