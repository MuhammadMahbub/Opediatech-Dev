

    <div class="footer_main_class">
        <!-- challange section start here -->
        <div class="challange__section">
            <div class="container">
                <div class="challange__inner"> 
                        <div class="our__info">
                            <div class="title">
                                <p>Want to <br> know more about us??</p>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <h4 class="country__address">Bangladesh Office</h4>
                                    <div class="address">
                                        <p>
                                            <a href="https://goo.gl/maps/mrWJjjmzDBB2nfZTA">
                                                Shyamoli Square Complex Building, <br> Level-4(On Top of Janata Bank), <br> Shyamoli, Dhaka 1207
                                            </a> 
                                        </p> <br>
                                    </div>
                                    <div class="contact">
                                        <p><a href="tel:+8801978159172>" target="blank">Mobile: +880 1978159172</a></p>
                                        <p><a href="mailto:business@opediatech.com">business@opediatech.com</a></p>
                                    </div>
                                            <a class="btn-iconic mt-4" target="_blank" href="{{asset('frontend/assets/company-profile-for-web.pdf')}}">  <span>Download</span> our profile  </a>
                                    
                                </div>
                                <div class="col-md-6">
                                    <h4 class="country__address mobile_address">Singapore Office</h4>
                                    <div class="address">
                                        <p>
                                            <a href="https://www.google.com/maps/place/Thye+Hong+Centre/@1.2910836,103.812645,17z/data=!3m2!4b1!5s0x31da19c1302cd257:0x5d96af29538b14d0!4m5!3m4!1s0x31da1b6c5cb1d149:0xdb7f71f7bbe19c13!8m2!3d1.2910782!4d103.8148337">
                                                2 Leng Kee Road #03-10, <br>
                                                Thye Hong Center, Singapore(159086)
                                            </a> 
                                        </p> <br>
                                    </div>
                                    <div class="contact">
                                        <p><a href="mailto:info@opediatech.com.sg" target="blank">info@opediatech.com.sg</a></p>
                                        <p><a href="tel:+6591899336>" target="blank">Mobile: +6591899336</a></p> 
                                        <p><a href="https://wa.me/<+6591043241>" target="blank">WhatsApp: +6591043241</a></p> <br>
                                    </div>
                                </div>
                            </div> 
                            <div class="subcribe_btn">
                                <div class="foot">
                                    <form action="{{ route('subscribe') }}" method="post" id="checkformId">
                                        @csrf
                                        <input type="email" name="email" class="footer_email" id="email" placeholder="Email address">
                                        <span></span>
                                        <div class="checkbutton d-flex">
                                            <div class="checkOpOne">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            </div>
                                            <div class="check_para">
                                                <span>I agree that my personal data is stored and processed according to the privacy policy.</span> 
                                            </div>
                                        </div>
                                        <input type="submit" class="subscribebtn" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                            <a class="btn-iconic mobile_down_btn d-none mt-4" target="_blank" href="{{asset('frontend/assets/company-profile-for-web.pdf')}}">  <span>Download</span> our profile  </a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
                                      
        <!-- challange section end here -->

        <!-- footer section start here -->
        <div class="footer__section">
            <div class="container">
                <div class="footer__inner">
                    <p>Copyright &#169; 2021 Opedia Technologies Limited. All rights reserved.</p>
                    <div class="social__media">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/Opediatech/"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Facebook.png" alt="Opedia facebook"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/opedia_technologies/"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Instagram.png" alt="Opedia instagram"></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=01978159172"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/WhatsApp.png" alt="Opedia whatsapp"></a></li>
                            <li><a target="_blank" href="https://dribbble.com/teamopedia"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Dribbble.png" alt="Opedia dribbble"></a></li>
                            <li><a target="_blank" href="https://www.behance.net/weTeamOpedia"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Behance.png" alt="Opedia behance"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section end here -->
   </div>

    <script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
  
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.min.js"></script>
    
    <!--<script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"></script>
    
    <script src="{{ asset('frontend') }}/assets/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

  
    @yield('script')


    @if (Session::has('success'))
        <script>
            toastr.success("{!! Session::get('success') !!}") 
        </script>
    @endif
 
 
</body>
</html>
