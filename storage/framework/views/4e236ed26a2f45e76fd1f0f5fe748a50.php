<?php echo $__env->make('admin.template.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                            <a href="<?php echo e(route('admin.banner.create')); ?>" class="btn btn-success mt-3"> <i class="bi bi-plus-circle"></i> New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Home Banner</th>
                                            <th>Promo Banner</th>
                                            <th>Blog Banner</th>
                                            <th>Card Banner</th>
                                            <th>Wristband Banner</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($index + 1); ?></td>
                                                <td>
                                                    <?php if($banner->home_banner): ?>
                                                        <img src="<?php echo e(asset('storage/' . $banner->home_banner)); ?>" width="200px">
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($banner->promo_banner): ?>
                                                        <img src="<?php echo e(asset('storage/' . $banner->promo_banner)); ?>" alt="promoBanner" width="200px">
                                                    <?php else: ?>
                                                        Image not found
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($banner->blog_banner): ?>
                                                        <img src="<?php echo e(asset('storage/' . $banner->blog_banner)); ?>" alt="blogBanner" width="200px">
                                                    <?php else: ?>
                                                        Image not found
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($banner->card_banner): ?>
                                                        <img src="<?php echo e(asset('storage/' . $banner->card_banner)); ?>" alt="cardBanner" width="200px">
                                                    <?php else: ?>
                                                        Image not found
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($banner->wristband_banner): ?>
                                                        <img src="<?php echo e(asset('storage/' . $banner->wristband_banner)); ?>" alt="wristbandBanner" width="200px">
                                                    <?php else: ?>
                                                        Image not found
                                                    <?php endif; ?>
                                                </td>
                                                
                                                <td>
                                                    <a href="<?php echo e(route('admin.banner.edit', $banner->id)); ?>" class="btn btn-warning"><i class="bi bi-pencil-square inline"></i></a>
                                                    <form action="<?php echo e(route('admin.banner.destroy', $banner->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger mt-1"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php echo $__env->make('admin.template.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\inovasimasadepan\imd\resources\views\admin\banner\list.blade.php ENDPATH**/ ?>