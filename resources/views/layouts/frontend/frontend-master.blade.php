@include('layouts.frontend.inc.header',[$seo_title="An digital service company enables IT for the future", $seo_description = "We adopted changes spontaneously as a result of the evolving digital service company revolution. We provide assistance in light of the remaining time. "])

<style>
    .mission_section{
        padding: 120px !important;
    }

    .logoLiderDiv{
        height: 0 !important;
    }
</style>
    <!-- banner and hero section start here -->
    <div class="banner__section">

        @include('layouts.frontend.inc.menu')                                   

        <!-- hero section start here -->
        <div class="hero__section">
            <div class="container">
                <div class="hero__inner">
                    <div class="row align-items-center">
                        <div class="col-md-10 m-auto">
                            <div class="title">
                                <!--<h1><span>A Digital Agency <br> That Shaping The Brand </span></h1>-->
                                <h1><span> Trusted Web and software Development Company That Shaping your Brand </span></h1>
                                <!--<span class="title__span">Providing a complete package of software, IT and digital services to aid business growth and promote brands</span>-->
                                <span class="title__span">Providing complete web and software development, graphics, and digital services to aid business growth and promote company brands</span>
                                <a class="iconic" href="{{ route('work.index') }}"> <span>Let</span>’s Talk About Your Project <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        {{-- <div class="col-md-5">
                            <div class="giffy">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/hero/hero1.gif" alt="agency">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- hero section end here -->
    </div>
    <!-- banner and hero section -->
    
    <!--float section start here-->
    <div class="float__section">
        <a href="https://api.whatsapp.com/send?phone=01950-410100" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="tel:+8801978159172>" target="_blank"><i class="fa-solid fa-phone"></i></a>
        <a href="mailto:business.opediatech.com" targer="_blank"><i class="fa-regular fa-envelope"></i></a>
    </div>
    <!--float section end here-->

    <!-- submenu section start here -->
    <div class="submenu__top ">
        <div class="submenu__section">
            <div class="submenu__inner">
                <div class="submenu__icon common">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- submenu section end here -->


    <!-- mission section start here -->
    <div class="mission_section">
        <div class="mission_area">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="mission_content_section">
                        <div class="quate">
                            <span>VISSION</span>
                        </div>
                        <div class="mission_content">
                            <h2>To grow within the digitalized & technological advancement</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mission_slider">
                        <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/vission.png" alt="vission_img width="100%" height="100%"">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mission section end here -->



    @include('layouts.frontend.inc.service_category')


    <!-- service work section start here -->
     <div class="service__work__section">
        <div class="container">
            <div class="service__work__inner">
                <div class="fadeOut owl-carousel owl-theme">
                    <div class="item" data-dot="<span>1</span>">
                        <h2><span>Our unique workflow is designed to solve the pain point of a business  </span>  </h2>
                    </div>
                    <div class="item" data-dot="<span>2</span>">
                        <h2><span>We analyze and design data-driven strategies for business development </span> </h2>
                    </div>
                    <div class="item" data-dot="<span>3</span>">
                        <h2><span>	We ensure brand-oriented solutions and care for customer satisfaction over the number of projects </span> </h2>
                    </div>
                </div>
                <div class="title">
                    <a href="{{ route('work.index') }}"><span>Our</span> Works <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- service work section end here -->

 
    <!-- facilities section start here -->
    <div class="swiper myTeamSwiper" style="margin-bottom: -150px">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide project_item"> 
            <a href="https://www.behance.net/opediastudio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_one.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Brands.io- SaaS Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item"> 
            <a href="https://dribbble.com/opedia_studio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_two.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Payment Getway Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item">
            <a href="https://www.behance.net/opediastudio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_three.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Cyber security landing page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item"> 
            <a href="https://dribbble.com/opedia_studio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_four.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Digital NFTs Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item"> 
            <a href="https://www.behance.net/opediastudio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_five.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Online Course Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item">
            <a href="https://dribbble.com/opedia_studio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_six.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Digital Crypto Bitcoin Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item"> 
            <a href="https://www.behance.net/opediastudio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_seven.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">IT Solution Company Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item">
            <a href="https://dribbble.com/opedia_studio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_eight.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Medical Find Your Doctor Landing Page -D</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item"> 
            <a href="https://www.behance.net/opediastudio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_nine.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Medical Find Your Doctor Landing Page</h4>
                </div>
            </a>
          </div>
          <div class="swiper-slide project_item">
            <a href="https://dribbble.com/opedia_studio" target="_blank">
                <img width="100%" height="100%" width="100%" src="{{ asset('frontend') }}/assets/images/project/image_three.png" alt="img width="100%" height="100%"">
                <div class="project_overlay"> 
                    <h4 class="project-title">Cyber Security Landing Page</h4>
                </div>
            </a>
          </div>
        </div>
    </div>
   

    {{-- Techonology section  --}}
    <div class="techonology_section">
        <div class="container">
            <div class="techonology_inner">
                <div class="title  text-center text-md-start">
                    <h2><span> Technologies We Use </span>  </h2>
                </div>
                <div class="swiper techonology_swipper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/django.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide"> 
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/dotNet.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/Express.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/figma.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/Laravel.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/MERN.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/MongoDB.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/Nextjs.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/nodejs.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/php.png" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="logoLiderDiv">
                            <img width="100%" height="100%" src="{{ asset('frontend') }}/assets/images/tech/ReactJS_logo.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    {{-- Techonology section --}}


    <!-- client section start here -->
    <div class="client__setction">
        <div class="container">
            <div class="client__inner">
                <div class="title  text-center text-md-start">
                    <h2><span> Clients who trusted us as their <br> problem solver</span>  </h2>
                </div>
                <div class="client__logo">
                    <div class="logo__area">
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/00.png" alt="image">
                            </div>
                        </div>
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/06.png" alt="image">
                            </div>
                        </div>
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/07.png" alt="image">
                            </div>
                        </div>
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/08.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="logo__area">
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/3.png" alt="image">
                            </div>
                        </div>
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/1.png" alt="image">
                            </div>
                        </div>
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/2.png" alt="image">
                            </div>
                        </div>
                        <div class="client_logo_item">
                            <div class="logo__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/09.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="client__logo__mobile__section">
                  <div class="client__logo__mobile">
                      <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/00.png" alt="image">
                      <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/06.png" alt="image">
                      <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/07.png" alt="image">
                      <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/08.png" alt="image">
                      <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/3.png" alt="image">
                      <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/1.png" alt="image">
                  </div>
                </div>

                <!-- LOGO ITEM TWO -->
            </div>
            <div class="client__satisfic">
                <div class="row gx-xl-5  align-items-center">
                    <div class="col-lg-6">
                        <div class="satisfic__list__full">
                            <div class="satisfic__list">
                                <div class="list__title">
                                    <div class="title">
                                        <h3> <span>Clients</span></h3>
                                    </div>
                                    <div class="num">
                                        <span class="number_in">45+</span>
                                    </div>
                                </div>
                                <div class="list__text">
                                    <p>The clients that we have served are diversified in nature. Our clients are digital service seeker corporates and satisfied with our service provided.</p>
                                </div>
                            </div>
                            <div class="satisfic__list">
                                <div class="list__title">
                                    <div class="title">
                                        <h3> <span>Services</span></h3>
                                    </div>
                                    <div class="num">
                                        <span class="number_in">80+</span>
                                    </div>
                                </div>
                                <div class="list__text">
                                    <!--<p>We offer solutions for both technological and business promotional needs, from the production of digital to data-driven solutions.  </p>-->
                                    <p>We provide complete Web & software Development services for both technological and business promotional needs, from the production of digital to data-driven solutions.</p>
                                </div>
                            </div>
                            <div class="satisfic__list">
                                <div class="list__title">
                                    <div class="title">
                                        <h3> <span>Talents</span></h3>
                                    </div>
                                    <div class="num">
                                        <span class="number_in">40+</span>
                                    </div>
                                </div>
                                <div class="list__text">
                                    <p>Both in the domestic and global market, we are known for our performance. We love to call ourselves digital warriors. .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="giffy">
                            <img width="100%" height="100%" width="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/testmonial/03.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client section end here -->
    
    
    
    
    <!--client tab section start here-->
    <div class="client__tab__section">
        <div class="container">
            <div class="client__tab__inner">
                <div class="partners__tab">
                    <div class="title text-center">
                        <h3 class="fs-2 fw-bold"> Partners & Affiliates </h3>
                        <div class="affiliates__tab">
                            <div class="images">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/basis.png" alt="image">
                                <img width="100%" height="100%" class="mb-4"  loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/out_affiliates3.png" alt="image">
                                <img width="100%" height="100%" class="mb-4"  loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/out_affiliates1.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--client tab section end here-->





    <!-- testimonial section start here -->
    <div class="testimonial__section">
        {{-- <div class="quate facilities__quate">
            <span>TESTIMONIALS</span>
        </div> --}}
        <div class="testimonial__inner">
           <div class="container">
            <div class="swiper boss__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial_swiper_slider">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="image__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/testmonial/Test1.png" alt="image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="boss__spec">
                                <div class="title">
                                    <h2>Chee Hoong Tan</h2>
                                    <h4>Bertschi Singapore Pte. Ltd</h4>
                                </div>
                                <div class="para">
                                    <p> A smart software and IT solution provider company concentrates mostly on client satisfaction,
                                    good IT environment practice and offers value for human growth within a broad spectrum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide testimonial_swiper_slider">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="image__section">
                                <img width="100%" height="100%" loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/testmonial/Test2.png" alt="image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="boss__spec">
                                <div class="title">
                                    <h2>Chin Guo Qiang</h2>
                                    <h4>Artemis Health Ventures</h4>
                                </div>
                                <div class="para">
                                    <p>I got excellent cost-effective service and friendly communication, thank you Opedia Technologies Ltd. Hopefully, work again.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="custom_pagi">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>
           </div>
        </div>
    </div>
    <!-- testimonial section end here -->




@include('layouts.frontend.inc.footer')
