$(document).ready(function () {
    
    $(window).scroll(function(e){ 
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            $(".navbar").addClass("navbar-fixed");
        }
        else {
            $(".navbar").removeClass("navbar-fixed");
        }
    });
    
    if ($(window).scrollTop() !== 0) {
        $(".navbar").addClass("navbar-fixed");
    }
    
    $('#overlay').click(function(e) { 
        if ($('.sign-up').css("display") == "block") {
            if($(e.target).closest('.sign-up').length === 0) {
                $('#overlay').css("display", "none"); 
                $('.sign-up').css("display", "none");
                $('body').css("overflow", "auto");
            } 
        }
        else if ($('.sign-up-2').css("display") == "block") {
            if($(e.target).closest('.sign-up-2').length === 0) {
                $('#overlay').css("display", "none"); 
                $('.sign-up-2').css("display", "none");
                $('body').css("overflow", "auto");
            } 
        }
        else if ($('.log-in').css("display") == "block") {
            if($(e.target).closest('.log-in').length === 0) {
                $('#overlay').css("display", "none"); 
                $('.log-in').css("display", "none");
                $('body').css("overflow", "auto");
            }
        }
        else {
            if($(e.target).closest('.forgot-password').length === 0) {
                $('#overlay').css("display", "none"); 
                $('.forgot-password').css("display", "none");
                $('body').css("overflow", "auto");
            }
        }
        e.stopPropagation();
    });
    
    $(document).keyup(function(e) {
        if (e.which == 27) {
            $('#overlay').css("display", "none"); 
            $('.sign-up').css("display", "none");
            $('.sign-up-2').css("display", "none");
            $('.log-in').css("display", "none");
            $('.forgot-password').css("display", "none");
            $('body').css("overflow", "auto");
        }
        e.stopPropagation();
    });
    
    $('.close-log-in').click(function() {
        $('#overlay').css("display", "none"); 
        $('.sign-up').css("display", "none");
        $('.log-in').css("display", "none");
        $('.forgot-password').css("display", "none");
        $('body').css("overflow", "auto");
    });
    
    $('.log-in-click').click(function() {
        if ($('.sign-up').css("display") == "block") {
            $('.log-in').css("display", "block");
            $('.sign-up').css("display", "none");
        }
        else {
            $('#overlay').css("display", "block");
            $('.log-in').css("display", "block");
            $('body').css("overflow", "hidden");
        }
    });
    
    $('.sign-up-click').click(function() {
        $('.log-in').css("display", "none");
        $('.sign-up').css("display", "block");
    });
    
    $('.sign-up-2-click').click(function() {
        $('.sign-up').css("display", "none");
        $('.sign-up-2').css("display", "block");
    });
    
    $('.forgot-password-click').click(function() {
        $('.log-in').css("display", "none");
        $('.forgot-password').css("display", "block"); 
    });
    
    /*$('.change-photo-click').click(function() {
        $('.change-photo form').css("display", "block");
        $(this).css("display", "none");
    })
    
    $('.save-change-photo-click').click(function() {
        $('.change-photo form').css("display", "none");
        $('.change-photo-click').css("display", "block");
    })
    
    $('.change-password-click').click(function() {
        $('.change-password form').css("display", "block");
        $(this).css("display", "none");
    })
    
    $('.save-change-password-click').click(function() {
        $('.change-password form').css("display", "none");
        $('.change-password-click').css("display", "block");
    })
    
    $('.change-noti-click').click(function() {
        $('.change-noti form').css("display", "block");
        $(this).css("display", "none");
    })
    
    $('.save-change-noti-click').click(function() {
        $('.change-noti form').css("display", "none");
        $('.change-noti-click').css("display", "block");
    })*/
    
    $(window).scroll(function(e) {
        var $anchor = $("#scroller-anchor");
        var $anchor2 = $("#scroller-anchor-2");
        var $scroller = $('#rent-form');

        var move = function() {
            var st = $(window).scrollTop();
            var ot = $anchor.offset().top - 100;
            var ot2 = $anchor2.offset().top - 735;
            
            if (st > ot2) {
                $scroller.css({
                    position: "absolute",
                    bottom: "15px",
                    top: "unset",
                });
                $scroller.css('width', $('.container').width()*0.25-11.25);
            }
            else {
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "100px",
                        bottom: "unset"
                    });
                    $scroller.css('width', $('.container').width()*0.25-11.25);
                } else {
                    $scroller.css({
                        position: "relative",
                        top: "",
                        bottom: "unset",
                        width: "unset"
                    });
                }
            }
        };
        $(window).scroll(move);
        move();
    });
    
    $(window).resize(function(e) {
        var $anchor = $("#scroller-anchor");
        var $anchor2 = $("#scroller-anchor-2");
        var $scroller = $('#rent-form');

        var move = function() {
            var st = $(window).scrollTop();
            var ot = $anchor.offset().top - 100;
            var ot2 = $anchor2.offset().top - 735;
            
            if (st > ot2) {
                $scroller.css({
                    position: "absolute",
                    bottom: "15px",
                    top: "unset",
                });
                $scroller.css('width', $('.container').width()*0.25-11.25);
            }
            else {
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "100px",
                        bottom: "unset"
                    });
                    $scroller.css('width', $('.container').width()*0.25-11.25);
                } else {
                    $scroller.css({
                        position: "relative",
                        top: "",
                        bottom: "unset",
                        width: "unset"
                    });
                }
            }
        };
        $(window).scroll(move);
        move();
        e.stopPropagation();
    });
    
    $('#car-details-wrapper').bind('heightChange', function() {
        var $anchor = $("#scroller-anchor");
        var $anchor2 = $("#scroller-anchor-2");
        var $scroller = $('#rent-form');

        var move = function() {
            var st = $(window).scrollTop();
            var ot = $anchor.offset().top - 100;
            var ot2 = $anchor2.offset().top - 735;
            
            if (st > ot2) {
                $scroller.css({
                    position: "absolute",
                    bottom: "15px",
                    top: "unset",
                });
                $scroller.css('width', $('.container').width()*0.25-11.25);
            }
            else {
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "100px",
                        bottom: "unset"
                    });
                    $scroller.css('width', $('.container').width()*0.25-11.25);
                } else {
                    $scroller.css({
                        position: "relative",
                        top: "",
                        bottom: "unset",
                        width: "unset"
                    });
                }
            }
        };
        $(window).scroll(move);
        move();
    });
    
    $(window).scroll(function(e) {
        var $anchor = $("#scroller-anchor");
        var $anchor2 = $("#scroller-anchor-2");
        var $scroller = $('#rent-form-2');

        var move = function() {
            var st = $(window).scrollTop();
            var ot = $anchor.offset().top - 100;
            var ot2 = $anchor2.offset().top - 640;
            
            if (st > ot2) {
                $scroller.css({
                    position: "absolute",
                    bottom: "15px",
                    top: "unset",
                });
                $scroller.css('width', $('.container').width()*0.25-11.25);
            }
            else {
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "100px",
                        bottom: "unset"
                    });
                    $scroller.css('width', $('.container').width()*0.25-11.25);
                } else {
                    $scroller.css({
                        position: "relative",
                        top: "",
                        bottom: "unset",
                        width: "unset"
                    });
                }
            }
        };
        $(window).scroll(move);
        move();
    });
    
    $(window).resize(function(e) {
        var $anchor = $("#scroller-anchor");
        var $anchor2 = $("#scroller-anchor-2");
        var $scroller = $('#rent-form-2');

        var move = function() {
            var st = $(window).scrollTop();
            var ot = $anchor.offset().top - 100;
            var ot2 = $anchor2.offset().top - 640;
            
            if (st > ot2) {
                $scroller.css({
                    position: "absolute",
                    bottom: "15px",
                    top: "unset",
                });
                $scroller.css('width', $('.container').width()*0.25-11.25);
            }
            else {
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "100px",
                        bottom: "unset"
                    });
                    $scroller.css('width', $('.container').width()*0.25-11.25);
                } else {
                    $scroller.css({
                        position: "relative",
                        top: "",
                        bottom: "unset",
                        width: "unset"
                    });
                }
            }
        };
        $(window).scroll(move);
        move();
        e.stopPropagation();
    });
    
    $('#car-details-wrapper').bind('heightChange', function() {
        var $anchor = $("#scroller-anchor");
        var $anchor2 = $("#scroller-anchor-2");
        var $scroller = $('#rent-form-2');

        var move = function() {
            var st = $(window).scrollTop();
            var ot = $anchor.offset().top - 100;
            var ot2 = $anchor2.offset().top - 640;
            
            if (st > ot2) {
                $scroller.css({
                    position: "absolute",
                    bottom: "15px",
                    top: "unset",
                });
                $scroller.css('width', $('.container').width()*0.25-11.25);
            }
            else {
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        top: "100px",
                        bottom: "unset"
                    });
                    $scroller.css('width', $('.container').width()*0.25-11.25);
                } else {
                    $scroller.css({
                        position: "relative",
                        top: "",
                        bottom: "unset",
                        width: "unset"
                    });
                }
            }
        };
        $(window).scroll(move);
        move();
    });
    
    
    $('.view-details').click(function() {
        $(this).parent('.car-info-inner').nextAll('.car-details').first().addClass("show");
        $(this).parent('.car-info-inner').css("display", "none");
    });
    
    $('.view-less').click(function() {
        $(this).parent('.car-details').removeClass("show");
        $(this).parent('.car-details').prevAll('.car-info-inner').css("display", "block");
    });
    
    if ($(window).width() < 753) {
        $("#filters").removeClass("show");
    }
    else {
        $("#filters").addClass("show");
    }
    
    $('.thumbnail img').click(function() {
        $('#preview-img').attr('src', $(this).attr('src'));
        $('.thumbnail-img').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.view-reviews').click(function() {
        $('.review.show').last().nextAll('.review:lt(2)').addClass("show");
        
        if ($('.review.show').last().next('.review').length <= 0) {
            $('.view-reviews').css("display", "none");
        }
        
        $('#car-details-wrapper').trigger('heightChange');
    });
    
    $('.view-results').click(function() {
        $('.result.show').last().nextAll('.result:lt(6)').addClass("show");
        
        if ($('.result.show').last().next('.result').length <= 0) {
            $('.view-results').css("display", "none");
        }
    });
    
    $('.view-messages').click(function() {
        $('.message.show').last().nextAll('.message:lt(2)').addClass("show");
        
        if ($('.message.show').last().next('.message').length <= 0) {
            $('.view-messages').css("display", "none");
        }
    });
    
    $('.view-rent-form').click(function() {
        $('.rent-form-inner').css("display", "block");
        $(this).css("display", "none");
    });
    $('.hide-rent-form').click(function() {
        $('.rent-form-inner').css("display", "none");
        $('.view-rent-form').css("display", "block");
    });
    
    $(window).resize(function(e){
        if ($(window).width() > 975) {
            $('.rent-form-inner').css("display", "");
            $('.view-rent-form').css("display", "");
            $('.hide-rent-form').css("display", "");
        }
        e.stopPropagation();
    });
})
