<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
          <img src="<?php echo e(asset('assets/img/header-logo.webp')); ?>" alt="IMD">
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?php echo e(route('home')); ?>">Home<br></a></li>
            <li><a href="<?php echo e(route('home')); ?>#about">About</a></li>
            <li><a href="<?php echo e(route('product.showcase.rfid')); ?>">Our Products</a></li>
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


<div style="position: relative; text-align: center;">
  <?php $__currentLoopData = $blogBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('storage/' . $banner)); ?>" class="banner" alt="" data-aos="fade-in" style="width: 100%; max-height: 250px;">
      <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-weight: bold;">
          BLOG
      </h1>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

  <!-- Blog Section -->
  <section id="blog" class="blog section">

      <div class="container">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card mb-3" >
            <div class="content">
              <div class="content-image">
                <img src="<?php echo e(asset('storage/' . $item->image1)); ?>" alt="RFID">
              </div>
                <!-- Konten -->
                <div class="content-text">
                  <h5 class="card-title text-clamp"><?php echo e($item->title); ?></h5>
                  <div class="card-text text-clamp"><?php echo $item->desc1; ?></div>
                  <a href="<?php echo e(route('blog.detail', $item->slug)); ?>" class="btn btn-read btn-outline-warning btn-sm"><i class="bi bi-book"></i> Read More</a>
                </div>
            </div>            
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </section>
  
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /DATA/inovasi5/imd_dev/resources/views/blog/index.blade.php ENDPATH**/ ?>