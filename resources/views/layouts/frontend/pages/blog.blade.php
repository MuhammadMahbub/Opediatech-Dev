    @include('layouts.frontend.inc.header',[$seo_title=SeoSettings()->blog_page_seo_title, $seo_description=SeoSettings()->blog_page_seo_description, $seo_keywords=SeoSettings()->blog_page_seo_keywords ])
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
                                <h1><span>Experts Here <br> Use Their Maximum Effort </span></h1>
                                <span class="title__span">We work with best of the bests. It helps us to secure the advanced future for our team family members.</span>
                                <a  class="blog__page" href="{{ route('work.index') }}"> <span>Di</span>ve In <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        {{-- <div class="col-md-5">
                            <div class="giffy">
                                <img src="https://opedia.mo.cloudinary.net/opediatech_images/hero/blog.gif" alt="image">
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
    @php
        $blogs = App\Models\blog::orderBy('id', 'desc')->get()
    @endphp
    <!-- blog section start here -->
    <div class="blog__section">
        <div class="container">
            <div class="blog__inner">
                <div class="title">
                    <h2><span>Read what our people says</span></h2>
                </div>
                <div class="image__section__outer">
                    <div class="row align-items-center justify-content-start">
                        <div class="main_blog_details_section_warpper">
                        @foreach ($blogs as $blog )
                            <div class="main_blog_details_section">
                                <div class="image__section for__blog clip__path">
                                    <img loading="lazy" src='{{$blog->blog_image}}' alt="image">
                                </div>
                                <div class="content">
                                    <p>{{$blog->created_at->format('d M Y')}}</p>
                                    <h4  data-bs-toggle="modal" data-bs-target="#exampleModal" >{{$blog->blog_title}}</h4>
                                    <!-- Modal start -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-box">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <img loading="lazy" class="modal-img" src='{{$blog->blog_image}}' alt="modalimg" srcset="">
                                                <div>
                                                    <p class="model-date">{{$blog->created_at->format('d M Y')}}</p>
                                                    <h2 class="model-title">{{$blog->blog_title}}</h2>
                                                    <p class="model-dis">{{$blog->blog_desc }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->
                                </div>
                            </div>
                         @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end here -->
@include('layouts.frontend.inc.footer')
