<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php
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
?>

<header id="header" class="header-contrast d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
          <img src="<?php echo e(asset('assets/img/header-logo.webp')); ?>" alt="IMD">
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?php echo e(route('home')); ?>">Home<br></a></li>
            <li><a href="<?php echo e(route('home')); ?>#about">About</a></li>
            <li><a href="<?php echo e(route('product.showcase.rfid')); ?>" class="active">Our Products</a></li>
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="<?php echo e(route('services.recom')); ?>">RECOM</a></li>
                <li><a href="<?php echo e(route('services.splus')); ?>">SPLUS</a></li>
                <li><a href="<?php echo e(route('services.selfq')); ?>">SELFQ</a></li>
              </ul>
            </li>
            
            <li><a href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?php echo e(route('home')); ?>#contact">Get Quote</a>
  </div>
</header>

<section class="rfid-showcase">
  <div class="rfid-showcase-hero">
    <img src="<?php echo e(asset('assets/img/rfid-bg1.webp')); ?>" alt="RFID" class="rfid-showcase-hero__image" fetchpriority="high" decoding="async">
    <div class="container rfid-showcase-hero__content">
      <link rel="preload" as="image" href="<?php echo e(asset('assets/img/hero-bg.webp')); ?>" fetchpriority="high">
      <h1>RFID</h1>
      
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
        <?php $__currentLoopData = $staticAdvantages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advantage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="rfid-advantage-card">
            <div class="rfid-advantage-icon-box">
              <i class="bi <?php echo e($advantage['icon']); ?>"></i>
            </div>
            <p><?php echo e($advantage['label']); ?></p>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $staticSlides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="swiper-slide">
                <div class="rfid-static-slide-card">
                  <div class="slide-img-container">
                    <img src="<?php echo e(asset($slide['src'])); ?>">
                  </div>
                  <!-- Menampilkan label yang tadinya tersembunyi -->
                  
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

    </section>
  </div>

  

  <div class="container rfid-product-list">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $specRows = array_values(array_filter(array_map($parseLabelValue, $product->advantages ?? []), function ($row) {
            return $row['label'] !== '' || $row['value'] !== '';
        }));
        $notes = array_values(array_filter(array_map('trim', $product->spec_sections ?? []), fn ($item) => $item !== ''));
        $tableRows = array_values(array_filter(array_map($parseTableRow, $product->detail_cards ?? [])));
        $gallery = $product->gallery_images ?? [];
        $galleryCount = count($gallery);
      ?>

      <article class="rfid-product-item rfid-showcase-card">

        <div class="rfid-product-main">
          <div class="rfid-product-content">
            <div class="rfid-showcase-card__header col-12 col-lg-8">
              <div class="rfid-showcase-card__badge"><?php echo e(str_pad((string) $loop->iteration, STR_PAD_LEFT)); ?></div>
              <div class="rfid-showcase-card__title">
                <h2><?php echo e($product->name); ?></h2>
                <p><?php echo e($product->page_title ?: 'Series'); ?></p>
              </div>
            </div>

            <div class="spec-wrap">
              <div class="spec-card-shell">
                <div class="spec-grid">
                    <?php $__empty_1 = true; $__currentLoopData = $specRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <div class="spec-column">
                          <?php if($row['label'] !== '' && $row['value'] !== ''): ?>
                              <div class="spec-item">
                                  <div class="spec-label"><?php echo e($row['label']); ?></div>
                                  <div class="spec-value"><?php echo nl2br(e( $row['value'])); ?></div>
                              </div>
                          <?php else: ?>
                              <div class="spec-item">
                                  <div class="spec-label"><?php echo e($row['value'] ?: $row['label']); ?></div>
                                  <div class="spec-value"><?php echo nl2br(e( $row['value'] ?: $row['label'])); ?></div>
                              </div>
                          <?php endif; ?>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <div class="spec-item">
                          <div class="spec-label">Spec</div>
                          <div class="spec-value"><?php echo nl2br(e( $product->intro_text ?: 'Product specification will appear here.')); ?></div>
                      </div>
                    <?php endif; ?>
                </div>
              </div>
            </div>

            

            <?php if(!empty($product->feature_banner_text)): ?>
              <div class="rfid-material-banner">
                <?php echo e($product->feature_banner_text); ?>

              </div>
            <?php endif; ?>
          </div>

          <div class="rfid-product-image rfid-product-image--angled">
            <div class="rfid-product-image__frame">
              <img src="<?php echo e($resolveImage($product->hero_image, 'assets/img/about-us.webp')); ?>" alt="<?php echo e($product->name); ?>">
            </div>
          </div>
        </div>

        <div class="rfid-material">
          <?php if(!empty($tableRows)): ?>
            <div class="rfid-material-table" style="--rfid-cols: <?php echo e(count($tableRows[0]) ?: 4); ?>;">
              <?php $__currentLoopData = $tableRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowIndex => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="rfid-material-table__row <?php echo e($rowIndex === 0 ? 'is-header' : ''); ?>" style="--rfid-cols: <?php echo e(count($row) ?: 4); ?>;">
                  <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($cell); ?></span>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($notes)): ?>
            <div class="rfid-material-notes">
              <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noteIndex => $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="rfid-material-note">
                  <h3><?php echo e($noteIndex === 0 ? 'Recommendation' : 'Note ' . ($noteIndex + 1)); ?></h3>
                  <p><?php echo e($note); ?></p>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($gallery)): ?>
            <div class="rfid-material-gallery">
              <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($resolveImage($image, 'assets/img/welcome.webp')); ?>" alt="<?php echo e($product->name); ?>">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.quote', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\inovasimasadepan\imd\resources\views/products/rfid-showcase.blade.php ENDPATH**/ ?>