<div class="not-prose attachment-gallery attachment-gallery--<?php echo e(count($attachables)); ?>">
    <?php $__currentLoopData = $attachables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('rich-text-laravel::attachables._remote_image', [
            'remoteImage' => $attachable,
            'gallery' => true
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\inovasimasadepan\imd\vendor\tonysm\rich-text-laravel\resources\views\attachables\_image_gallery.blade.php ENDPATH**/ ?>