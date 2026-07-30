@include('layouts.header')

<style>
    @import url('{{ asset('assets/css/splus.css') }}');
</style>

@php
    $introPoints = [
        [
            'icon' => 'bi-shield-lock',
            'title' => 'Save',
        ],
        [
            'icon' => 'bi-stars',
            'title' => 'Convinient',
        ],
        [
            'icon' => 'bi-magic',
            'title' => 'Innovative',
        ],
        [
            'icon' => 'bi-diagram-3',
            'title' => 'Customizable',
        ],
    ];

    $issuePoints = [
        [
            'icon' => 'heroicon-o-device-phone-mobile',
            'title' => 'Mobile Access Pioneer',
        ],
        [
            'icon' => 'lucide-award',
            'title' => 'Patented Lock Innovation',
        ],
        [
            'icon' => 'heroicon-o-shield-check',
            'title' => 'Certified Security Standard',
        ],
        [
            'icon' => 'lucide-gantt-chart-square',
            'title' => 'Flexible App Ecosystem',
        ],
        [
            'icon' => 'lucide-globe',
            'title' => 'R&D International Expertise',
        ],
        [
            'icon' => 'lucide-palette',
            'title' => 'Tailored Digital Branding',
        ],
    ];

    $features = [
        ['icon' => 'gmdi-send-to-mobile-o', 'title' => 'Keyless Smartphone Entry'],
        ['icon' => 'bi-app-indicator', 'title' => 'SPLUS Mobile Access App'],
        ['icon' => 'lucide-code-2', 'title' => 'Mobile Access SDK'],
        ['icon' => 'lucide-users-2', 'title' => 'Third Party Certified Partner App'],
        ['icon' => 'fas-door-closed', 'title' => 'ANSI Standard Mortise'],
        ['icon' => 'lucide-battery-charging', 'title' => '18-Month Battery Life'],
        ['icon' => 'lucide-history', 'title' => '6,400 Event Audit Trail'],
        ['icon' => 'lucide-wrench', 'title' => 'Adaptive Installation Design'],
    ];

    $benefits = [
        [
            'icon' => 'tabler-shield-lock',
            'title' => 'Stronger access security',
        ],
        [
            'icon' => 'bi-cpu',
            'title' => 'Seamless App Integration',
        ],
        [
            'icon' => 'tabler-clock-share',
            'title' => 'Faster guest flow',
        ],
        [
            'icon' => 'tabler-award',
            'title' => 'Premium brand impression',
        ],
    ];

    $benefitsp = [
        [
            'icon' => 'heroicon-o-face-smile',
            'title' => 'Enhanced Guest Experience',
            'text' => "Provides a modern, secure, and convenient stay that automatically boosts 
                    customer loyalty and enhances your hotel's brand image."
        ],
        [
            'icon' => 'lucide-trending-up',
            'title' => 'Efficient Hotel Operations',
            'text' => 'Reduces front desk workload and saves everyone time through a 
                    fully automated digital access solution.'
        ],
        [
            'icon' => 'bi-shield-shaded',
            'title' => 'Durable & Low Maintenance',
            'text' => 'Premium materials and power-saving engineering deliver robust 
                    smart locks that significantly slash long-term maintenance costs.'
        ],
    ];
     
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
                        <li><a href="{{ route('services.splus') }}" class="active">SPLUS</a></li>
                        <li><a href="{{ route('services.selfq') }}">SELFQ</a></li>
                    </ul>
                </li>
                {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="logo-brand d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo/splus-white.webp') }}" alt="SPLUS LOGO">
        </a>
    </div>
</header>

<main class="brand-page brand-splus">
    <section class="brand-hero">
        <div class="container position-relative">
            <div class="row align-items-center" style="height: calc(215px + 80px)">
                <!--<h1 class="hero-kicker">SPLUS</h1>-->
            </div>
        </div>
    </section>

    <section class="brand-section" id="brand-intro">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Introduction</span>
                <h2>SPLUS helps hotels secure access with a more convenient guest journey.</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="intro-panel">
                        <!--<div class="brand-logo-wrap">-->
                        <!--    <img src="{{ asset('assets/img/logo/splus-black.webp') }}" alt="SPLUS logo">-->
                        <!--</div>-->

                        <div class="brand-tagline">HOSPITALITY SECURITY AND ACCESS<br> SOLUTIONS</div>

                        <div class="intro-list">
                            @foreach ($introPoints as $point)
                                <div class="intro-item">
                                    <i class="bi {{ $point['icon'] }}"></i>
                                    <div>
                                        <h3>{{ $point['title'] }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="copy-panel">
                        <!--<h3>ABOUT SPLUS</h3>-->
                        <p class="intro-text">
                            A smart hospitality access solution, combining strong security, proven durability, and
                            simple keycard access to ensure reliable room protection while delivering a smooth and
                            comfortable experience for guests.
                        </p>
                        <p class="pt-2">
                            Engineered by our International R&D team,
                            Unique key's electronic locks is the product combining both luxury and usability. 
                            The lock consists of ANSI standard lockcase and stainless steel escutcheon, providing security and durability.
                        </p>
                        <p class="pt-2">
                            Gathering our industry experience and R&D knowledge, we aim to provide a value based door lock for our clients.
                            We have utilized feedback and technological intelligence to design the ultimate hospitality solution.
                        </p>

                        {{--<div class="quote-band">
                            SPLUS combines the convenience of technology with a human touch.
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section" id="background">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Background</span>
                <h2>SPLUS exists because access control should never slow the guest journey</h2>
            </div>

            <div class="background row g-3 align-items-stretch">
                <div class="col-lg-5 p-0" data-aos="fade-right" data-aos-delay="100">
                    <div class="visual-panel">
                        <img src="{{ asset('assets/img/splus-bg.webp') }}" alt="SPLUS background visual">
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <div class="issue-panel">
                        <div class="issue-list future-grid">
                            @foreach ($issuePoints as $issue)
                                <div class="issue-item">
                                    <x-dynamic-component :component="$issue['icon']" class="icon" />
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
                <h2>HOTEL LOCK</h2>
            </div>

            <div class="product-section row g-4" style="padding-bottom: 80px; padding-top: 20px;">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="solution-panel">
                        <!--<span class="product-chip">-->
                        <!--    <img src="{{ asset('assets/img/logo/splus-white.webp') }}" alt="SPLUS" style="width: 82px; height: auto;">-->
                        <!--</span>-->

                        <div class="solution-copy">
                            <!--<h3 class="solution-title">SPLUS Locks</h3>-->
                            <p>
                                Engineered by our International R&D team, Unique key's electronic locks is the product
                                combining both luxury and usability. The lock consists of ANSI standard lockcase
                                and stainless steel escutcheon, providing bseocthurity and durability.
                            </p>
                        </div>
                        <div class="brand-product-image">
                            <img src="{{ asset('assets/img/slocks.webp') }}" alt="SPLUS access ecosystem">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="solution-panel pt-1">
                        <h3 class="solution-title-feature mb-4">Product features</h3>
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
        </div>
    </section>

    <section class="brand-section" id="benefits">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Benefits</span>
                <h2>SPLUS helps properties stay secure, efficient, and guest friendly.</h2>
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
                        <x-dynamic-component :component="$benefit['icon']" class="icon" />
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

