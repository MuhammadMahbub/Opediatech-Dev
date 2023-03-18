@include('layouts.frontend.inc.header',[$seo_title=$category->seo_title ?? '', $seo_description = $category->seo_description ?? ''])

    <!-- banner and hero section start here -->
    <div class="banner__section">
        @include('layouts.frontend.inc.menu')
        <!-- hero section start here -->
        <div class="hero__section">
            <div class="container">
                <div class="hero__inner">
                    <div class="row align-items-center">
                        <div class="col-md-12 m-auto">
                            <div class="title">
                                <h1><span>It’s All About Our Pro’s <br> Thinking And Finger Trick </span></h1>
                                <span class="title__span">Our pro players are up to date with trending problems. They are always busy to make unique solutions for your proucts.</span>
                                <a  class="service__page" href="{{ route('work.index') }}"> <span>Di</span>ve In <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner and hero section -->

    <!--float section start here-->
    <div class="float__section">
        <a href="https://api.whatsapp.com/send?phone=01950-410100" target="_blank"><i class="child-one fa-brands fa-whatsapp"></i></a>
        <a href="tel:+8801978159172>" target="_blank"><i class="child-two fa-solid fa-phone"></i></a>
        <a href="mailto:business.opediatech.com" targer="_blank"><i class="child-three fa-regular fa-envelope"></i></a>
    </div>
    <!--float section end here-->

    @forelse ( $single_service as $ser )
    <!-- SAAS section start here -->


   @if ( $loop->index % 2 == 0)
    <div class="web__design" style="background-color:{{ $ser->color_code }}; padding: 83px 0px 46px 0px;">
        <div class="container">
            <div class="web__inner">
                <div class="title justify-content-sm-center justify-content-md-between">
                    <h2 class="">{{ $ser->service_title }}</h2>
                    <img class="header__logo" src="https://opedia.mo.cloudinary.net/opediatech_image/logo/web__design.logo.png" alt="logo">
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="info">
                            <div class="content">
                                <p>{{ $ser->service_desc }}</p>
                            </div>
                            <div class="information">
                                <ul>
                                    <li>
                                        <span class="first-child">Service Type</span>
                                        <span class="last-child">: &nbsp; {{ $ser->service_type}}</span>
                                    </li>
                                    <li>
                                        <span class="first-child">Service Catagory</span>
                                        <span class="last-child">: &nbsp; {{ $category->category_fname  }} {{ $category->category_lname }}</span>
                                    </li>
                                    <li>
                                        <span class="first-child">Platform Type</span>
                                        <span class="last-child">: &nbsp; {{$ser->platform_type}}</span>
                                    </li>
                                    <li>
                                        <span class="first-child">Operating System</span>
                                        <span class="last-child">: &nbsp; {{$ser->operating_system}}</span>
                                    </li>
                                    <li>
                                        <span class="first-child">Comlepted Project</span>
                                        <span class="last-child">: &nbsp; {{$ser->project_complete}}</span>
                                    </li>
                                    <li>
                                        <span class="first-child">Work Experience</span>
                                        <span class="last-child">: &nbsp; {{$ser->work_experience}}</span>
                                    </li>
                                    <li>
                                        <span class="first-child">Total Clients</span>
                                        <span class="last-child">: &nbsp; {{$ser->total_clients}}</span>
                                    </li>
                                </ul>
                                <p class="opedee">They all are satisfied, people who had faith in our service. That’s why they all recommend <span>OPEDIA TECHNOLOGIES LIMITED.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="image__section">
                            <img src="https://opedia.mo.cloudinary.net/opediatech_dynamic/{{$ser->service_image}}" alt="web__design">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SASS section end here -->
    @else
    <div class="web__design" style="background-color:{{ $ser->color_code }}; padding: 83px 0px 46px 0px;">
        <div class="container">
            <div class="web__inner">
                <div class="title justify-content-sm-center justify-content-md-between">
                    <img class="header__logo" src="https://opedia.mo.cloudinary.net/opediatech_image/logo/web__design.logo.png" alt="image">
                    <h2 class="">{{ $ser->service_title }}</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="image__section">
                            <img src="https://opedia.mo.cloudinary.net/opediatech_dynamic/{{$ser->service_image}}" alt="web__design">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="content">
                                <p>We count on our technically sound expert developers for the ability to understand your ideas
                                     and transform them into reality. We offer cutting-edge research, HCD UI & UX design, and
                                      development for the mobile application to match unique project requirements.</p>
                            </div>
                            <div class="information web__dev">
                                <ul>
                                    <li>
                                        <span class="last-child"> Website Design and Development  &nbsp; :</span>
                                        <span class="first-child">Service Type</span>
                                    </li>
                                    <li>
                                        <span class="last-child">  {{ $category->category_fname  }} {{ $category->category_lname }} &nbsp; : </span>
                                        <span class="first-child"> Service Catagory</span>
                                    </li>
                                    <li>
                                        <span class="last-child"> {{$ser->platform_type}} &nbsp; : </span>
                                        <span class="first-child"> Platform Type</span>
                                    </li>
                                    <li>
                                        <span class="last-child"> {{$ser->operating_system}} &nbsp; : </span>
                                        <span class="first-child"> Operating System</span>
                                    </li>
                                    <li>
                                        <span class="last-child">{{$ser->project_complete}} &nbsp; : </span>
                                        <span class="first-child"> Comlepted Project</span>
                                    </li>
                                    <li>
                                        <span class="last-child">{{$ser->work_experience}} &nbsp; : </span>
                                        <span class="first-child"> Work Experience</span>
                                    </li>
                                    <li>
                                        <span class="last-child"> {{$ser->total_clients}} &nbsp; : </span>
                                        <span class="first-child"> Total Clients</span>
                                    </li>
                                </ul>
                                <p class="opedee text-end">They all are satisfied, people who had faith in our service. That’s why they all recommend <span>OPEDIA TECHNOLOGIES LIMITED.</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   @endif


    @empty
       <div class="text-center">
        <span style="color:red; font-size:25px">Service item not found</span>
       </div>
    @endforelse


    @if ($single_service_details)

    <div class="container">
        <!--<div class="service-blog-1">-->
            <!--<h3 class="text-center">{{ $single_service_details->main_title }}</h3> -->
            <!--<div class="service-blog-img-text">-->
            <!--       <p>{!! $single_service_details->main_title_desc !!}</p>-->
            <!--</div>-->
        <!--</div>-->
        <div class="service-blog-2">
            <h2 class="text-center">{{ $single_service_details->blog_title }}</h2>
            <div class="row row-ser" style="margin-top: 10px !important"> 
                <div class="service-blog-img-text">
                    <p>{!! $single_service_details->blog__title_desc !!}</p>
                </div>
            </div>
        </div>
        <div class="service-blog-3">
            <h5 class="expertise">{{ $single_service_details->quote_title }}</h5>
            <div class="service-blog-3-bg" style="background: url(https://opedia.mo.cloudinary.net/opediatech_images/Service/error-bg.png)">
              {!! $single_service_details->quote_desc !!}
            </div>
        </div>

        <!--<div class="service-blog-4">-->
        <!--    <h2>{{ $single_service_details->details_title }}</h2>-->
        <!--</div>-->
        <!--<div class="sp-service-blog">-->
        <!--    <div class="sp-box-service">-->
        <!--        {!! $single_service_details->details_desc !!}-->
        <!--    </div>-->
        <!--</div>-->
   </div>


    @else
       <div class="text-center">
            <span style="color:red; font-size:25px">Description Not Found</span>
       </div>
    @endif


    <!-- our offer section start here -->
    <div class="ouroffer__section">
        <div class="container">
            <div class="ouroffer__inner">
                <div class="offer__banner">
                    <div class="title text-center">
                        <h2>Sounds like a place for you?<br>Then why don’t <a href="{{ route('work.index') }}"><strong style="color:#fff">Gi</strong> ve it a shot</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our offer section end here -->


@include('layouts.frontend.inc.footer')
