@include('layouts.frontend.inc.header',[$seo_title="An digital service company enables IT for the future", $seo_description = "We adopted changes spontaneously as a result of the evolving digital service company revolution. We provide assistance in light of the remaining time. "])

<style>
    h3.event_title {
        font-size: 27px;
        line-height: 34px;
        background: linear-gradient(91.57deg, #0057FF 48.67%, #39C1DF 76.12%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        padding-top: 17px;
    }

    h1.event_title {
        background: linear-gradient(91.57deg, #0057FF 48.67%, #39C1DF 76.12%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    

    @media only screen and (max-width: 600px) {
        .gallery_item {
            padding: 4px;
        }
        h3.event_title {
            font-size: 23px;
            line-height: 28px;
        }
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
                            <h1 class="event_title">Gallery</h1> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- hero section end here -->
 

    <!-- Service section start here -->
    <div class="service_section">
        <div class="container"> 
            <div class="service_inner">
                <div class="container">
                    <div class="row">
                        @foreach ($galleries as $gallery)
                        <div class="col-md-4">
                            <a class="software__service__swiper" href="{{ route('galleryPage.details', $gallery->slug ) }}">
                                <div class="service_item gallery_item">
                                    <img style="width: 100% !important;" src="{{ $gallery->event_image }}" alt="image">
                                    <h3 class="event_title">{{  $gallery->event_name }}</h3>
                                </div>
                            </a> 
                        </div> 
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section end here --> 

</div>
     

@include('layouts.frontend.inc.footer')
