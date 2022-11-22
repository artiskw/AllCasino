jQuery(function ($) {
    jQuery(document).ready(function () {


        // Mobile menu
        $(".menu-icon").click(function () {
            $(this).toggleClass("is-active");
            $(".menu-menu-breakpoint-container").toggleClass("is-active");
            $(".casino-container,footer").toggleClass("container-go-to-right");

        });

        // Slider
        $(".banner_slider").slick({  //banner_slider, šajā class ir iekšā class="slider-objects"
            infinite: true,
            dots: true, //norādu vai izmantoušu bulletus 
            appendDots: $(".slider-dots"), // norādu, kurai klasei bulleti, dots būs piesaistīti
            speed: 300,
            arrows: true, //norādu vai izmantoušu bultas - arrows <---   ----> 
            prevArrow: $('.slick-next'), // norādu, kurai klasei bultas, arrow būs piesaistītītas
            nextArrow: $('.slick-prev'), // norādu, kurai klasei bultas, arrow būs piesaistītītas
            slidesToShow: 1, //Cik slaidus rādīt
            slidesToScroll: 1,
            autoplay: true
            
        });
    });
})





