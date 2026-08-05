<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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

  <!-- Blog Details Section -->
  <section id="blog-details" class="blog-details section">
      <article class="content">
          <h1 class="title"><?php echo e($blog->title); ?></h1>
  
          <div class="meta-top">
              <ul>
                  <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i>
                      <time datetime="<?php echo e($blog->created_at); ?>"><?php echo e($blog->created_at); ?></time>
                  </li>
              </ul>
          </div>
  
          <div class="image">
              <img src="<?php echo e(asset('storage/' . $blog->image1)); ?>" class="img-fluid" alt="">
          </div>
  
          <div><?php echo $blog->desc1; ?></div>
  
          <div class="image">
              <img src="<?php echo e(asset('storage/' . $blog->image2)); ?>" class="img-fluid" alt="">
          </div>
          
          <div><?php echo $blog->desc2; ?></div>
      </article>
  </section>
  
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\inovasimasadepan\imd\resources\views\blog\details.blade.php ENDPATH**/ ?>