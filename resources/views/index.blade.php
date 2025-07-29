@include('layouts.header')
{{-- <script type="application/json" class="swiper-config">
  {
    "loop": true,
    "speed": 600,
    "autoplay": {
      "delay": 5000
    },
    "slidesPerView": "auto",
    "pagination": {
      "el": ".swiper-pagination",
      "type": "bullets",
      "clickable": true
    },
    "breakpoints": {
      "320": {
        "slidesPerView": 2,
        "spaceBetween": 40
      },
      "480": {
        "slidesPerView": 3,
        "spaceBetween": 60
      },
      "640": {
        "slidesPerView": 4,
        "spaceBetween": 80
      },
      "992": {
        "slidesPerView": 6,
        "spaceBetween": 120
      }
    }
  }
</script> --}}
<style>

  .promo-banner p{
    font-family: var(--nav-font);
    color: var(--contrast-color);
  }

  @media(max-width: 340px){
    .promo-banner p{
      font-size: 7px;
    }
  }

  @media(min-width: 341px){
    .promo-banner p{
      font-size: 10px;
    }
  }

  @media(min-width: 550px){
    .promo-banner p{
      font-size: 15px;
    }
  }

  @media(min-width: 800px){
    .promo-banner p{
      font-size: 22px;
    }
  }
  
</style>
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/header-logo.webp')}}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown"><a href="{{route('product.card')}}"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{route('product.card')}}">RFID Smart Card</a></li>
                  <li><a href="{{route('product.wristband')}}">RFID Wristband</a></li>
                </ul>
            </li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            {{-- <li><a href="#portfolio">Gallery</a></li> --}}
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#contact">Get Quote</a>

  </div>
</header>

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    @foreach ($homeBanner as $banner)
      <img src="{{ asset('storage/' . $banner)}}" alt="" data-aos="fade-in">
    @endforeach
    <div class="container">

      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>RFID & NFC Technology</h2>
          <p>SIMPLE | PRECISE | SECURE</p>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center">

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <img src="{{asset('assets/img/cpu.webp')}}" style="width: 64px; margin-bottom: 15px;">
            <h3>Strong<br>Chipset<br>Durability</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <img src="{{asset('assets/img/thumb.webp')}}" style="width: 64px; margin-bottom: 15px;">
            <h3>Excellent<br>Material<br>Quality</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <img src="{{asset('assets/img/warranty.webp')}}" style="width: 64px; margin-bottom: 15px;">
            <h3>1 Year<br>Guarantee</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="icon-box">
            <img src="{{asset('assets/img/delivery.webp')}}" style="width: 70px; margin-bottom: 15px;">
            <h3>Faster<br>Delivery</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="icon-box">
            <img src="{{asset('assets/img/custom.webp')}}" style="width: 64px; margin-bottom: 15px;">
            <h3>Custom Fit<br>Solutions</h3>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">

        <div class="image col-lg-5 order-2 order-lg-2">
            <img src="{{asset('assets/img/about-us.webp')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 order-1 order-lg-1 content">
          <p>
              <b>PT Inovasi Masa Depan</b> was created to provide innovative RFID (Radio Frequency Identification)
              and NFC (Near Field Communication) solutionstailored to the evolving needs of modern businesses.
              Our journey began with the distribution of Hotel RFID Cards across Indonesia,
              serving the hospitality sector with high-grade materials to meet the standards of leading hotels.
          </p>
          <p>
              Our RFID Card is available in a variety of materials to suit the diverse
              needs and preferences of our clients. From durable PVC & metal cards to
              stylish and sustainable options such as wooden cards and environmental
              friendly material. Our dedication to quality and innovation has made us a
              trusted partner for businesses seeking reliable RFID solutions.
          </p>
          <p class="end">
              <b>PT Inovasi Masa Depan</b>, will continue to innovate and expand our offerings,
              striving to be a trusted partner for industries seeking smarter, more efficient solutions.
              As we grow, we are committed to expanding our portfolio and delivering cutting-edge products for diverse sectors.
          </p><br>
        </div>

      </div>
    </div>
  </section>

  <section id="vision" class="vision section dark-background">
    <img src="{{asset('assets/img/bg-web.webp')}}" alt="" data-aos="fade-in">
    <div class="container">
      <div class="row justify-content-left text-left" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12">
          <h2>Vision</h2>
          <p>
            To be a leading provider of innovative technology solutions, transforming industries with sustainable, 
            reliable, and cutting-edge products that enhance efficiency, security, and customer experience.
          </p><br><br>
        </div>
        <div class="col-xl-12">
          <h2>Mission</h2>
          <p><b>Adapt and Innovate:</b> Continuously evolve our technology to meet 
                the demands of an ever-changing market.</p>
          <p><b>Client-Centric Approach:</b> Build strong, lasting partnerships by providing customized
                solutions that align with our clients’ goals and values.</p>
          <p><b>Prioritize Quality:</b> Uphold the highest standards of quality and reliability in
                all our products, ensuring long-term client satisfaction.</p>
          <p><b>Sustain Growth:</b> Expand our influence across multiple industries, from hospitality
                to logistics, by addressing unique business needs.</p>
        </div>
      </div>
    </div>
  </section><!-- End Vision Section -->
  
  {{-- <section>
    <div class="promo-banner" style="position: relative; text-align: left;">
      @foreach ($banners as $banner)
          <img src="{{ asset('storage/' . $banner->promo_banner)}}" alt="" data-aos="fade-in" style="width: 100%;">
          <p style="position: absolute; top: 50%; left: 70%; transform: translate(-50%, -50%); margin: 0;">
            Our RFID key cards are fully compatible with all major RFID guest room lock systems, ensuring seamless integration and secure access for your guests.
          </p>
      @endforeach
    </div>
  </section> --}}

  <section class="swiper-banner p-0">
    <div class="swiper init-swiper">
      <div class="swiper-wrapper">
        @foreach ($promoBanner as $banner)
          <div class="swiper-slide"><img src="{{ asset('storage/' . $banner)}}" class="img-fluid" alt=""></div>
        @endforeach 
      </div>
      <!-- Navigasi -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
 

  


  <!-- Call To Action Section -->
  {{-- <section id="call-to-action" class="call-to-action section dark-background">

    <img src="{{asset('assets/img/cta-bg.jpg')}}" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Call To Action</h3>
            <p>Call us for order and any questions</p>
            <a href="https://wa.me/+6281806338869" class="cta-btn"> <i class="bi bi-whatsapp"> </i> WhatsApp</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section --> --}}

  {{-- <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Gallery</h2>
      <p>Our Gallery</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-product">Card</li>
          <li data-filter=".filter-branding">Web</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="{{asset('assets/img/products/environmental_series.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Environmental Series</h4>
              <p>Specification</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Specification <br>
                              •	Chips: Mifare 1K, F08, Ultralight evl, Ultralight c, Ntag213, Ntag216, CJ8, Sle4442, Sle4428 or customized <br>
                              •	Material: Environmental, Degradable material <br>
                              •	Size: 85.4mm x 54mm <br>
                              •	Thickness: 0.76mm / 0.84mm <br>
                              •	Printing: CM Y K Printing, Silk screen, Digital print <br>
                              •	Surface: Glossy / Matte <br>
                              •	Certification: CE, FCC, RoHS" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Product 1</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Branding 1</h4>
              <p>Lorem ipsum, dolor sit</p>
              <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section --> --}}

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p><b>Jl. Sawo VIII Blok SV no. 3, Bekasi<br>West Java 17131 - Indonesia</b></p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-whatsapp flex-shrink-0"></i>
            <div>
              <h3>WhatsApp</h3>
              <a href="https://wa.me/+6281806338869"><p>+62 818 0633 8869</p></a>
              <a href="https://wa.me/+6282122787878"><p>+62 821 2278 7878</p></a>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <a href="mailto:sales@inovasimasadepan.com"><p>sales@inovasimasadepan.com</p></a>
            </div>
          </div><!-- End Info Item -->

        </div>

        <!-- <div class="col-lg-8">
          <form action="{{ route('send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="number" class="form-control" name="mobile_number" placeholder="Your Mobile Number" required="">
              </div>

              <div class="col-md-12">
                <input type="email" class="form-control" name="email_address" placeholder="Your Email Address" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <!-- Google reCAPTCHA -->
              <!--
                  <div class="g-recaptcha" style="display: flex; justify-content: center;" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                
                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div> -->

      </div>

    </div>

  </section><!-- /Contact Section -->
 
@include('layouts.footer')