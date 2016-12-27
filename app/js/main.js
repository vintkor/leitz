$('document').ready(function() {

    $(".owl-carousel").owlCarousel({
        loop: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        navText: ['&larr;', '&rarr;'],
        responsive: {
            0: {
                items: 1
            }
        }
    });

});