@include('layouts.frontend.inc.header',[$seo_title="Contact Us", $seo_description = "Take a look at our app design, web design & development projects to create your digital products. Find our amazing  work stories here!"])
    <!-- banner and hero section start here -->
    <div class="banner__section">

        @include('layouts.frontend.inc.menu')

    </div>
    <!-- banner and hero section -->
    @if(session()->has('success'))
    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          {{ session()->get('success') }}
       </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    @endif
  <main>
        <div class="inner-head" style="padding-top:60px">
          <div class="container">
            <div class="hero__inner" style="padding-top: 20px">
                <div class="row align-items-center">
                    <div class="col-md-10 m-auto">
                        <div class="title text-center">
                            <h1><span>LOOKING FORWARD TO CONTACT US?</span></h1>
                            <span class="contact_title_span">If you need any digital product or product related idea, lets book a meeting.</span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        </div>
        <div class="contact-form-section">
            <div class="container">
                <div class="map-cont mt-40">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.240565619724!2d90.36354751536302!3d23.774446393773275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c152946ccfad%3A0xc8edb7d360ab91fe!2sOpedia%20Technologies%20Limited!5e0!3m2!1sen!2sbd!4v1664171519995!5m2!1sen!2sbd" width="100%" height="407em" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
                <p class="c_desc">
                    Kindly share your name, email address and message in case you want to hear from us soon. You can also share your contact number with the message if you want us to contact you.
                </p>

                <div class="contact-container">
                    
                    <div class="row">
                        <!--<div class="col-12 col-lg-7 col-md-7 col-sm-12 m-form">-->
                        <div class="col-12 col-xl-7 col-lg-12 col-md-12 col-sm-12 m-form">
                            <form action="{{route('contact.store')}}" method='post'>
                                @csrf
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label >
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type full name"name='fname'/>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label" >Email Address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type full email" name='email'/>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name='message' ></textarea>
                                </div>
                                <button type='submit' class="send-btn">SEND</button>
                            </form>
                        </div>
                        <!--<div class="col-12 col-lg-5 col-md-5 col-sm-12 mt-5">-->
                        <div class="col-12 col-xl-5 col-lg-12 col-md-12 col-sm-12 m-form">
                            <div class="contact-info address">
                                <div class="phone d-flex align-items-center c_i_list">
                                    <div class="fn-icon">
                                      <i class="fa-solid fa-phone contact-info-icon fn-icon"></i>
                                    </div>
                                    <a href="tel:+8801978159172>" target="blank">+88 01978159172</a>
                                </div>
                                <div class="email d-flex align-items-center c_i_list">
                                    <div class="fn-icon">
                                        <i class="fa-solid fa-envelope contact-info-icon fn-icon"></i>
                                    </div>
                                    <!--<p class="contact-info-text">business@opediatech.com</p>-->
                                    <a href="mailto:business@opediatech.com" target="blank">business@opediatech.com</a>
                               </div>

                               <div class="location d-flex align-items-center my-3 c_i_list">
                                    <div class="fn-icon">
                                      <i class="fa-solid fa-location-dot contact-info-icon"></i>
                                    </div>
                                    <p class="contact-info-text ">
                                        <a href="https://goo.gl/maps/mrWJjjmzDBB2nfZTA"> 
                                           Shyamoli Square Complex Building, Level-4(On Top of Janata Bank), Shyamoli, Dhaka 1207
                                        </a>
                                    </p>
                                </div>
                                
                               <div class="location d-flex align-items-center my-3 c_i_list">
                                    <div class="fn-icon">
                                      <i class="fa-solid fa-location-dot contact-info-icon"></i>
                                    </div>
                                    <p class="contact-info-text ">
                                        <a href="https://www.google.com/maps/place/Thye+Hong+Centre/@1.2910836,103.812645,17z/data=!3m2!4b1!5s0x31da19c1302cd257:0x5d96af29538b14d0!4m5!3m4!1s0x31da1b6c5cb1d149:0xdb7f71f7bbe19c13!8m2!3d1.2910782!4d103.8148337"> 
                                             2 Leng Kee Road #03-10, <br>
                                            Thye Hong Center, Singapore(159086)
                                        </a>
                                    </p>
                                </div>
                  
                </div>

                <div class="social-info d-flex justify-content-between">
                  <a class="icons d-flex justify-content-center align-items-center" >
                    <span  class="iconify icon"  data-icon="akar-icons:instagram-fill"></span>
                  </a>
                  
                  <a class="icons d-flex justify-content-center align-items-center" >
                    <span class="iconify icon" data-icon="ant-design:youtube-outlined" ></span>
                  </a>
                  
                  <a class="icons d-flex justify-content-center align-items-center" >
                    <span class="iconify icon" data-icon="akar-icons:linkedin-fill"></span>
                  </a>
                  
                  <a class="icons d-flex justify-content-center align-items-center" >
                    <span class="iconify icon"  data-icon="cib:facebook-f"  ></span>
                  </a>
                  
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </main>

@include('layouts.frontend.inc.footer')