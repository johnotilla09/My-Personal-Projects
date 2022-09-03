// Effect on the navigation bar
$(document).ready(function() {
    $(window).scroll(function() {
        
        // Navigation
        if (this.scrollY > 20) {
            $('.navbar').addClass("class");
        } else {
            $('.navbar').removeClass("class");
        }
        // Navigation

        // button up
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass('show');
        } else {
            $('.scroll-up-btn').removeClass('show');
        }
        // button up

    })

    // slide up script
    $('.scroll-up-btn').click(function() {
        $('html').animate({scrollTop: 20});
    });
    // slide up script

    // toggle menu/navbar script
    $('.menu').click(function() {
        $('.navbar .container .navbar-nav').toggleClass("active");
        $('.menu i').toggleClass("active");
        console.log("Hello John C. Otilla");
    });
    // toggle menu/navbar script

    // owl carousel script   
    $('.carousel').owlCarousel({
        margin: 25,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
    // owl carousel script

    // Typing animation
    var type = new Typed(".typing", {
        strings: ["Developer", "Programmer", "Conputer Technician"],
        typeSpeed: 100,
        backSpped: 60,
        loop: true
    });

    var type = new Typed(".typing2", {
        strings: ["Developer", "Programmer", "Conputer Technician"],
        typeSpeed: 100,
        backSpped: 60,
        loop: true
    });
    // Typing animation

});
// Effect on the navigation bar