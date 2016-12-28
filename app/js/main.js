$('document').ready(function() {

    $(".owl-slider").owlCarousel({
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

    $(".owl-news").owlCarousel({
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