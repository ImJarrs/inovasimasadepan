@include('layouts.header')

<style>
    /*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header-blog {
  --heading-color: #ffffff;
  --contrast-color: #ffffff;
  color: var(--default-color);
  background-color: rgba(0, 0, 0, 0.8);
  padding: 10px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header-blog .logo {
  line-height: 1;
}

.header-blog .logo img {
  max-height: 50px;
  margin-right: 5px;
}

.header-blog .logo h1 {
  font-size: 32px;
  margin: 0;
  font-weight: 700;
  color: var(--heading-color);
}

.header-blog .logo span {
  color: var(--accent-color);
  font-size: 32px;
}

.header-blog .btn-getstarted,
.header-blog .btn-getstarted:focus {
  color: var(--contrast-color);
  font-size: 14px;
  padding: 8px 30px;
  margin: 0 0 0 30px;
  border-radius: 4px;
  transition: 0.3s;
  border: 2px solid var(--accent-color);
}

.header-blog .btn-getstarted:hover,
.header-blog .btn-getstarted:focus:hover {
  color: var(--default-color);
  background: var(--accent-color);
}

@media (max-width: 1200px) {
  .header-blog .logo {
    order: 1;
  }

  .header-blog .btn-getstarted {
    order: 2;
    margin: 0 15px 0 0;
    padding: 6px 15px;
  }

  .header-blog .navmenu {
    order: 3;
  }
}

.scrolled .header-blog {
  box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
}

/* Index Page Header
------------------------------*/
.index-page .header-blog {
  --background-color: rgba(0, 0, 0, 0);
}

/* Index Page Header on Scroll
------------------------------*/
.index-page.scrolled .header-blog {
  --background-color: rgba(0, 0, 0, 0.8);
}
</style>
<header id="header" class="header-blog d-flex align-items-center fixed-top">
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
          <li class="dropdown"><a href="#products"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
          <li><a href="{{ route('blog')}}">Blog</a></li>
          <li><a href="{{ route('home') }}#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

      <a class="btn-getstarted" href="{{ route('home') }}#contact">Get Quote</a>
        
    </div>
</header>

<div style="position: relative; padding: 100px 0px 30px; text-align: center;">
    <h1 style="color: black; font-weight: bold; text-align: center; ">
        OUR SERVICES
    </h1>
</div>

<section id="services" class="services section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="image col-lg-5 order-2 order-lg-2">
          <img src="{{asset('assets/img/recom-fams.webp')}}" class="img-fluid" alt="" width="350px">
      </div>
      <div class="col-lg-7 order-1 order-lg-1 content">
        <img src="{{asset('assets/img/logo-recom.webp')}}" class="img-fluid mb-4" alt="" width="140px">
        <h3>FIXED ASSET MANAGEMENT SYSTEM</h3>
        <p>
          A system built to manage all information about what assets we have. With our System, you can get
          any information from an asset such as how many assets you have, who uses the asset, how the
          asset is, etc. the owner can obtain information that can be used for reference before making a
          decision to add or remove assets.
        </p>
      </div>
      <div class="col-lg-12 order-3 card-list">
        <div class="row">

          <div class="col">
            <div class="card">
              <i class="bi bi-cloud-check"></i>
              <div class="card-body">
                <p class="card-text">Cloud Based System</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-sort-up-alt"></i>
              <div class="card-body">
                <p class="card-text">Up to Group Level</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
             <i class="bi bi-sort-down-alt"></i>
              <div class="card-body">
                <p class="card-text">Down to Sub Level Detail</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-person-circle"></i>
              <div class="card-body">
                <p class="card-text">User Access Control</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-database-fill-gear"></i>
              <div class="card-body">
                <p class="card-text">Set Level Item</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-upc-scan"></i>
              <div class="card-body">
                <p class="card-text">Barcode & RFID Tagging</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-shield-check"></i>
              <div class="card-body">
                <p class="card-text">Issurance & Renewal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-graph-down-arrow"></i>
              <div class="card-body">
                <p class="card-text">Fiscal & Commercial Depreciation</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-files"></i>
              <div class="card-body">
                <p class="card-text">Multi Files Attachment</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i class="bi bi-arrow-down-up"></i>
              <div class="card-body">
                <p class="card-text">Export & Import Flexibility</p>
              </div>
            </div>
          </div>

        </div>
        
      </div>
    </div>

  </div>
</section>


@include('layouts.quote')
@include('layouts.footer')