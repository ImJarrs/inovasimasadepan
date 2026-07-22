@include('layouts.header')
<style>
  
  .card {
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    /* margin: 20px 0; */
  }

  .card img {
    width: 100%%;
    height: 100%;
    border-radius: 5px 0 0 5px;
    margin: 10px;
  }
  .btn-read {
    font-weight: 500;
    font-size: 11px; 
    margin-top: 1%;
  }

  .row.g-0 {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .text-clamp {
      display: -webkit-box; /* Membuat container fleksibel */
      -webkit-line-clamp: 2; /* Batasi ke 2 baris */
      -webkit-box-orient: vertical; /* Orientasi vertikal */
      overflow: hidden; /* Sembunyikan teks yang kelebihan */
      text-overflow: ellipsis; /* Tambahkan "..." di akhir */
    }

  @media (max-width: 820px) {

    .card {
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 0;
    }

    .card .card-body .card-title{
      padding: 0;
      font-size: 15px
    }
    .card .card-body{
      font-size: 13px
    }
    
    .text-clamp {
      display: -webkit-box; /* Membuat container fleksibel */
      -webkit-line-clamp: 1; /* Batasi ke 1 baris */
      -webkit-box-orient: vertical; /* Orientasi vertikal */
      overflow: hidden; /* Sembunyikan teks yang kelebihan */
      text-overflow: ellipsis; /* Tambahkan "..." di akhir */
    }

    .btn-read {
      font-size: 8px;
    }

    h5{
      padding-top: 5px
    }

    .row.g-0 {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .card img {
      overflow: hidden; /* Memastikan gambar tidak keluar dari kotak */
      display: flex;
      display: inline;
      object-fit: cover;
      justify-content: center;
      align-items: center;
    }

    .col-md-4,
    .col-md-7 {
      width: 100%;
      height: 100%;
    }
  }

</style>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
  
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('assets/img/header-logo.webp')}}" alt="">
          {{-- <h1 class="sitename">GP</h1>
          <span>.</span> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}">Home<br></a></li>
          <li><a href="{{ route('home') }}#about">About</a></li>
          <li class="dropdown"><a href="{{route('product.card')}}"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
              <li><a href="{{route('product.card')}}">RFID Smart Card</a></li>
              <li><a href="{{route('product.wristband')}}">RFID Wristband</a></li>
              </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{route('services.fams')}}">Fixed Asset Management System</a></li>
                <li><a href="{{route('services.slft')}}">Smart Linen RFID Tracking</a></li>
                <li><a href="{{route('services.apt')}}">Approval Process Tracking</a></li>
              </ul>
          </li>
          <li><a href="{{ route('blog')}}" class="active">Blog</a></li>
          {{-- <li><a href="{{ route('home') }}#portfolio">Gallery</a></li> --}}
          <li><a href="{{ route('home') }}#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

      <a class="btn-getstarted" href="index.html#about">Get Quote</a>
        
    </div>
</header>


<div style="position: relative; text-align: center;">
  @foreach ($blogBanner as $banner)
      <img src="{{ asset('storage/' . $banner)}}" class="banner" alt="" data-aos="fade-in" style="width: 100%;">
      <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-weight: bold;">
          BLOG
      </h1>
  @endforeach
</div>

  <!-- Blog Section -->
  <section id="blog" class="blog section">

      <div class="container">
        @foreach ($blogs as $item)
          <div class="card mb-3">
            <div class="row g-0 pr-0" >
              <div class="col-5 col-md-3">
                <!-- Gambar -->
                <img src="{{ asset('storage/' . $item->image1) }}" style="object-fit: cover;" class="img-fluid flex-shrink-0" alt="RFID">
              </div>
              <div class="col-7 col-md-9">
                <!-- Konten -->
                <div class="card-body">
                  <h5 class="card-title text-clamp"><b>{{ $item->title }}</b></h5>
                  <div class="card-text text-clamp">{!! $item->desc1 !!}</div>
                  <a href="{{route('blog.detail', $item->slug)}}" class="btn btn-outline-warning btn-sm btn-read"><i class="bi bi-book"></i> Read More</a>
                </div>
              </div>
            </div>            
          </div>
        @endforeach
      </div>
  </section>
  
@include('layouts.footer')