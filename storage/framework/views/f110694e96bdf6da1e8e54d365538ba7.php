  <!-- Partners Section -->
  <section id="partners" class="partners section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Partners</h2>
    </div>

    <?php
      $partnerLogos = [
        ['src' => 'assets/img/partner&clients/artotelgroup.webp', 'alt' => 'Artotel Group'],
        ['src' => 'assets/img/partner&clients/amaris.webp', 'alt' => 'Amaris Hotel'],
        ['src' => 'assets/img/partner&clients/batiqa.webp', 'alt' => 'Batiqa Hotels'],
        ['src' => 'assets/img/partner&clients/biglandbogor.webp', 'alt' => 'Bigland Bogor'],
        ['src' => 'assets/img/partner&clients/bono.webp', 'alt' => 'Bono by Artotel'],
        ['src' => 'assets/img/partner&clients/cleo.webp', 'alt' => 'Cleo Hotels'],
        ['src' => 'assets/img/partner&clients/dafam.webp', 'alt' => 'Dafam'],
        ['src' => 'assets/img/partner&clients/debraga.webp', 'alt' => 'de Braga by Artotel'],
        ['src' => 'assets/img/partner&clients/delonix.webp', 'alt' => 'Delonix Hotel'],
        ['src' => 'assets/img/partner&clients/elais.webp', 'alt' => 'Elais by Artotel'],
        ['src' => 'assets/img/partner&clients/fave.webp', 'alt' => 'Favehotel'],
        ['src' => 'assets/img/partner&clients/frasers.webp', 'alt' => 'Frasers Hospitality'],
        ['src' => 'assets/img/partner&clients/garrya.webp', 'alt' => 'Garrya Hotel'],
        ['src' => 'assets/img/partner&clients/goldentulip.webp', 'alt' => 'Golden Tulip'],
        ['src' => 'assets/img/partner&clients/grandsunshine.webp', 'alt' => 'Grand Sunshine'],
        ['src' => 'assets/img/partner&clients/harris.webp', 'alt' => 'Harris Hotels'],
        ['src' => 'assets/img/partner&clients/heef.webp', 'alt' => 'Heef Hotel'],
        ['src' => 'assets/img/partner&clients/horison.webp', 'alt' => 'Horison Hotels'],
        ['src' => 'assets/img/partner&clients/artotel.webp', 'alt' => 'Artotel'],
        ['src' => 'assets/img/partner&clients/artotelbianti.webp', 'alt' => 'Artotel Suites Bianti'],
        ['src' => 'assets/img/partner&clients/ibisbudget.webp', 'alt' => 'Ibis Budget'],
        ['src' => 'assets/img/partner&clients/ibishotels.webp', 'alt' => 'Ibis Hotels'],
        ['src' => 'assets/img/partner&clients/ibisstyles.webp', 'alt' => 'Ibis Styles'],
        ['src' => 'assets/img/partner&clients/kyriad.webp', 'alt' => 'Kyriad'],
        ['src' => 'assets/img/partner&clients/lojikka.webp', 'alt' => 'Lojikka'],
        ['src' => 'assets/img/partner&clients/luminor.webp', 'alt' => 'Luminor Hotel'],
        ['src' => 'assets/img/partner&clients/marc.webp', 'alt' => 'Marc Hotel'],
        ['src' => 'assets/img/partner&clients/maxone.webp', 'alt' => 'MaxOne Hotels'],
        ['src' => 'assets/img/partner&clients/mercure.webp', 'alt' => 'Mercure Hotels'],
        ['src' => 'assets/img/partner&clients/miers.webp', 'alt' => 'Miers'],
        ['src' => 'assets/img/partner&clients/mimaru.webp', 'alt' => 'Mimaru Hotel'],
        ['src' => 'assets/img/partner&clients/mirahhotel.webp', 'alt' => 'Mirah Hotel & Resort'],
        ['src' => 'assets/img/partner&clients/niteday.webp', 'alt' => 'All Nite & Day'],
        ['src' => 'assets/img/partner&clients/parador.webp', 'alt' => 'Parador Hotels & Resorts'],
        ['src' => 'assets/img/partner&clients/permatabogor.webp', 'alt' => 'Permata Hotel Bogor'],
        ['src' => 'assets/img/partner&clients/pranaya.webp', 'alt' => 'Pranaya Boutique Hotel'],
        ['src' => 'assets/img/partner&clients/artotelcasa.webp', 'alt' => 'Artotel Casa'],
        ['src' => 'assets/img/partner&clients/artotelmangkuluhur.webp', 'alt' => 'Artotel Suites Mangkuluhur'],
        ['src' => 'assets/img/partner&clients/regantris.webp', 'alt' => 'Regantris Hotel'],
        ['src' => 'assets/img/partner&clients/rez.webp', 'alt' => 'REZ Hotel'],
        ['src' => 'assets/img/partner&clients/rooms.webp', 'alt' => 'Rooms Inc'],
        ['src' => 'assets/img/partner&clients/santika.webp', 'alt' => 'Santika Indonesia'],
        ['src' => 'assets/img/partner&clients/sparks.webp', 'alt' => 'Sparks Life'],
        ['src' => 'assets/img/partner&clients/starhotel.webp', 'alt' => 'Star Hotel'],
        ['src' => 'assets/img/partner&clients/swissbhi.webp', 'alt' => 'Swiss-Belhotel International'],
        ['src' => 'assets/img/partner&clients/thepatra.webp', 'alt' => 'The Patra Bali'],
        ['src' => 'assets/img/partner&clients/thereiz.webp', 'alt' => 'The Reiz Suites'],
        ['src' => 'assets/img/partner&clients/thetribrata.webp', 'alt' => 'The Tribrata'],
        ['src' => 'assets/img/partner&clients/thewestcove.webp', 'alt' => 'The Westcove'],
        ['src' => 'assets/img/partner&clients/vega.webp', 'alt' => 'Vega Gading Serpong'],
        ['src' => 'assets/img/partner&clients/vue.webp', 'alt' => 'Vue Palace'],
        ['src' => 'assets/img/partner&clients/yello.webp', 'alt' => 'Yello Hotel'],
        ['src' => 'assets/img/partner&clients/yellowstar.webp', 'alt' => 'Yellow Star Hotel'],
      ];

      // Membagi array menjadi persis 3 bagian yang sama/mendekati
      $chunkSize = ceil(count($partnerLogos) / 3);
      $partnerRows = array_chunk($partnerLogos, $chunkSize);
    ?>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="partner-slider" aria-label="Partner logo slider">
        <?php $__currentLoopData = $partnerRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowIndex => $partnerRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!-- Baris ganjil (indeks 1) akan bergerak berlawanan agar menghasilkan efek selang-seling -->
          <div class="partner-track <?php echo e($rowIndex % 2 !== 0 ? 'partner-track-reverse' : ''); ?>">
            <?php $__currentLoopData = array_merge($partnerRow, $partnerRow, $partnerRow); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="partner-logo-card">
                <img src="<?php echo e(asset($partner['src'])); ?>" alt="<?php echo e($partner['alt']); ?> logo">
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
</section><?php /**PATH C:\inovasimasadepan\imd\resources\views/components/partner.blade.php ENDPATH**/ ?>