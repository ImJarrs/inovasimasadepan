<div class="attachment-gallery attachment-gallery--<?php echo e($attachmentGallery->count()); ?>">
<?php $__currentLoopData = $attachmentGallery->attachments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $attachment->richTextRender(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\inovasimasadepan\imd\vendor\tonysm\rich-text-laravel\resources\views\attachment_galleries\_attachment_gallery.blade.php ENDPATH**/ ?>