<style>
    h3.event_title {
        font-size: 27px;
        line-height: 34px;
        background: linear-gradient(91.57deg, #0057FF 48.67%, #39C1DF 76.12%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        padding-top: 17px;
    }

    .software__service__swiper .gallery_item{
        padding: 0 !important;
    }
    .software__service__swiper .event_title{
        padding-bottom: 14px !important;
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

<!-- Service section start here -->
<div class="service_section">
    <div class="container">
        <div class="service_header">
            <div class="service_header_left">
                <h2><span>Creating Brand Value
                    for <br> Business entities  </span> 
                </h2>
            </div>
            <div class="service_header_right">
                <div class="quate service_quate">
                    <span>SERVICES</span>
                </div>
            </div>
        </div>

        <div class="service_inner">
            <div class="swiper serviceSwiper">
                <div class="swiper-wrapper">
                    @php
                        $category_data = App\Models\ServiceCategory::all();
                    @endphp
                    @forelse ( $category_data as $category )
                    {{-- <div class="swiper-slide service_swiper_slider">
                        <a class="software__service__swiper" href="{{ route('single_service', $category->category_slug) }}">
                            <div class="service_item">
                                <img src="{{ asset($category->image) }}" alt="image">
                                <h3> <span>{{ $category->category_fname }}<br>
                                {{ $category->category_lname }} </span> </h3>
                            </div>
                        </a>
                    </div> --}}
                    <div class="swiper-slide service_swiper_slider">
                        <a class="software__service__swiper" href="{{ route('single_service', $category->category_slug) }}">
                            <div class="service_item gallery_item">
                                <img style="width: 100% !important;" src="{{ asset($category->image) }}" alt="image">
                                <h3 class="event_title">{{$category->category_fname}} {{ $category->category_lname }}</h3>
                            </div>
                        </a> 
                    </div> 
                    @empty
                        <span style="font-size:20px; color:red">Service Not Found</span>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service section end here -->
