jQuery(document).ready(function ($) {

  //lang list
  $(document).on('click', '.top-info-line .lang-wrap>a', function (e){
    e.preventDefault();
    $('.top-info-line .lang-wrap').toggleClass('is-active');

    if($('.top-info-line .lang-wrap').hasClass('is-active')){
      $('.lang-list').slideDown();
    }else{
      $('.lang-list').slideUp();
    }
  });

  //slider
  var swiperLogo = new Swiper(".logo-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    speed: 1200,
    slidesPerView: "auto",
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    breakpoints: {
      576: {
        spaceBetween: 40,
      },
      991: {
        spaceBetween: 100,
      },
    },
  });

  //slider
  var swiperProduct = new Swiper(".product-slider", {
    slidesPerView: "auto",
    spaceBetween: 15,
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 55,
      },
    },
  });




  //slider
  var swiperMarket = new Swiper(".market-slider", {
    slidesPerView: "auto",
    spaceBetween: 15,
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 35,
      },
    },
  });

  //slider
  var swiperTestimonials = new Swiper(".testimonials-slider", {
    slidesPerView: "auto",
    spaceBetween: 32,
    /*loop:true,*/
    navigation: {
      nextEl: ".testimonials-next",
      prevEl: ".testimonials-prev",
    },
  });

  //TABS
  (function($){
    jQuery.fn.lightTabs = function(options){

      var createTabs = function(){
        tabs = this;
        i = 0;

        showPage = function(i){
          $(tabs).find(".tab-content").children("div").hide();
          $(tabs).find(".tab-content").children("div").eq(i).show();
          $(tabs).find(".tabs-menu").children("li").removeClass("is-active");
          $(tabs).find(".tabs-menu").children("li").eq(i).addClass("is-active");
        }

        showPage(0);

        $(tabs).find(".tabs-menu").children("li").each(function(index, element){
          $(element).attr("data-page", i);
          i++;
        });

        $(tabs).find(".tabs-menu").children("li").click(function(){
          showPage(parseInt($(this).attr("data-page")));
        });
      };
      return this.each(createTabs);
    };
  })(jQuery);
  $(".tabs").lightTabs();

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });


  if(window.innerWidth < 576){
    $(document).on('click', 'footer .item ul li h6 a', function (e){
      e.preventDefault()
      $(this).toggleClass('is-open');
      if($(this).hasClass('is-open')){
        $(this).closest('ul').find('li:nth-child(n+2)').slideDown()
      }else{
        $(this).closest('ul').find('li:nth-child(n+2)').slideUp()
      }

    })
  }

  //slider
  var swiperMini = new Swiper(".mini-slider", {
    spaceBetween: 25,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiperBig = new Swiper(".big-slider", {
    spaceBetween: 10,
    pagination: {
      el: ".big-pagination",
      clickable: true,
    },
    thumbs: {
      swiper: swiperMini,
    },
  });

 // nice select
  $('.select-block select').niceSelect();


  //delete item checkout
  $(document).on('click', '.delete a', function (e){
    e.preventDefault();
    $(this).closest('.item').slideUp();
  })

  //faq
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    })
  });

 // sticky filter
  $(".sort-line-wrap").sticky({
    topSpacing:0
  });
});