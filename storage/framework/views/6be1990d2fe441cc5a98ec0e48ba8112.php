<?php echo $__env->make('admin.template.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Product Showcase</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if(!empty($missingTable)): ?>
        <div class="alert alert-warning">
            Product showcase table is not available yet. Run <code>php artisan migrate</code> before using this CRUD.
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Showcase Pages</h6>
            <a href="<?php echo e(route('admin.product.showcase.create')); ?>" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> New Page
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Hero</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->page_title); ?></td>
                                <td>
                                    <?php if($product->hero_image): ?>
                                        <img src="<?php echo e(asset('storage/' . $product->hero_image)); ?>" alt="<?php echo e($product->name); ?>" style="max-width: 120px; height: auto;">
                                    <?php endif; ?>
                                </td>
                                <td class="d-flex gap-2">
                                    <a href="<?php echo e(route('admin.product.showcase.edit', $product)); ?>" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.product.showcase.destroy', $product)); ?>" method="POST" onsubmit="return confirm('Delete this showcase page?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">No showcase page yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.template.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\inovasimasadepan\imd\resources\views\admin\product-showcase\index.blade.php ENDPATH**/ ?>