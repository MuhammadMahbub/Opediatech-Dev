<!-- header section start here -->
  <div class="header">
    <div class="container">
        <div class="menu_section_inner">
            <div class="device__menu">
                <div class="logo__section">
                    <a href="{{ route('index') }}">
                        <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/logo/Logo.png" alt="logo">
                    </a>
                </div>
                <div class="menu__bar common">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="menu">
                <div class="title">
                    <span>Menu</span>
                    <i class="fa-solid fa-xmark common"></i>
                </div>
                <ul>
                    <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/homeNew.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="{{ route('index') }}">Home</a>
                            </div></a>
                        </div>
                    </li>
                    <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/work.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="{{ route('work.index') }}">Work</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/service.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="{{ route('servicepage.index') }}">Services</a>
                            </div>
                        </div>
                    </li> 
                    <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/agency.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="{{ route('galleryPage.index') }}">Gallery</a>
                            </div>
                        </div>
                    </li> 
                    <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/career.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="{{ route('career.index') }}">Career</a>
                            </div>
                        </div>
                    </li> 
                     <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/contacts.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="{{ route('contact.index') }}">Contact</a>
                            </div>
                        </div>
                    </li>
                    @auth
                    <li>
                        <div class="menu_inner_item">
                            <div class="menu_icon_image">
                                <img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/menu/homeNew.png" alt="icon">
                            </div>
                            <div class="menu_link">
                                <a href="/dashboard">Dashboard</a>
                            </div>
                        </div>
                    </li>
                    @endauth
                </ul>
                <!-- menu -->
                <div class="menu_footer">
                    <div class="menu_sm_title">
                        <p>Send your project details</p>
                    </div>
                    <div class="menu_inner_text">
                        <div class="menu_footer_text" style="width:100%">
                            <p>business@opediatech.com</p>
                        </div>
                        <br>

                        <div class="menu_footer_socialIcon">
                            <ul>
                              <li><a target="_blank" href="https://www.facebook.com/Opediatech/"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Facebook.png" alt="image"></a></li>
                              <li><a target="_blank" href="https://www.behance.net/opedia_studio"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Behance.png" alt="image"></a></li>
                              <li><a target="_blank" href="https://www.instagram.com/opedia_tech/"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Instagram.png" alt="image"></a></li>
                              <li><a target="_blank" href="https://api.whatsapp.com/send?phone=01978159172"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/WhatsApp.png" alt="image"></a></li>
                              <li><a target="_blank" href="https://www.dribbble.com/opedia_studio"><img loading="lazy" src="https://opedia.mo.cloudinary.net/opediatech_images/icon/Dribbble.png" alt="image"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header section end here -->
