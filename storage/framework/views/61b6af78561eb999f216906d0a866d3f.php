<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h2>Edit Image</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('images.update', $image->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="product_detail_id">Product Detail ID:</label>
                <input type="text" class="form-control" id="product_detail_id" name="product_detail_id" value="<?php echo e($image->product_detail_id); ?>" required>
            </div>
            <div class="form-group">
                <label for="name_image">Name:</label>
                <input type="text" class="form-control" id="name_image" name="name_image" value="<?php echo e($image->name_image); ?>" required>
            </div>
            <div class="form-group">
                <label for="url">Upload Image:</label>
                <input type="file" class="form-control" id="url" name="url" accept="image/*">
            </div>
            <div class="form-group">
                <label for="create_date">Create Date:</label>
                <input type="date" class="form-control" id="create_date" name="create_date" value="<?php echo e($image->create_date); ?>" required>
            </div>
            <div class="form-group">
                <label for="update_date">Update Date:</label>
                <input type="date" class="form-control" id="update_date" name="update_date" value="<?php echo e($image->update_date); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\New folder\vidu1\resources\views/admin/images/edit.blade.php ENDPATH**/ ?>