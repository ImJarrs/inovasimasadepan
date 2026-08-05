<?php echo $__env->make('admin.template.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    label, textarea{
        color: rgba(0, 0, 0, 0.700);
    }
</style>
<div class="container m-2">
    <h1 class="h3 mb-4 text-gray-800">Add New</h1>

    <form action="<?php echo e(route('admin.blog.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="desc1">Description (1)</label>
                <input id="desc1" type="hidden" name="desc1">
                <trix-editor input="desc1"></trix-editor>
            </div>
            
            <div class="form-group mb-3">
                <label for="desc2">Description (2)</label>
                <input id="desc2" type="hidden" name="desc2">
                <trix-editor input="desc2"></trix-editor>
            </div>
            

            <div class="form-group">
                <label for="image1" class="form-label">Image Description (1)</label>
                <input class="form-control" type="file" name="image1" id="image1" onchange="previewImage1(event)">
                <img id="imagePreview1" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>

            <div class="form-group">
                <label for="image2" class="form-label">Image Description (2)</label>
                <input class="form-control" type="file" name="image2" id="image2" onchange="previewImage2(event)">
                <img id="imagePreview2" src="#" alt="Image Preview" style="display: none; margin-top: 20px; max-width: 200px; border-radius: 3px;">
            </div>

            <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </div>
    </form>
    <center><a href="<?php echo e(route('admin.blog')); ?>" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back</a></center>
</div>

<script>
    function previewImage1(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview1');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage2(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('imagePreview2');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<?php echo $__env->make('admin.template.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\inovasimasadepan\imd\resources\views\admin\blog\create.blade.php ENDPATH**/ ?>