
  (function($){
    "use strict"


    $(".common").click(function(){
      $(".menu").toggleClass("open");
    })


    // our team members
  var swiper = new Swiper(".myTeamSwiper", {
    slidesPerView: 4,
    grid: {
      rows: 2,
    },
    spaceBetween: 20,
    breakpoints: {
      1199: {
          slidesPerView: 4,
          spaceBetween: 20,
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
    }
  });



    // owl carosel service work section
    $('.fadeOut').owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      speed: 7000,
      dots : true,
      dotsData :true,
      autoplay: true,
      autoplaySpeed: 2000

    });


   new Swiper(".techonology_swipper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
   });

  var swiper = new Swiper(".serviceSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 1000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      1199: {
          slidesPerView: 3,
          spaceBetween: 20,
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
  },

  });



  // // testimonial swiper
  var swiper = new Swiper(".boss__swiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  $(".accordion__display__one").click(function(){
      $(".accordion__hidden__one").toggle("slow");
      // $("#firsticon__for__one").toggleClass('fa-arrow-up-long');
  })

  $(".accordion__display__two").click(function(){
      $(".accordion__hidden__two").toggle("slow");
      //  $("#firstsicon__for__two").toggleClass('fa-arrow-up-long');
  })

  $(".accordion__display__three").click(function(){
      $(".accordion__hidden__three").toggle("slow");
      // $("#firstsicon__for__three").toggleClass('fa-arrow-up-long');

  })

  $(".accordion__display__four").click(function(){
      $(".accordion__hidden__four").toggle("slow");
      // $("#firstsicon__for__four").toggleClass('fa-arrow-up-long');

  })

  $(".accordion__display__five").click(function(){
      $(".accordion__hidden__five").toggle("slow");
      // $("#firstsicon__for__four").toggleClass('fa-arrow-up-long');

  })

})(jQuery)




$(document).ready(function(){

  gsap.registerPlugin(ScrollTrigger)
  gsap.from(".advantage__inner .image__part img:first-child", {
  opacity: 0,
  y: -200,
  duration: 3,
  scrollTrigger: {
      trigger: ".advantage__section",
          toggleActions:'restart none none none',
          start: 'top 70%',
  }
  })
  gsap.from(".advantage__inner .image__part img:last-child", {
  opacity: 0,
  y: 200,
  duration: 3,
  scrollTrigger: {
      trigger: ".advantage__section",
          toggleActions:'restart none none none',
          start: 'top 70%',
  }
  })

  // career page
  gsap.fromTo(".advantage__section .career", {
  opacity: 0.2,
  x: -1000,
  duration: 3,
  },{ opacity: 0.3,
  x: 2000,
  duration: 3,
  scrollTrigger: {
      trigger: ".advantage__section",
          toggleActions:'restart none none none',
          start: 'top 70%',
  }
})
gsap.fromTo(".advantage__section .career2", {
  opacity: 0.2,
  x: 1000,
  duration: 3,
  },{ opacity: 0.3,
  x: -2000,
  duration: 3,
  scrollTrigger: {
      trigger: ".advantage__section",
          toggleActions:'restart none none none',
          start: 'top 70%',
  }
})
  var tl = gsap.timeline({repeat: -1});
  gsap.from(".accordian-wrapping", {
  opacity: 0,
  y: 300,
  duration: 3,
  scrollTrigger: {
      trigger: ".advantage__section",
          toggleActions:'restart none none none',
          start: 'top 70%',
  }
  })

  tl.fromTo("#accordian_details_one",{opacity:1, duration: 3}, {opacity:0, duration: 3})
      .to("#accordian_item_two",{y:-50, duration:2},'-=2')
      .to("#accordian_details_two",{opacity:1, duration: 2.5},"<=1")
      .to("#accordian_details_two",{opacity:0, duration: 2})
      .to("#accordian_item_three",{y:-105, duration:2},'-=2')
      .to("#accordian_details_three",{opacity:1, duration: 2},"<=1")
      .to("#accordian_details_three",{opacity:0, duration: 1})
      .to("#accordian_item_four",{y:-160, duration:2},'-=2')
      .to("#accordian_details_four",{opacity:1, duration: 1},"<=1")
      .to("#accordian_details_four",{opacity:0, duration: 1})
      .to("#accordian_details_one", {opacity:1, duration: 2})
      .to("#accordian_item_two",{y:0, duration:2},"<")
      .to("#accordian_item_three",{y:0, duration:2},"<")
      .to("#accordian_item_four",{y:0, duration:2},"<")

      // Image Animation

      var ImageAnimate = gsap.timeline({repeat:-1});
      ImageAnimate.fromTo(".slide-img",{scale:.3,duration:2,x:200,y:300,zIndex:1}, {scale:.5, duration:2,x:100,y:200,zIndex:10},"<") //main
            .fromTo('.slide-img1',{scale:.5, duration:2,x:100,y:200,zIndex:2},{scale:1,x:-100,y:0,duration:2,zIndex:11},"<")
            .fromTo('.slide-img2',{scale:1,duration:2,x:-100,y:0},{scale:.3,duration:2,x:200,y:300},"<")
            .to('.slide-img',{scale:1,duration:2,x:-100,y:0}) //main1
            .to('.slide-img1',{scale:.3,duration:2, x:200, y:300,zIndex:3},"<")
            .to('.slide-img2',{scale:.5, duration:2,x:100,y:200,zIndex:5},"<")
            .to('.slide-img',{scale:.3,duration:2, x:200,y:300,zIndex:1}) //main0
            .to('.slide-img2',{scale:1,duration:2,x:-100,y:0},"<")
            .to('.slide-img1',{scale:.5, duration:2,x:100,y:200},"<")

      if (window.matchMedia("(max-width: 575px)").matches) {
        var smallDevice = gsap.timeline({repeat:-1});
        smallDevice.fromTo(".slide-img",{scale:.3,duration:2,x:150,y:300,zIndex:1}, {scale:.5, duration:2,x:100,y:200,zIndex:10},"<") //main
              .fromTo('.slide-img1',{scale:.5, duration:2,x:100,y:200,zIndex:2},{scale:.7,x:-50,y:0,duration:2,zIndex:11},"<")
              .fromTo('.slide-img2',{scale:.7,duration:2,x:-50,y:0},{scale:.3,duration:2,x:150,y:300},"<")
              .to('.slide-img',{scale:.7,duration:2,x:-50,y:0}) //main1
              .to('.slide-img1',{scale:.3,duration:2, x:150, y:300,zIndex:3},"<")
              .to('.slide-img2',{scale:.5, duration:2,x:100,y:200,zIndex:5},"<")
              .to('.slide-img',{scale:.3,duration:2, x:150,y:300,zIndex:1}) //main0
              .to('.slide-img2',{scale:.7,duration:2,x:-50,y:0},"<")
              .to('.slide-img1',{scale:.5, duration:2,x:100,y:200},"<")
      }

})




// scroll menu section
$(window).scroll(function(){
   // scroll-up button show/hide script
   if(this.scrollY > 100){
       $('.submenu__top').addClass("show__when");
   }else{
       $('.submenu__top').removeClass("show__when");
   }
 });

$(window).on('click',function(e){
  if(e.target.className != 'fa-solid fa-bars'){
      $(".menu").removeClass('open');
    }
})


