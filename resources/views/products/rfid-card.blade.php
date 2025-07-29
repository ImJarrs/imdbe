@include('layouts.header')

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('assets/img/header-logo.webp')}}" alt="">
          {{-- <h1 class="sitename">IMD</h1>
          <span>.</span> --}}
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{route('home')}}">Home<br></a></li>
            <li><a href="{{ route('home') }}#about">About</a></li>
            <li class="dropdown"><a href="{{route('product.card')}}"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                <li><a href="{{route('product.card')}}" class="active">RFID Smart Card</a></li>
                <li><a href="{{route('product.wristband')}}">RFID Wristband</a></li>
                </ul>
            </li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{ route('blog')}}">Blog</a></li>
            {{-- <li><a href="{{ route('home') }}#portfolio">Gallery</a></li> --}}
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Get Quote</a>
  </div>
</header>


<div style="position: relative; text-align: center;">
  @foreach ($cardBanner as $banner)
      <img src="{{ asset('storage/' . $banner)}}" class="banner" alt="" data-aos="fade-in" style="width: 100%;">
      <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-weight: bold;">
          RFID SMART CARD
      </h1>
  @endforeach
</div>

<section class="products">
@foreach ($cards as $item)
<div class="card mb-3 position-relative" style="border: none; margin: 0;" data-aos="fade-up" data-aos-delay="200">
  
    <div class="product-item row g-0">
      
        {{-- <div class="product-image col-md-4 d-flex justify-content-center">
          @if($item->card_image)
            <img src="{{ asset('storage/' . $item->card_image) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: cover;">
          @else
              Image not found
          @endif
        </div> --}}

        <div class="product-image col-md-4 d-flex justify-content-center">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @if(!empty($item->image1))
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $item->image1) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: cover;">
                        </div>
                    @endif
                    @if(!empty($item->image2))
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $item->image2) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: cover;">
                        </div>
                    @endif
                    @if(!empty($item->image3))
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $item->image3) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: cover;">
                        </div>
                    @endif
                    @if(!empty($item->image4))
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $item->image4) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: cover;">
                        </div>
                    @endif
                    @if(!empty($item->image5))
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $item->image5) }}" alt="{{ $item->name }}" class="img-fluid" style="object-fit: cover;">
                        </div>
                    @endif
                </div>
                <!-- Tambahkan navigasi dan pagination -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title pb-1" style="font-weight: bold; text-align: left;">{{ $item->name }}</h2>
                <div class="info-list">

                      @if (!empty($item->label1))
                          <div class="info-item">
                              <div class="info-key">{{$item->label1}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc1 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label2))
                          <div class="info-item">
                              <div class="info-key">{{$item->label2}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc2 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label3))
                          <div class="info-item">
                              <div class="info-key">{{$item->label3}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc3 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label4))
                          <div class="info-item">
                              <div class="info-key">{{$item->label4}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc4 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label5))
                          <div class="info-item">
                              <div class="info-key">{{$item->label5}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc5 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label6))
                          <div class="info-item">
                              <div class="info-key">{{$item->label6}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc6 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label7))
                          <div class="info-item">
                              <div class="info-key">{{$item->label7}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc7 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label8))
                          <div class="info-item">
                              <div class="info-key">{{$item->label8}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc8 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label9))
                          <div class="info-item">
                              <div class="info-key">{{$item->label9}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc9 }}</div>
                          </div>
                      @endif
    
                      @if (!empty($item->label10))
                          <div class="info-item">
                              <div class="info-key">{{$item->label10}}</div>
                              <div class="info-separator">:</div>
                              <div class="info-value">{{ $item->desc10 }}</div>
                          </div>
                      @endif

                </div>
            </div>
        </div>
      
    </div>
</div>
@endforeach
</section>

@include('layouts.footer')