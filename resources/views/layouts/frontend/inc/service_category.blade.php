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
                    <div class="swiper-slide service_swiper_slider">
                        <a class="software__service__swiper" href="{{ route('single_service', $category->category_slug) }}">
                            <div class="service_item">
                                <img src="{{ asset($category->image) }}" alt="image">
                                <h3> <span>{{ $category->category_fname }}<br>
                                {{ $category->category_lname }} </span> </h3>
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
