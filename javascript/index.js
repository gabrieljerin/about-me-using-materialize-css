$(".loader").show();
$(document).ready(function () {
    $(this).scrollTop(0);

    $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                        ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                            ;
                        });
                    }
                }
            });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".upward").removeClass('hide');
            $(".upward").fadeIn();
        } else {
            $(".upward").fadeOut();
            $(".upward").addClass('hide');
        }
    });
    // scroll body to 0px on click
    $(".upward").click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
     $('.carousel').carousel({
        padding: 200,
        fullWidth: true
    });
    setTimeout(autoplay, 2000);
    $('.button-collapse').sideNav();
    $(".loader").fadeOut('slow');
    $(".main-wrapper").fadeIn('slow');
});
function goTop(dom)
{
    $('body,html').animate({
        scrollTop: 0
    }, 1000);
}
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 3000);
}
