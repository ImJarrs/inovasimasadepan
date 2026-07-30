@include('layouts.header')

@php
    $resolveImage = function (?string $path, string $fallback) {
        if (! $path) {
            return asset($fallback);
        }

        return str_starts_with($path, 'assets/') ? asset($path) : asset('storage/' . $path);
    };

    $parseLabelValue = function (?string $line): array {
        $line = trim((string) $line);

        if ($line === '') {
            return ['label' => '', 'value' => ''];
        }

        if (str_contains($line, '|')) {
            [$label, $value] = array_pad(array_map('trim', explode('|', $line, 2)), 2, '');

            return ['label' => $label, 'value' => $value];
        }

        if (str_contains($line, ':')) {
            [$label, $value] = array_pad(array_map('trim', explode(':', $line, 2)), 2, '');

            return ['label' => $label, 'value' => $value];
        }

        return ['label' => '', 'value' => $line];
    };

    $parseTableRow = function (?string $line): array {
        $line = trim((string) $line);

        if ($line === '') {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode('|', $line)), fn ($cell) => $cell !== ''));
    };

    $staticSlides = [
        ['src' => 'assets/img/card/card (1).webp'],
        ['src' => 'assets/img/card/card (2).webp'],
        ['src' => 'assets/img/card/card (3).webp'],
        ['src' => 'assets/img/card/card (4).webp'],
        ['src' => 'assets/img/card/card (5).webp']
    ];

    $staticAdvantages = [
        ['icon' => 'bi-cpu', 'label' => 'Material and chip options for different hotel workflows'],
        ['icon' => 'bi-shield-check', 'label' => 'Reliable structure with a premium presentation style'],
        ['icon' => 'bi-stars', 'label' => 'Flexible content blocks for admin-managed pages'],
        ['icon' => 'bi-truck', 'label' => 'Easy showcase editing for multiple series'],
        ['icon' => 'bi-brush', 'label' => 'Fits modern layouts without losing clarity'],
    ];
@endphp

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
          <img src="{{ asset('assets/img/header-logo.webp') }}" alt="IMD">
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home') }}">Home<br></a></li>
            <li><a href="{{ route('home') }}#about">About</a></li>
            <li><a href="{{ route('product.showcase.rfid') }}" class="active">Our Products</a></li>
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('services.recom') }}">RECOM</a></li>
                <li><a href="{{ route('services.splus') }}">SPLUS</a></li>
                <li><a href="{{ route('services.selfq') }}">SELFQ</a></li>
              </ul>
            </li>
            {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('home') }}#contact">Get Quote</a>
  </div>
</header>

<section class="rfid-showcase">
  <div class="rfid-showcase-hero">
    <img src="{{ asset('assets/img/rfid-bg1.webp') }}" alt="RFID" class="rfid-showcase-hero__image" fetchpriority="high" decoding="async">
    <div class="container rfid-showcase-hero__content">
      <link rel="preload" as="image" href="{{ asset('assets/img/hero-bg.webp') }}" fetchpriority="high">
      <h1>RFID</h1>
      {{-- <span>Material series, feature breakdown, and product-ready content for admin managed pages.</span> --}}
    </div>
  </div>

  <div class="container">
    <section class="rfid-static-section" data-aos="fade-up">
      
      <!-- Pengantar / Teks Utama yang Dipercantik -->
      <div class="rfid-static-intro">
        <span class="rfid-static-tag">Overview</span>
        <p class="rfid-static-lead">
          Our RFID solutions are designed to fit seamlessly into modern operations,
          combining dependable performance with flexible material choices and
          refined design. Built to support efficiency, security, and a consistent user
          experience across industries.
        </p>
      </div>

      <!-- Grid Keunggulan dalam Bentuk Micro-Cards -->
      <div class="rfid-advantage-grid">
        @foreach ($staticAdvantages as $advantage)
          <div class="rfid-advantage-card">
            <div class="rfid-advantage-icon-box">
              <i class="bi {{ $advantage['icon'] }}"></i>
            </div>
            <p>{{ $advantage['label'] }}</p>
          </div>
        @endforeach
      </div>

      <!-- Header Kecil untuk Slider -->
      <div class="rfid-slider-title text-center">
        <h3>Explore Our RFID Series</h3>
        <div class="accent-line"></div>
      </div>

      <!-- Slider dengan Caption Label yang Muncul Elegan -->
      <div class="rfid-static-slider">
        <div class="swiper rfid-static-swiper">
          <div class="swiper-wrapper">
            @foreach ($staticSlides as $slide)
              <div class="swiper-slide">
                <div class="rfid-static-slide-card">
                  <div class="slide-img-container">
                    <img src="{{ asset($slide['src']) }}">
                  </div>
                  <!-- Menampilkan label yang tadinya tersembunyi -->
                  {{-- <div class="slide-card-caption">
                    <span>{{ $slide['label'] }}</span>
                  </div> --}}
                </div>
              </div>
            @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

    </section>
  </div>

  {{-- <div class="rfid-product-divider"></div> --}}

  <div class="container rfid-product-list">
    @foreach ($products as $product)
      @php
        $specRows = array_values(array_filter(array_map($parseLabelValue, $product->advantages ?? []), function ($row) {
            return $row['label'] !== '' || $row['value'] !== '';
        }));
        $notes = array_values(array_filter(array_map('trim', $product->spec_sections ?? []), fn ($item) => $item !== ''));
        $tableRows = array_values(array_filter(array_map($parseTableRow, $product->detail_cards ?? [])));
        $gallery = $product->gallery_images ?? [];
        $galleryCount = count($gallery);
      @endphp

      <article class="rfid-product-item rfid-showcase-card">

        <div class="rfid-product-main">
          <div class="rfid-product-content">
            <div class="rfid-showcase-card__header col-12 col-lg-8">
              <div class="rfid-showcase-card__badge">{{ str_pad((string) $loop->iteration, STR_PAD_LEFT) }}</div>
              <div class="rfid-showcase-card__title">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->page_title ?: 'Series' }}</p>
              </div>
            </div>

            <div class="spec-wrap">
              <div class="spec-card-shell">
                <div class="spec-grid">
                    @forelse ($specRows as $row)
                      <div class="spec-column">
                          @if ($row['label'] !== '' && $row['value'] !== '')
                              <div class="spec-item">
                                  <div class="spec-label">{{ $row['label'] }}</div>
                                  <div class="spec-value">{!! nl2br(e( $row['value'])) !!}</div>
                              </div>
                          @else
                              <div class="spec-item">
                                  <div class="spec-label">{{ $row['value'] ?: $row['label'] }}</div>
                                  <div class="spec-value">{!! nl2br(e( $row['value'] ?: $row['label'])) !!}</div>
                              </div>
                          @endif
                      </div>
                    @empty
                      <div class="spec-item">
                          <div class="spec-label">Spec</div>
                          <div class="spec-value">{!! nl2br(e( $product->intro_text ?: 'Product specification will appear here.')) !!}</div>
                      </div>
                    @endforelse
                </div>
              </div>
            </div>

            {{-- <div class="rfid-spec-list rfid-material-summary">
              @forelse ($specRows as $row)
                <div class="rfid-spec-row">
                  @if ($row['label'] !== '' && $row['value'] !== '')
                    <strong>{{ $row['label'] }}</strong>
                    <span>:</span>
                    <p>{{ $row['value'] }}</p>
                  @else
                    <strong>{{ $row['value'] ?: $row['label'] }}</strong>
                    <span>:</span>
                    <p>{{ $row['value'] ?: $row['label'] }}</p>
                  @endif
                </div>
              @empty
                <div class="rfid-spec-row">
                  <strong>Spec</strong>
                  <span>:</span>
                  <p>{{ $product->intro_text ?: 'Product specification will appear here.' }}</p>
                </div>
              @endforelse
            </div> --}}

            @if (!empty($product->feature_banner_text))
              <div class="rfid-material-banner">
                {{ $product->feature_banner_text }}
              </div>
            @endif
          </div>

          <div class="rfid-product-image rfid-product-image--angled">
            <div class="rfid-product-image__frame">
              <img src="{{ $resolveImage($product->hero_image, 'assets/img/about-us.webp') }}" alt="{{ $product->name }}">
            </div>
          </div>
        </div>

        <div class="rfid-material">
          @if (!empty($tableRows))
            <div class="rfid-material-table" style="--rfid-cols: {{ count($tableRows[0]) ?: 4 }};">
              @foreach ($tableRows as $rowIndex => $row)
                <div class="rfid-material-table__row {{ $rowIndex === 0 ? 'is-header' : '' }}" style="--rfid-cols: {{ count($row) ?: 4 }};">
                  @foreach ($row as $cell)
                    <span>{{ $cell }}</span>
                  @endforeach
                </div>
              @endforeach
            </div>
          @endif

          @if (!empty($notes))
            <div class="rfid-material-notes">
              @foreach ($notes as $noteIndex => $note)
                <div class="rfid-material-note">
                  <h3>{{ $noteIndex === 0 ? 'Recommendation' : 'Note ' . ($noteIndex + 1) }}</h3>
                  <p>{{ $note }}</p>
                </div>
              @endforeach
            </div>
          @endif

          @if (!empty($gallery))
            <div class="rfid-material-gallery">
              @foreach ($gallery as $image)
                <img src="{{ $resolveImage($image, 'assets/img/welcome.webp') }}" alt="{{ $product->name }}">
              @endforeach
            </div>
          @endif
        </div>
      </article>
    @endforeach
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper === 'undefined') {
      return;
    }

    new Swiper('.rfid-static-swiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 14,
      navigation: {
        nextEl: '.rfid-static-swiper .swiper-button-next',
        prevEl: '.rfid-static-swiper .swiper-button-prev',
      },
      breakpoints: {
        576: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
      },
    });
  });
</script>
@include('layouts.quote')
@include('layouts.footer')
