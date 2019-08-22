jQuery(document).ready(function($) {
    $('.main_kv').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      responsive: [{
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
         breakpoint: 400,
         settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
         }
      }]
  });

  $('.sub_kv').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: true,
    responsive: [{
      breakpoint: 600,
      settings: {
        slidesToShow:5,
        slidesToScroll: 1
      }
    },
    {
       breakpoint: 400,
       settings: {
          arrows: false,
          slidesToShow: 5,
          slidesToScroll: 1
       }
    }]
});
});

setTimeout(function(){
    $('.slick-arrow').css('display','none');
},500);

