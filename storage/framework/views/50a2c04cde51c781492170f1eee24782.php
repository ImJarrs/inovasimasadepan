<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    @import url('<?php echo e(asset('assets/css/recom.css')); ?>');
</style>


<?php
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
?>

<header id="header" class="header-blog d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="<?php echo e(asset('assets/img/header-logo.webp')); ?>" alt="IMD">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?php echo e(route('home')); ?>">Home<br></a></li>
                <li><a href="<?php echo e(route('home')); ?>#about">About</a></li>
                <li><a href="<?php echo e(route('product.showcase.rfid')); ?>">Our Products</a></li>
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?php echo e(route('services.recom')); ?>" class="active">RECOM</a></li>
                        <li><a href="<?php echo e(route('services.splus')); ?>">SPLUS</a></li>
                        <li><a href="<?php echo e(route('services.selfq')); ?>">SELFQ</a></li>
                    </ul>
                </li>
                
                <li><a href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="logo-brand d-flex align-items-center me-auto me-lg-0">
            <img src="<?php echo e(asset('assets/img/logo-recom.webp')); ?>" alt="RECOM LOGO">
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
                        <!--    <img src="<?php echo e(asset('assets/img/logo-recom.webp')); ?>" alt="RECOM logo">-->
                        <!--</div>-->

                        <div class="brand-tagline">Accountable, Trackable, Managable</div>

                        <div class="intro-list">
                            <?php $__currentLoopData = $introPoints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="intro-item">
                                    <i class="bi <?php echo e($point['icon']); ?>"></i>
                                    <div>
                                        <h3><?php echo e($point['title']); ?></h3>
                                        <p><?php echo e($point['text']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <img src="<?php echo e(asset('assets/img/bg-recomlinen.webp')); ?>" alt="RECOM background visual">
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <div class="issue-panel">
                        <div class="issue-list future-grid">
                            <?php $__currentLoopData = $issuePoints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="issue-item">
                                    <i class="bi <?php echo e($issue['icon']); ?>"></i>
                                    <div>
                                        <h3><?php echo e($issue['title']); ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

            
            <div class="product-section row g-4" style="padding-bottom: 80px; padding-top: 20px;">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="solution-panel">
                        <!--<span class="product-chip">-->
                        <!--    <img src="<?php echo e(asset('assets/img/logo-recom.webp')); ?>" alt="RECOM" style="width: 82px; height: auto;">-->
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
                            <img src="<?php echo e(asset('assets/img/fams.webp')); ?>" alt="RECOM">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="solution-panel">
                        <h3 class="solution-title-feature">Product features</h3>
                        <div class="feature-grid">
                            <?php $__currentLoopData = $famsfeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="feature-card">
                                    <div class="features-content">
                                        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $feature['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'feature-icon']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                                        <h3><?php echo e($feature['title']); ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="product-section row g-4" style="padding-bottom: 80px; padding-top: 20px;">
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="solution-panel">
                        <!--<span class="product-chip">-->
                        <!--    <img src="<?php echo e(asset('assets/img/logo-recom.webp')); ?>" alt="RECOM" style="width: 82px; height: auto;">-->
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
                            <img src="<?php echo e(asset('assets/img/slrt.webp')); ?>" alt="RECOM">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="140">
                    <div class="solution-panel">
                        <h3 class="solution-title-feature">Product features</h3>
                        <div class="feature-grid">
                            <?php $__currentLoopData = $slrtfeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="feature-card">
                                    <div class="features-content">
                                        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $feature['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'feature-icon']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                                        <h3><?php echo e($feature['title']); ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="benefit-item">
                                <div class="benefit-icon <?php echo e(!empty($benefit['recolor']) ? 'is-recolored' : ''); ?>">
                                    <img src="<?php echo e(asset('assets/img/icons/' . $benefit['image'])); ?>" alt="<?php echo e($benefit['alt']); ?>">
                                </div>
                                <h3><?php echo e($benefit['title']); ?></h3>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="visual col-lg-5" data-aos="fade-left" data-aos-delay="140">
                    <div class="benefit-visual">
                        <img src="<?php echo e(asset('assets/img/recom-fams.webp')); ?>" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo $__env->make('layouts.quote', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php /**PATH C:\inovasimasadepan\imd\resources\views/services/recom.blade.php ENDPATH**/ ?>