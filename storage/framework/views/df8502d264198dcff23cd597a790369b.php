<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Header (Sama seperti sebelumnya) -->
<header id="header" class="header-contrast d-flex align-items-center fixed-top">
  <!-- ... Isi header tetap sama ... -->
</header>

<!-- Blog Details Section -->
<section id="blog-details" class="blog-details section">
  <div class="blog-container"> <!-- Wrapper Baru -->
  
    <!-- Bagian Kiri: Konten Utama -->
    <article class="content">
      <div class="btn-back">
        <a href="<?php echo e(route('blog')); ?>">
          <?php echo e(svg('heroicon-o-arrow-long-left')); ?> <span>Back</span>
        </a>
      </div>
        
      <h1 class="title"><?php echo e($blog->title); ?></h1>
  
      <div class="meta-top">
          <ul>
              <li class="d-flex align-items-center">
                  <i class="bi bi-clock"></i>
                  <time datetime="<?php echo e($blog->created_at); ?>"><?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d M Y')); ?></time>
              </li>
          </ul>
      </div>
  
      <div class="image">
          <img src="<?php echo e(asset('storage/' . $blog->image1)); ?>" class="img-fluid" alt="">
      </div>
  
      <div><?php echo $blog->desc1; ?></div>
  
      <?php if($blog->image2): ?>
      <div class="image image-2">
          <img src="<?php echo e(asset('storage/' . $blog->image2)); ?>" class="img-fluid" alt="">
      </div>
      <?php endif; ?>
          
      <div class="mt-4"><?php echo $blog->desc2; ?></div>
    </article>

    <!-- Bagian Kanan: Sidebar Artikel Lain -->
    <aside class="sidebar">
      <h3 class="sidebar-title">Related Articles</h3>
      <div class="recent-posts">
        <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="recent-item">
          <!-- Sesuaikan nama route dengan yang Anda gunakan untuk halaman detail -->
          <a href="<?php echo e(url('blog/'.$recent->slug)); ?>"> 
            <img src="<?php echo e(asset('storage/' . $recent->image1)); ?>" alt="<?php echo e($recent->title); ?>">
            <div class="recent-info">
              <h4><?php echo e($recent->title); ?></h4>
              <time datetime="<?php echo e($recent->created_at); ?>"><?php echo e(\Carbon\Carbon::parse($recent->created_at)->format('d M Y')); ?></time>
            </div>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </aside>
    
  </div>
</section>
  
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /DATA/inovasi5/imd_dev/resources/views/blog/details.blade.php ENDPATH**/ ?>