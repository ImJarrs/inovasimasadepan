<div class="<?php echo e(e(\Tonysm\RichTextLaravel\RichTextLaravel::editorName()) . '-content'); ?>">
<?php if(trim($content = $content->renderWithAttachments())): ?>
    <?php echo $content; ?>

<?php endif; ?>
</div>
<?php /**PATH C:\inovasimasadepan\imd\vendor\tonysm\rich-text-laravel\resources\views\content.blade.php ENDPATH**/ ?>