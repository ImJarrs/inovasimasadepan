@include('layouts.header')

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
          <img src="{{ asset('assets/img/header-logo.webp') }}" alt="IMD">
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home') }}">Home<br></a></li>
            <li><a href="{{ route('home') }}#about">About</a></li>
            <li><a href="{{ route('product.showcase.rfid') }}">Our Products</a></li>
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('services.recom') }}">RECOM</a></li>
                <li><a href="{{ route('services.splus') }}">SPLUS</a></li>
                <li><a href="{{ route('services.selfq') }}">SELFQ</a></li>
              </ul>
            </li>
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('home') }}#contact">Get Quote</a>
  </div>
</header>


<div style="position: relative; text-align: center;">
  @foreach ($blogBanner as $banner)
      <img src="{{ asset('storage/' . $banner)}}" class="banner" alt="" data-aos="fade-in" style="width: 100%; max-height: 250px;">
      <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-weight: bold;">
          BLOG
      </h1>
  @endforeach
</div>

  <!-- Blog Section -->
  <section id="blog" class="blog section">

      <div class="container">
        @foreach ($blogs as $item)
          <div class="card mb-3" >
            <div class="content">
              <div class="content-image">
                <img src="{{ asset('storage/' . $item->image1) }}" alt="RFID">
              </div>
                <!-- Konten -->
                <div class="content-text">
                  <h5 class="card-title text-clamp">{{ $item->title }}</h5>
                  <div class="card-text text-clamp">{!! $item->desc1 !!}</div>
                  <a href="{{route('blog.detail', $item->slug)}}" class="btn btn-read btn-outline-warning btn-sm"><i class="bi bi-book"></i> Read More</a>
                </div>
            </div>            
          </div>
        @endforeach
      </div>
  </section>
  
@include('layouts.footer')