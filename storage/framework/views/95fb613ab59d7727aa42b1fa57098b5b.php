<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h2>Images</h2>
        <a href="<?php echo e(route('images.create')); ?>" class="btn btn-primary mb-3">Add New Image</a>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Product Detail ID</th>
                <th>Name</th>
                <th>URL</th>
                <th>Create Date</th>
                <th>Update Date</th>
                <th>Actions</th>
            </tr>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($image->id); ?></td>
                    <td><?php echo e($image->product_detail_id); ?></td>
                    <td><?php echo e($image->name_image); ?></td>
                    <td><img src="<?php echo e(asset($image->url)); ?>" alt="<?php echo e($image->name_image); ?>" style="max-width: 100px;"></td>
                    <td><?php echo e($image->create_date); ?></td>
                    <td><?php echo e($image->update_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('images.edit', $image->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('images.destroy', $image->id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/images/index.blade.php ENDPATH**/ ?>