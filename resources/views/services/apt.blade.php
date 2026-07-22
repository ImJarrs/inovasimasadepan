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

      {{-- <div class="image col-lg-5 order-2 order-lg-2">
          <img src="{{asset('assets/img/ppp.jpeg')}}" class="img-fluid" alt="">
      </div> --}}
      <div class="col-lg-10 order-1 order-lg-1 content">
        <img src="{{asset('assets/img/logo-recom.webp')}}" class="img-fluid mb-4" alt="" width="140px">
        <h3>APPROVAL PROCCESS TRACKING</h3>
        <p>
          RECOM APT is a Cloud Based Approval Process Tracking System that works as a system to
          manage, monitor, and streamline the approval processes within an organization. It helps
          ensure that tasks, documents, or projects requiring approval from multiple stakeholders or
          levels of authority are tracked efficiently from initiation to finalization.
        </p>
      </div>
      <div class="col-lg-12 order-3 card-list">
        <h5>RECOM APT SCENARIOS</h5>
        <div class="row">
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-heroicon-o-user-group style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Human Resources</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Manage HR activities, including onboarding, leave requests, and recruitment.</p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-fluentui-wallet-credit-card-20-o style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Finance</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Handle reimbursements, travel claims, budget adjustments, and vendor payments.</p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-fluentui-phone-laptop-20-o style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Information Technology</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Manage service tickets, equipment requests, surveys, and software repairs.</p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-heroicon-o-clipboard-document style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Procurement </h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Track purchase requests, purchase orders, and product arrival notes in compliance with regulations.</p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-tabler-rosette-discount style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">CRM/After-Sales</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Manage new customer registrations, quotations, sales orders, and sales contract approvals.</p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-heroicon-o-clipboard-document-list style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Production</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Handle production orders, material requisitions, incident reports, and finished goods inventory.</p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-phosphor-suitcase style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Project</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Oversee project finances, tasks, policy documents, issue resolutions, and feedback.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 250px;">
              <i><x-phosphor-suitcase style="width: 50px; height: 50px;"/></i>
              <div class="card-body">
                <h5 class="card-title">Administrative</h5>
                <p class="card-text" style="text-align: center; font-size: 12px;">Manage internal requests for meeting rooms, vehicles, equipment, and other assets.</p>
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