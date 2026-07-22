@include('layouts.header')

<style>
    @import url('{{ asset('assets/css/selfq.css') }}');
</style>

@php
    $introPoints = [
        [
            'icon' => 'bi-magic',
            'title' => 'Innovation',
            'text' => 'Continuously driving forward with modern technology to redefine hospitality standards.',
        ],
        [
            'icon' => 'bi-link',
            'title' => 'Integrity',
            'text' => 'Maintaining transparency and trust in every partnership we build.',
        ],
        [
            'icon' => 'bi-bookmark-star',
            'title' => 'Teamwork',
            'text' => 'Working together to achieve shared goals and exceed expectations.',
        ],
    ];

    $issuePoints = [
        [
            'icon' => 'bi-people',
            'title' => 'Slow front desk queue',
        ],
        [
            'icon' => 'bi-clock-history',
            'title' => 'Slow check-in process.',
        ],
        [
            'icon' => 'bi-file-earmark-text',
            'title' => 'Human error issue',
            
        ],
        [
            'icon' => 'bi-star-half',
            'title' => 'Boring experience',
        ],
        [
            'icon' => 'bi-send-x',
            'title' => 'Booking & Payment System Trouble',
        ],
    ];

    $features = [
        ['icon' => 'gmdi-dashboard-customize-o', 'title' => 'Highly Customizable'],
        ['icon' => 'gmdi-document-scanner-o', 'title' => 'OCR Enabled'],
        ['icon' => 'mdi-smart-card-reader-outline', 'title' => 'Hotel Card Dispenser'],
        ['icon' => 'gmdi-photo-camera-front-o', 'title' => 'Front Camera'],
        ['icon' => 'gmdi-qr-code-scanner-o', 'title' => 'QR Booking Scanner'],
        ['icon' => 'gmdi-local-printshop-o', 'title' => 'Thermal Printer'],
        ['icon' => 'gmdi-settings-suggest-o', 'title' => 'PMS Integration'],
        ['icon' => 'fluentui-people-settings-20-o', 'title' => 'CRM Integration'],
    ];

    $benefits = [
        [
            'icon' => 'mdi-clock-fast',
            'title' => 'Faster and Seamless Check-In Process',
        ],
        [
            'icon' => 'gmdi-settings-suggest-o',
            'title' => 'Improve Guests Experience',
        ],
        [
            'icon' => 'hugeicons-save-money-dollar',
            'title' => 'Reduce Cost',
        ],
        [
            'icon' => 'mdi-map-marker-path',
            'title' => 'Intuitive Customer Journey',
        ],
        [
            'icon' => 'fluentui-timeline-24-o',
            'title' => 'Subcription Model',
        ],
        [
            'icon' => 'carbon-badge',
            'title' => 'Industrial-Grade Componenents',
        ],
    ];

    $benefitsp = [
        [
            'icon' => 'fluentui-chevron-double-up-20',
            'title' => 'Optimize Staffing > Optimum Service Efficiency',
            'text' => 'Self-Check-In Kiosks manage guest arrivals and departures seamlessly.'
        ],
        [
            'icon' => 'fluentui-people-checkmark-24-o',
            'title' => 'Accurate Guest Profiles for Tailored Service',
            'text' => 'Self-Check-In Kiosks capture essential guest Data Accurately.'
        ],
        [
            'icon' => 'gmdi-auto-graph-o',
            'title' => 'Increased Promotional Exposure',
            'text' => 'Promote hotel offers and upsell right at the Kiosk.'
        ],
    ];

    $specs = [
        [
            'title' => 'Enclosure',
            'desc' => 'Stylish cold rolled steel
Rugged modular construction
Powder coated surface
Service plate
Hotel name sticker friendly
Facade',
        ],
        [
            'title' => 'IP Rating',
            'desc' => 'IP65 Water & Dust Proof',
        ],
        [
            'title' => 'LED Display',
            'desc' => '22" Multi Touchscreen Monitor',
        ],
        [
            'title' => 'Processor',
            'desc' => 'Intel Celeron CPU J1900',
        ],
        [
            'title' => 'Memory',
            'desc' => '4096MB RAM',
        ],
        [
            'title' => 'Operating System',
            'desc' => 'Windows 10 Enterprise 2016 64-bit',
        ],
        [
            'title' => 'Printer',
            'desc' => 'SPRT SP-RME3-58mm Rugged Kiosk Thermal Printer',
        ],
        [
            'title' => 'Power Consumption',
            'desc' => '185 Watt',
        ],
        [
            'title' => 'Barcode',
            'desc' => 'R100-QU Imaging Sensor 640*480 CMOS',
        ],
        [
            'title' => 'Camera',
            'desc' => 'Logitech C270 HD Webcam',
        ],
        [
            'title' => 'Network',
            'desc' => 'LAN',
        ],
        [
            'title' => 'Scan Passport Reader',
            'desc' => 'Sinosecu Version 6.8.1.5
ICAO compliant capture
Image in white & IR
High accuracy OCR',
        ],
        [
            'title' => 'Card Dispenser',
            'desc' => 'RFID card dispenser
ISO 7810 / CR-80 / CR-70, ID-1
Card thickness 0.2mm - 1.2mm
(default 0.8mm)
170 max card capacity (0.75mm)
Reject bin capacity: 25pcs
Read/write operation remaining check: 0-50 pcs
Low card level warning
Dispensing speed: ~1.0 sec
(non stop for card reading)',
        ],
    ];

    $specChunks = array_chunk($specs, (int) ceil(count($specs) / 2));
@endphp


<header id="header" class="header-blog d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/header-logo.webp') }}" alt="IMD">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}">Home<br></a></li>
                <li><a href="{{ route('home') }}#about">About</a></li>
                <li><a href="{{ route('product.showcase.rfid') }}">Our Products</a></li>
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('services.recom') }}">RECOM</a></li>
                        <li><a href="{{ route('services.splus') }}">SPLUS</a></li>
                        <li><a href="{{ route('services.selfq') }}" class="active">SELFQ</a></li>
                    </ul>
                </li>
                {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="logo-brand d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo/selfqwhite.png') }}" alt="SELFQ LOGO">
        </a>
    </div>
</header>

<main class="brand-page brand-selfq">
    <section class="brand-hero">
        <div class="container position-relative">
            <div class="row align-items-center" style="height: calc(215px + 80px)">
                <!--<h1 class="hero-kicker">SELFQ</h1>-->
            </div>
        </div>
    </section>

    <section class="brand-section" id="brand-intro">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Introduction</span>
                <h2>SELFQ helps properties introduce a more modern arrival experience.</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="intro-panel">
                        <!--<div class="brand-logo-wrap">-->
                        <!--    <img src="{{ asset('assets/img/logo/selfqblue.png') }}" alt="SELFQ logo">-->
                        <!--</div>-->

                        <div class="brand-tagline">ENHANCING HOSPITALITY<br> THROUGH SELF-CHECK-IN KIOSK</div>

                        <div class="intro-list">
                            @foreach ($introPoints as $point)
                                <div class="intro-item">
                                    <i class="bi {{ $point['icon'] }}"></i>
                                    <div>
                                        <h3>{{ $point['title'] }}</h3>
                                        <p>{{ $point['text'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="copy-panel">
                        <!--<h3>ABOUT SELFQ</h3>-->
                        <p class="intro-text">
                            An intelligent self-service hotel kiosk designed to accelerate check-in 
                            and check-out processes, combining smart recognition technology, 
                            system integration, and intuitive interaction to elevate 
                            guest experience while helping hotels operate more efficiently.

                        </p>
                        <p class="pt-2">
                            At the core of our mission lies our commitment to delivering exceptional guest 
                            experiences through innovation, integrity, and teamwork. 
                            We strive to create technology that not only simplifies hotel operations 
                            but also elevates hospitality standards, 
                            ensuring satisfaction for both guests and staff.
                        </p>

                        <div class="quote-band">
                            SELF-Q combines the Convenience of Technology with a Human Touch.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section" id="background">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Background</span>
                <h2>SELFQ exists because the front desk should not be the bottleneck</h2>
            </div>

            <div class="background row g-4 align-items-stretch">
                <div class="col-lg-5 p-0" data-aos="fade-right" data-aos-delay="100">
                    <div class="visual-panel">
                        <img src="{{ asset('assets/img/bg-selfq.png') }}" alt="SELFQ background visual">
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <div class="issue-panel">
                        <div class="issue-list future-grid">
                            @foreach ($issuePoints as $issue)
                                <div class="issue-item">
                                    <i class="bi {{ $issue['icon'] }}"></i>
                                    <div>
                                        <h3>{{ $issue['title'] }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section" id="solution">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Our Product</span>
                <h2>HOTEL KIOSK</h2>
            </div>

            <div class="product-section row g-4" style="padding-bottom: 80px; padding-top: 20px;">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="solution-panel">
                        <!--<span class="product-chip">-->
                        <!--    <img src="{{ asset('assets/img/logo/selfqwhite.png') }}" alt="SELFQ" style="width: 82px; height: auto;">-->
                        <!--</span>-->

                        <div class="solution-copy">
                            <h3 class="solution-title">Self Check In-Out Hotel Kiosk</h3>
                            <p>
                                An accounting process that seeks to track fixed assets 
                                for the purposes of financial accounting, preventive maintenance, 
                                and theft deterrence.
                            </p>
                            {{-- <p>With the Self-Check-In Kiosk, they can enjoy 
                                a Personalized Greeting from hotel greeters while 
                                receiving their Room Keys Instantly.
                            </p> --}}
                        </div>
                        <div class="brand-product-image">
                            <img src="{{ asset('assets/img/selffkiosk.png') }}" alt="RECOM">
                        </div>
                    </div>

                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="solution-panel">
                        <h3 class="solution-title-feature">Product features</h3>
                        <div class="feature-grid">
                            @foreach ($features as $feature)
                                <div class="feature-card">
                                    <div class="features-content">
                                        <x-dynamic-component :component="$feature['icon']" class="feature-icon" />
                                        <h3>{{ $feature['title'] }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="spec-wrap" data-aos="fade-up" data-aos-delay="80">
                <div class="spec-card-shell">
                    <div class="spec-head">
                        <span class="spec-mark"></span>
                        <div>
                            {{-- <span class="spec-eyebrow">Product detail</span> --}}
                            <h3>DETAIL SPECIFICATIONS</h3>
                        </div>
                    </div>

                    <div class="spec-grid">
                        @foreach ($specChunks as $chunk)
                            <div class="spec-column">
                                @foreach ($chunk as $spec)
                                    <div class="spec-item">
                                        <div class="spec-label">{{ $spec['title'] }}</div>
                                        <div class="spec-value">{!! nl2br(e($spec['desc'])) !!}</div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section" id="benefits">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Benefits</span>
                <h2>SELFQ helps properties feel quicker, smarter, and more guest friendly.</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                    <div class="benefit-panel feature-grid">
                        @foreach ($benefits as $benefit)
                            <div class="benefit-item">
                                <x-dynamic-component :component="$benefit['icon']" class="benefit-icon" />
                                <h3>{{ $benefit['title'] }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5 pr-0 mr-0" data-aos="fade-left" data-aos-delay="140">
                    <div class="benefit-visual">
                        {{-- <div class="badge">
                            <strong>Guest-first view</strong>
                            <div class="small">Faster arrivals with a cleaner digital impression.</div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="benefit-grid">
                @foreach ($benefitsp as $benefit)
                    <div class="benefit-spot">
                        <x-dynamic-component :component="$benefit['icon']" class="feature-icon" />
                        <h3>{{ $benefit['title'] }}</h3>
                        <p>{{ $benefit['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@include('layouts.quote')
@include('layouts.footer')
