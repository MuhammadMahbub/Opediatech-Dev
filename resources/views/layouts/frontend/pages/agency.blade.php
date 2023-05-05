 @include('layouts.frontend.inc.header',[$seo_title=SeoSettings()->agency_page_seo_title, $seo_description=SeoSettings()->agency_page_seo_description, $seo_keywords=SeoSettings()->agency_page_seo_keywords ])


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
                                <h1><span>Let us tell you about <br> our origin  </span></h1>
                                <!--<span class="title__span">In the process of growing as a team, we stayed down to the earth and focused ahead. The reminiscence of the journey always brings a smile to our faces.  </span>-->
                                <span class="title__span">In the process of growing professional website design agency as a team, we stayed down to the earth and focused ahead. The reminiscence of the journey always
                                    brings a smile to our faces</span>
                                <a  class="work__page" href="{{ route('work.index') }}"> <span>Di</span>ve In <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- hero section end here -->
    </div>
    <!-- banner and hero section -->
    
    <!--float section start here-->
    <div class="float__section">
        <a href="https://api.whatsapp.com/send?phone=01950-410100" target="_blank"><i class="child-one fa-brands fa-whatsapp"></i></a>
        <a href="tel:+8801978159172>" target="_blank"><i class="child-two fa-solid fa-phone"></i></a>
        <a href="mailto:business.opediatech.com" targer="_blank"><i class="child-three fa-regular fa-envelope"></i></a>
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

    {{-- <!-- era section start here -->
    <div class="era__section">
        <div class="container">
            <div class="era__inner">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="image-animation">
                            <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/pic-1.png" alt="" class="slide-img">
                            <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/pic-2.png" alt="" class="slide-img1">
                            <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/pic-3.png" alt="" class="slide-img2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="title">
                            <div class="quate title__quate">
                                <span>WORK</span>
                            </div>
                            <h2> <span> The story started as the journey began  </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- era section end here -->

    <!-- agency story section start here hannan -->
    <!--<div class="agency__story__section">-->
    <!--    <div class="container">-->
    <!--        <div class="agency__story__inner">-->
    <!--            <ul class="timeline">-->
    <!--                <li>-->
    <!--                    <div class="direction-l">-->
    <!--                        <div class="quate title__quate">-->
    <!--                            <span>2017</span>-->
    <!--                        </div>-->
    <!--                        <div class="flag-wrapper">-->
    <!--                            <span class="border1"></span>-->
                                <!--<span class="flag">Corporate Branding</span>-->
                                <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
    <!--                        </div>-->
    <!--                        <div class="desc">We started as a bunch of enthusiasts with a dream to thrive in the international marketplace. With the spark to grow as a team of professionals, we made our way through the global freelancing industry. Initially, we focused on establishing our strong corporate branding and offering services of any range and splendid quality.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="direction-r">-->
    <!--                        <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/timeline1.png" alt="">-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="direction-l">-->
    <!--                        <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/timeline2.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="direction-r">-->
    <!--                        <div class="quate title__quate">-->
    <!--                            <span>2018</span>-->
    <!--                        </div>-->
    <!--                        <div class="flag-wrapper">-->

                            <!--<span class="flag">Corporate Branding</span>-->
                            <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
    <!--                        </div>-->
    <!--                        <div class="desc">Initially, with a competitive team of motion and videography, we started our journey in the global marketplace. Our target was to establish a solid base as a digital solution provider entity and as an individual to shine within the team. We learned about professional project management as a team and as an individual while being a part of each project.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="direction-l">-->
    <!--                        <div class="quate title__quate">-->
    <!--                            <span>2019</span>-->
    <!--                        </div>-->
    <!--                        <div class="flag-wrapper">-->
    <!--                            <span class="border1"></span>-->
                                <!--<span class="flag">Corporate Branding</span>-->
                                <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
    <!--                        </div>-->
    <!--                        <div class="desc">Our rise started as we launched our design studio officially and added new services to offer our client segments as the demand for new services was soaring. We started a journey this year with WordPress development and web design with a passion to try our luck out of our comfort zone.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="direction-r">-->
    <!--                        <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/timeline3.png" alt="">-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="direction-l">-->
    <!--                        <img src="https://opedia.mo.cloudinary.net/opediatech_images/agency/timeline4.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="direction-r">-->
    <!--                        <div class="quate title__quate">-->
    <!--                            <span>2020</span>-->
    <!--                        </div>-->
    <!--                        <div class="flag-wrapper">-->
                                <!--<span class="flag">Corporate Branding</span>-->
    <!--                        </div>-->
    <!--                        <div class="desc">With the emerging need for automated technology solutions, businesses seek more agile and focused aids. With our proven expertise and passion for technology, we stepped into the customized software development industry.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="direction-l">-->
    <!--                        <div class="quate title__quate">-->
    <!--                            <span>2021</span>-->
    <!--                        </div>-->
    <!--                        <div class="flag-wrapper">-->
    <!--                            <span class="border1"></span>-->
                                <!--<span class="flag">Corporate Branding</span>-->
                                <!-- <span class="time-wrapper"><span class="time">2011 - 2013</span></span> -->
    <!--                        </div>-->
    <!--                        <div class="desc">During the pandemic as the whole world was suffering, we had gone through the most challenging phase of our journey so far. Yet we beat this phase as a team while working remotely and with the support of our robust team players.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="direction-r">-->
    <!--                        <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/timeline5.png" alt="">-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li>-->
    <!--                    <div class="direction-l">-->
    <!--                        <img src="https://opedia.mo.cloudinary.net/opediatech_images/agency/timeline6.png" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="direction-r">-->
    <!--                        <div class="quate title__quate">-->
    <!--                            <span>2022</span>-->
    <!--                        </div>-->
    <!--                        <div class="flag-wrapper">-->
                            <!--<span class="flag">Corporate Branding</span>-->
    <!--                        </div>-->
    <!--                        <div class="desc">Finally, we decided to launch our local office as a legislative company obliging by all the industrial legal procedures and rules. Currently, we are serving in local and global web and software industries simultaneously and thriving to grow bigger as a company.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- agency story section end here -->


    <!-- gallery section  start here -->
    <div class="gallery__section">
        <div class="cotainer">
            <div class="gallery__inner">
                <div class="title">
                    <h2>Hard work and patience
                    <p>Reawarded us this amazing team</p></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section  start here -->


    <!-- memory section section start here -->
    <div class="memory__section">
        <div class="container">
            <div class="menory__inner">
                <div class="timeline__section">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="image__section">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/memo1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content__section">
                                <div class="title">
                                    <h4>2017</h4>
                                </div>
                                <div class="para">
                                    <p>
                                      The journey started in a drawing room with 3 old laptops and a dream to start a winning career in the international marketplace. It was not easy to start afresh in the global marketplace with zero work experience in this sector. But the bonding that was created among the founders in that time is still fresh like forever.
                                    </p>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline__section">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="content__section">
                                <div class="title">
                                    <h4>2018</h4>
                                </div>
                                <div class="para">
                                    <p>
                                        We still feel the same excitement when we remember the day we first got a real project and the day when we delivered the finished project successfully. It’s true that there is nothing sweeter than the first time.
                                    </p>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image__section">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/memo2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline__section">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="image__section">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/memo3.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content__section">
                                <div class="title">
                                    <h4>2019</h4>
                                </div>
                                <div class="para">
                                    <p>
                                    Starting with the web development team and introducing a production studio was like watching a dream becoming true. The whole process took us a while to settle down and grow initially. But we made it even then.
                                    </p>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline__section">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="content__section">
                                <div class="title">
                                    <h4>2020</h4>
                                </div>
                                <div class="para">
                                    <p>
                                       Introducing a custom made software section was not an easy job either. We had to look for the right fit for a while, we also got to learn new things in the process. There was a time that came as well when we thought we must give up on custom web and software development. But we are here today!
                                    </p>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image__section">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/memo4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline__section">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="image__section">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/agency/memo5.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content__section">
                                <div class="title">
                                    <h4>2021</h4>
                                </div>
                                <div class="para">
                                    <p>
                                       This year again gave us a hard lesson. Made us even more conscious, down-to-earth and compassionate. We learned that life is full of surprises in so many ways and it has more to show us in the future.
                                    </p>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- memory section section end here -->

 @include('layouts.frontend.inc.footer')
