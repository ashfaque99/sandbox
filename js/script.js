$(document).ready(function(){
  $('.slick-slider').slick({
  autoplay:true,
  speed: 300,
   arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>'
  });


   $('.optimize-slider').slick({
  autoplay:true,
  speed: 300,
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  nextArrow: '<button class="slide-arrow next-arrow"></button>'
  });

});