 <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <?php $__currentLoopData = $homeBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('storage/' . $banner)); ?>" alt="" data-aos="fade-in">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="container">

      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>RFID & NFC Technology</h2>
          <p>SIMPLE | PRECISE | SECURE</p>
        </div>
      </div>

      <div class="icon-point gy-4 mt-5 justify-content-center">

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/cpu.webp')); ?>">
            <h3>Strong<br>Chipset<br>Durability</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/thumb.webp')); ?>">
            <h3>Excellent<br>Material<br>Quality</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/warranty.webp')); ?>">
            <h3>1 Year<br>Guarantee</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/delivery.webp')); ?>">
            <h3>Faster<br>Delivery</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/custom.webp')); ?>">
            <h3>Custom Fit<br>Solutions</h3>
          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- /Hero Section -->

  <?php echo $__env->make('components.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <section id="vision" class="vision section">
    <div class="container vision-layout">
      <div class="vision-card">
        <h2>Vision</h2>
        <p>To be a leading provider of innovative technology products and solutions.</p>
      </div>

      <div class="vision-hero-image">
        <img src="<?php echo e(asset('assets/img/slocks/4.png')); ?>" alt="IMD technology vision">
      </div>

      <div class="vision-side-image">
        <img src="<?php echo e(asset('assets/img/about-us.webp')); ?>" alt="IMD innovation">
      </div>

      <div class="mission-panel">
        <h2>Mission</h2>

        <div class="mission-list">
          <div class="mission-item">
            <span class="mission-icon"><i class="bi bi-lightbulb"></i></span>
            <div>
              <h3>Adapt and Innovate</h3>
              <p>Continuously evolve our technology to meet the demands of an ever-changing market.</p>
            </div>
          </div>

          <div class="mission-item">
            <span class="mission-icon"><i class="bi bi-people"></i></span>
            <div>
              <h3>Client-Centric Approach</h3>
              <p>Build strong, lasting partnerships by providing customized solutions that align with our clients' goals and values.</p>
            </div>
          </div>

          <div class="mission-item">
            <span class="mission-icon"><i class="bi bi-award"></i></span>
            <div>
              <h3>Prioritize Quality</h3>
              <p>Uphold the highest standards of quality and reliability in all our products.</p>
            </div>
          </div>

          <div class="mission-item">
            <span class="mission-icon"><i class="bi bi-graph-up-arrow"></i></span>
            <div>
              <h3>Sustain Growth</h3>
              <p>Expand our influence across multiple industries by addressing unique business needs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Vision Section -->

  
  <section id="benefit" class="benefit section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Why Choose Us?</h2>
    </div><!-- End Section Title -->

    <div class="container">
    <!-- justify-content-center membuat item ganjil di akhir otomatis ke tengah -->
        <div class="row g-4 g-lg-5 justify-content-center">
            
            <!-- Item 1 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-item d-flex align-items-start">
                    <div class="benefit-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Proven Experience & Trusted by Leading Brands</h3>
                        <p>
                            Trusted by leading hotels, hospitality groups, and organizations across
                            Indonesia as a reliable provider of RFID solutions and operational
                            technology systems.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-item d-flex align-items-start">
                    <div class="benefit-icon">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Innovative & Future-Ready Solutions</h3>
                        <p>
                            We continuously deliver innovative technologies, including RFID/NFC
                            Cards, Asset Management Systems, Self Check-In Kiosks, and Smart
                            Electronic Lock Solutions to support business transformation.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-item d-flex align-items-start">
                    <div class="benefit-icon">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Customized to Your Business Needs</h3>
                        <p>
                            Every business has unique requirements. Our products and solutions are
                            designed to be flexible and customizable to align with your branding,
                            operational processes, and business objectives.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-item d-flex align-items-start">
                    <div class="benefit-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Quality, Durable & Reliable Products</h3>
                        <p>
                            We are committed to providing high-quality products built with durable
                            materials and reliable performance, ensuring long-term value and
                            minimal operational disruption.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 5 (Otomatis di tengah karena justify-content-center pada row) -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-item d-flex align-items-start">
                    <div class="benefit-icon icon-247">
                      <div class="dial-247">24/7</div>
                    </div>
                    <div class="benefit-content">
                      <h3>Professional Support & Long-Term Partnership</h3>
                      <p>
                          We do more than supply products-we build lasting partnerships
                          through professional consultation, seamless implementation, technical
                          support, and dedicated after-sales service.
                      </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

  <?php echo $__env->make('components.partner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p><b>Jl. Sawo VIII Blok SV no. 3, Bekasi<br>West Java 17131 - Indonesia</b></p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-whatsapp flex-shrink-0"></i>
            <div>
              <h3>WhatsApp</h3>
              <a href="https://wa.me/6282323231189?text=Halo,%20saya%20ingin%20bertanya%20mengenai%20" target="_blank"><p>+62 823 2323 1189</p></a>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <a href="mailto:sales@inovasimasadepan.com"><p>sales@inovasimasadepan.com</p></a>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
          <form action="<?php echo e(route('send')); ?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <?php echo csrf_field(); ?>
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="number" class="form-control" name="mobile_number" placeholder="Your Mobile Number" required="">
              </div>

              <div class="col-md-12">
                <input type="email" class="form-control" name="email_address" placeholder="Your Email Address" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <!-- Google reCAPTCHA -->
              
                  <div class="g-recaptcha" style="display: flex; justify-content: center;" data-sitekey="<?php echo e(env('RECAPTCHA_SITE_KEY')); ?>"></div>
                
                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->
<?php echo $__env->make('layouts.quote', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /DATA/inovasi5/imd_dev/resources/views/index.blade.php ENDPATH**/ ?>