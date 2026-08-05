<?php echo $__env->make('admin.template.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
            <a href="<?php echo e(route('admin.blog.create')); ?>" class="btn btn-success mt-3"> <i class="bi bi-plus-circle"></i> New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description (1)</th>
                            <th>Image (1)</th>
                            <th>Description (2)</th>
                            <th>Image (2)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                <td><?php echo e($item->title); ?></td>
                                <td><?php echo $item->desc1; ?></td>
                                <td>
                                    <?php if($item->image1): ?>
                                        <img src="<?php echo e(asset('storage/' . $item->image1)); ?>" alt="" width="200px">
                                    <?php else: ?>
                                        Image not found
                                    <?php endif; ?>
                                </td>

                                <td><?php echo $item->desc2; ?></td>
                                <td>
                                    <?php if($item->image2): ?>
                                        <img src="<?php echo e(asset('storage/' . $item->image2)); ?>" alt="" width="200px">
                                    <?php else: ?>
                                        Image not found
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.blog.edit', $item->id)); ?>" class="btn btn-warning"><i class="bi bi-pencil-square inline"></i></a>
                                    <form action="<?php echo e(route('admin.blog.destroy', $item->id)); ?>" method="POST">
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

<?php echo $__env->make('admin.template.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\inovasimasadepan\imd\resources\views\admin\blog\list.blade.php ENDPATH**/ ?>