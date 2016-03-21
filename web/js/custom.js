/**
 * scroll page
 */

$(document).ready(function(){
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top -100
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    /**
     * carousel
     */

    $(".carousel-indicators").find('li:first-child').addClass("active");

});

