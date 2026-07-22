</main>

<footer id="footer" class="footer dark-background">
  <div class="footer-top">
    <div class="container">


      <!-- Address and Contact Wrapper -->
      
      <div class="col-lg-12 d-flex flex-wrap footer-info">
        <!-- Logo -->
        <div class="footer-about col-lg-5">
            <div class="logo d-flex align-items-center">
              <span class="sitename">GET IN TOUCH</span>
            </div>
            <div class="logo d-flex">
              <p>
                Let's build safer, smarter business environments together. 
                Reach out to our team to discuss your goals, share insights, 
                or get expert support on our innovative technology solutions across Indonesia.
              </p>
            </div>
            {{-- <div class="image d-flex align-items-center">
              <img src="{{ asset('assets/img/header-logo2.png')}}" alt="">
            </div> --}}
        </div>

        <div class="footer-content-contact col-lg-4">
            {{-- <h5>Contact</h5> --}}
            <div class="item">
              <div class="icon-box">
                <x-gmdi-gps-fixed-tt />
              </div>
              <h4>JI. Sawo VIII Blok SV No. 3, Bekasi <br> West Java 17131, Indonesia</h4>
            </div>
            <div class="item">
              <div class="icon-box">
                <x-mdi-phone-dial />
              </div>
              <h4><a href="https://wa.me/6282323231189?text=Halo,%20saya%20ingin%20bertanya%20mengenai%20">+62 823 2323 1189</a></h4>
            </div>
            <div class="item">
              <div class="icon-box">
                <x-gmdi-email />
              </div>
              <h4><a href="mailto:sales@inovasimasadepan.com">sales@inovasimasadepan.com</a></h4>
            </div>
        </div>

        <div class="footer-content-socmed col-lg-3">
            <h5>Social Media</h5>
            <div class="item">
              <div class="icon-box">
                <a href="https://www.linkedin.com/company/pt-inovasi-masa-depan">
                <x-mdi-linkedin />
                </a>
              </div>
              <div class="icon-box">
                <a href="https://www.instagram.com/inovasimasadepan.id">
                  <x-mdi-instagram />
                </a>
              </div>
              {{-- <h4><a href="https://www.linkedin.com/company/pt-inovasi-masa-depan">PT Inovasi Masa Depan</a></h4> --}}
            </div>
            {{-- <div class="get-in-touch">
              <h5>Get In Touch</h5>
            </div> --}}
        </div>

      </div>
    </div>
  </div>
    
    <div class="copyright">
      <div class="container text-center">
          <p>© 2025<span> INOVASI MASA DEPAN, PT</span></p>
          {{-- <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> <b>|</b> Developed by <a href="">Modynamic</a>
          </div> --}}
      </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Scroll Bottom -->
<a href="#footer" id="scroll-down" class="scroll-down d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-down-short"></i>
</a>


<!-- WhatsApp Button -->
<a href="https://wa.me/6282323231189?text=Halo,%20saya%20ingin%20bertanya%20mengenai%20"  target="_blank" id="whatsapp-btn" class="whatsapp-btn d-flex align-items-center justify-content-center">
  <i class="bi bi-whatsapp"></i>
</a>


<!-- Preloader -->
<div id="preloader"></div>


<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js')}}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const scrollDownButton = document.getElementById("scroll-down");
    const scrollTopButton = document.getElementById("scroll-top");
    const targetElement = document.getElementById("footer");
  
    // Tampilkan tombol Scroll Down saat di atas halaman
    window.addEventListener("scroll", () => {
      if (window.scrollY < 100) {
        scrollDownButton.classList.add("active");
      } else {
        scrollDownButton.classList.remove("active");
      }
    });
  
    // Event untuk tombol Scroll Down
    scrollDownButton.addEventListener("click", (e) => {
      e.preventDefault(); // Mencegah perilaku default
      targetElement.scrollIntoView({
        behavior: "smooth", // Animasi scroll yang halus
        block: "start",
      });
    });
  
    // Event untuk tombol Scroll Top (opsional jika ingin keduanya aktif)
    scrollTopButton.addEventListener("click", (e) => {
      e.preventDefault(); // Mencegah perilaku default
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".init-swiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 7000, // Slide akan berpindah setiap 7 detik
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
      var swiper = new Swiper(".mySwiper", {
          loop: true,
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          autoplay: {
              delay: 5000,
              disableOnInteraction: false,
          },
      });
  });
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y52F4RQ1WL"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-Y52F4RQ1WL');
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("trix-toolbar [data-trix-button-group='file-tools']").remove();
    });
</script>

</body>
</html>