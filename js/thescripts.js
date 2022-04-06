/**
 * Created by Anu Ganesh
 */
//  $(function () {
//     $(".xzoom, .xzoom-gallery").xzoom ({
//         zoomWidth: 400,
//         tint: '#333',
//         Xoffset: 25,
//     });
//  });

$(':radio').change(function () {
    console.log('New star rating: ' + this.value);
});

//scripts for changing bg-color of navbar when the window is scrolled starts
const navbar = document.querySelector('.navbar-section');
window.addEventListener('scroll', () => {
    const windowPosition = window.scrollY > 250;
    navbar.classList.toggle('scrolling-active', windowPosition);
});

//scripts for changing bg-color of navbar when the window is scrolled ends

// scripts for toggling the search-section starts
const searchBtn = document.querySelector('.searchbar-toggle');
const searchSection = document.querySelector('.search-section');
const closeBtn2 = document.querySelector('.search-section .close-btn');

searchBtn.addEventListener('click', () => {
    searchSection.classList.toggle('show');
    body.classList.toggle('hide-scroll');
});

closeBtn2.addEventListener('click', () => {
    searchSection.classList.toggle('show');
    body.classList.toggle('hide-scroll');
});
// scripts for toggling the search-section ends

var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    // addClassInit();
    // navInit();
    owlCarouselInit();
    // mcustomInit();
    productZoom();
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    $('.img-tab-slider').slick({
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 667,
                settings: {
                    arrows: true,
                    dots: false
                }
            }
        ]
    });
}


// function navInit() {

// }

function owlCarouselInit() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        items: 4,
        nav: true,
        responsive: {
            // 0:{
            //     items:1
            // },
            // 600:{
            //     items:3
            // },
            // 1000:{
            //     items:5
            // }
        }
    });
}
 
function productZoom() {
    $(".xzoom, .xzoom-gallery").xzoom ({
        zoomWidth: 550,
        tint: '#333',
        // tint: 'rgba(6, 92, 11, 0.589)',
        Xoffset: 15,
    });
};

/*-------------------------------- Functions Ends --------------------------------*/
