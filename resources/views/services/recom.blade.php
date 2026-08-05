@include('layouts.header')

<style>
    @import url('{{ asset('assets/css/recom.css') }}');
</style>


@php
    $introPoints = [
        [
            'icon' => 'bi-clipboard2-pulse',
            'title' => 'Accountable',
            'text' => 'Helps to find out the initial price, depreciation, residual value of an item',
        ],
        [
            'icon' => 'bi-upc-scan',
            'title' => 'Trackable',
            'text' => 'Always keep track of your assets by using barcode, QR and RFID',
        ],
        [
            'icon' => 'bi-cloud-haze2-fill',
            'title' => 'Managable',
            'text' => 'Maintain your assets quikly and easily',
        ],
    ];

    $issuePoints = [
        [
            'icon' => 'bi-exclamation-triangle',
            'title' => 'High Cost of Lost for Towel & Linen',
        ],
        [
            'icon' => 'bi-clock-history',
            'title' => 'Difficult & Time Consuming to Count & Check',
        ],
        [
            'icon' => 'bi-arrow-repeat',
            'title' => 'Unreliable Measurement of Durability',
        ],
        [
            'icon' => 'bi-graph-up-arrow',
            'title' => 'Unreliable Evaluation of Supplier.',
        ],
        [
            'icon' => 'bi-graph-down-arrow',
            'title' => 'Employee to cover of Loss & Breakage',
        ],
    ];

    $famsfeatures = [
        ['icon' => 'tabler-cloud-computing', 'title' => 'Cloud Based System'],
        ['icon' => 'tabler-layout-grid', 'title' => 'Structured Asset Level from Groups to Details'],
        // ['icon' => 'tabler-layout-grid', 'title' => 'Down to Sub Level Detail'],
        ['icon' => 'tabler-user-cog', 'title' => 'User access Control'],
        ['icon' => 'tabler-adjustments', 'title' => 'Set Level Item'],
        ['icon' => 'tabler-barcode', 'title' => 'Barcode & RFID Tagging'],
        ['icon' => 'tabler-shield-check', 'title' => 'Insurance & Renewal'],
        ['icon' => 'tabler-chart-line', 'title' => 'Fiscal & Commercial Deprecation'],
        ['icon' => 'tabler-paperclip', 'title' => 'Multi Files Attachment'],
        ['icon' => 'heroicon-m-arrows-up-down', 'title' => 'Export & Import Flexibility'],
    ];

    $slrtfeatures = [
        ['icon' => 'fluentui-cloud-flow-24-o', 'title' => 'Cloud Based System with Offline Capability'],
        ['icon' => 'tabler-wash', 'title' => 'Washable RFID Tag'],
        ['icon' => 'tabler-scan', 'title' => 'Automation for Counting'],
        ['icon' => 'tabler-clock', 'title' => 'Real Time Physical Tracking'],
        ['icon' => 'tabler-shield-lock', 'title' => 'Theft Prevention'],
        ['icon' => 'tabler-info-circle', 'title' => 'Detail Information per Unit'],
        ['icon' => 'tabler-chart-line', 'title' => 'Value with Loss & Breakage Information'],
    ];

    $benefits = [
        [
            'image' => 'reduce-cost.webp',
            'alt' => 'Reduce cost icon',
            'recolor' => true,
            'title' => 'Minimize Cost of Losses',
        ],
        [
            'image' => 'rapid.webp',
            'alt' => 'Rapid counting icon',
            'recolor' => true,
            'title' => 'Time Efficiency by Faster & Reliable Counting',
        ],
        [
            'image' => 'disaster-recovery.webp',
            'alt' => 'Material handling icon',
            'recolor' => 'true',
            'title' => 'Washing Cycle Data Per Unit',
        ],
        [
            'image' => 'evaluation.webp',
            'alt' => 'Evaluation icon',
            'title' => 'Objective Evaluation for Supplier',
        ],
        [
            'image' => 'financial.webp',
            'alt' => 'Financial icon',
            'title' => 'Higher Service Charge',
        ],
        [
            'image' => 'material-handling.webp',
            'alt' => 'Decision making icon',
            'title' => 'Real Time Tracking',
        ],
        [
            'image' => 'decision-making.webp',
            'alt' => 'Disaster recovery icon',
            'title' => 'Better Decision Making Process',
        ]
    ];
@endphp

<header id="header" class="header-contrast d-flex align-items-center fixed-top">
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
                        <li><a href="{{ route('services.recom') }}" class="active">RECOM</a></li>
                        <li><a href="{{ route('services.splus') }}">SPLUS</a></li>
                        <li><a href="{{ route('services.selfq') }}">SELFQ</a></li>
                    </ul>
                </li>
                {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="logo-brand d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo-recom.webp') }}" alt="RECOM LOGO">
        </a>
    </div>
</header>

<main class="brand-page recom-page">
    <section class="brand-hero">
        <div class="container position-relative">
            <div class="row align-items-center" style="height: calc(215px + 80px)">
                <!--<h1 class="hero-kicker">RECOM</h1>-->
            </div>
        </div>
    </section>

    <section class="brand-section" id="brand-intro">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <span class="eyebrow">Introduction</span>
                <h2>RECOM brings a cleaner way to manage fixed assets.</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="intro-panel">
                        <!--<div class="brand-logo-wrap">-->
                        <!--    <img src="{{ asset('assets/img/logo-recom.webp') }}" alt="RECOM logo">-->
                        <!--</div>-->

                        <div class="brand-tagline">Accountable, Trackable, Managable</div>

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
                        <!--<h3>ABOUT RECOM</h3>-->
                        <p class="intro-text">
                            A system built to manage all information about what assets we have. 
                            With our System, you can get any information from an asset such as 
                            how many assets you have, who uses the asset, how the asset is, etc. 
                            The owner can obtain information that can be used for
                            reference before making a decision to add or remove assets.
                        </p>

                        <div class="quote-band">
                            Built for clarity, speed, and trustworthy asset governance.
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
                <h2>The reason RECOM exists is simple: asset control should not feel fragmented.</h2>
            </div>

            <div class="background row g-4 align-items-stretch">
                <div class="col-lg-5 p-0" data-aos="fade-right" data-aos-delay="100">
                    <div class="visual-panel">
                        <img src="{{ asset('assets/img/bg-recomlinen.webp') }}" alt="RECOM background visual">
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
                <h2>RECOM ASSET TRACKING</h2>
            </div>

            {{-- Product 1: Fixed Asset Management System --}}
            <div class="product-section row g-4" style="padding-bottom: 80px; padding-top: 20px;">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="solution-panel">
                        <!--<span class="product-chip">-->
                        <!--    <img src="{{ asset('assets/img/logo-recom.webp') }}" alt="RECOM" style="width: 82px; height: auto;">-->
                        <!--</span>-->

                        <div class="solution-copy">
                            <h3 class="solution-title">Fixed Asset Management System</h3>
                            <p>
                                An accounting process that seeks to track fixed assets 
                                for the purposes of financial accounting, preventive maintenance, 
                                and theft deterrence.
                            </p>
                        </div>
                        <div class="brand-product-image">
                            <img src="{{ asset('assets/img/fams.webp') }}" alt="RECOM">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="solution-panel">
                        <h3 class="solution-title-feature">Product features</h3>
                        <div class="feature-grid">
                            @foreach ($famsfeatures as $feature)
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

            {{-- Product 2: Smart Linen RFID Tracking --}}
            <div class="product-section row g-4" style="padding-bottom: 80px; padding-top: 20px;">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="solution-panel">
                        <!--<span class="product-chip">-->
                        <!--    <img src="{{ asset('assets/img/logo-recom.webp') }}" alt="RECOM" style="width: 82px; height: auto;">-->
                        <!--</span>-->

                        <div class="solution-copy">
                            <h3 class="solution-title">Smart Linen RFID Tracking</h3>
                            <p>
                                A smart asset monitoring solution combining cloud technology and RFID tracking to deliver
                                real-time visibility, automated asset counting, and detailed insights that help organizations
                                maintain control, reduce losses, and improve operational efficiency.
                            </p>
                        </div>
                        <div class="brand-product-image">
                            <img src="{{ asset('assets/img/slrt.webp') }}" alt="RECOM">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="solution-panel">
                        <h3 class="solution-title-feature">Product features</h3>
                        <div class="feature-grid">
                            @foreach ($slrtfeatures as $feature)
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
                <h2>RECOM helps organizations manage assets with confidence.</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                    <div class="benefit-panel feature-grid">
                        @foreach ($benefits as $benefit)
                            <div class="benefit-item">
                                <div class="benefit-icon {{ !empty($benefit['recolor']) ? 'is-recolored' : '' }}">
                                    <img src="{{ asset('assets/img/icons/' . $benefit['image']) }}" alt="{{ $benefit['alt'] }}">
                                </div>
                                <h3>{{ $benefit['title'] }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="visual col-lg-5" data-aos="fade-left" data-aos-delay="140">
                    <div class="benefit-visual">
                        <img src="{{ asset('assets/img/recom-fams.webp') }}" alt="">
                        {{-- <div class="badge">
                            <strong>Result-oriented view</strong>
                            <div class="small">Simple UI, stronger control, clearer decisions.</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.quote')
@include('layouts.footer')

