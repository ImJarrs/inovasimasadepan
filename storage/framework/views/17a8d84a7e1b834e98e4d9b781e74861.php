<?php echo $__env->make('admin.template.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php
    $isEdit = $mode === 'edit';
    $routeName = $isEdit ? 'admin.product.showcase.update' : 'admin.product.showcase.store';
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo e($isEdit ? 'Edit' : 'Add'); ?> Product Showcase</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e($isEdit ? route($routeName, $product) : route($routeName)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if($isEdit): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <?php
            $advantagesText = old('advantages_text', implode("\n", $product->advantages ?? []));
            $specSectionsText = old('spec_sections_text', implode("\n", $product->spec_sections ?? []));
            $detailCardsText = old('detail_cards_text', implode("\n", $product->detail_cards ?? []));
        ?>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Product / Material Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $product->name)); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Series Title</label>
                <input type="text" name="page_title" class="form-control" value="<?php echo e(old('page_title', $product->page_title)); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Hero Image</label>
                <input type="file" name="hero_image" class="form-control">
                <?php if($product->hero_image): ?>
                    <img src="<?php echo e(asset('storage/' . $product->hero_image)); ?>" alt="" class="mt-2" style="max-width: 180px;">
                <?php endif; ?>
            </div>
            <div class="col-12">
                <label class="form-label">Top Specs</label>
                <textarea name="advantages_text" class="form-control" rows="5" placeholder="Use Label | Value on each line"><?php echo e($advantagesText); ?></textarea>
                <small class="text-muted">One line per spec. Use <code>Label | Value</code> so the public page can render the bold label and the detail text.</small>
            </div>
            <div class="col-12">
                <label class="form-label">Material Table Rows</label>
                <textarea name="detail_cards_text" class="form-control" rows="6" placeholder="Feature | PVC | PET | PETG"><?php echo e($detailCardsText); ?></textarea>
                <small class="text-muted">Each line becomes one table row. Use <code>|</code> to separate columns, starting with the header row.</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Gallery Images</label>
                <input type="file" name="gallery_images[]" class="form-control" multiple>
                <?php if(!empty($product->gallery_images)): ?>
                    <div class="d-flex flex-wrap gap-2 mt-2">
                        <?php $__currentLoopData = $product->gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/' . $image)); ?>" alt="" style="max-width: 90px; max-height: 90px; object-fit: cover;">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo e(route('admin.product.showcase.index')); ?>" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </form>
</div>

<?php echo $__env->make('admin.template.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\inovasimasadepan\imd\resources\views/admin/product-showcase/form.blade.php ENDPATH**/ ?>