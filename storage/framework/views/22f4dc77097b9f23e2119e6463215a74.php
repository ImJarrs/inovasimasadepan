<figure class="not-prose attachment attachment--preview attachment--<?php echo e($remoteImage->extension()); ?>" <?php if($gallery ?? false): ?> data-trix-attributes='{"presentation":"gallery"}' <?php endif; ?>>
    <img src="<?php echo e($remoteImage->url); ?>" width="<?php echo e($remoteImage->width); ?>" height="<?php echo e($remoteImage->height); ?>" />
<?php if($remoteImage->caption): ?>
    <figcaption class="attachment__caption">
        <?php echo e($remoteImage->caption); ?>

    </figcaption>
<?php endif; ?>
</figure>
<?php /**PATH C:\inovasimasadepan\imd\vendor\tonysm\rich-text-laravel\resources\views\attachables\_remote_image.blade.php ENDPATH**/ ?>