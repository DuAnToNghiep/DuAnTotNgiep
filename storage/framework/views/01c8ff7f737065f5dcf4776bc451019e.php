<?php $__env->startSection('title','Edit Fabric'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h1>Edit Fabric</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('fabrics.update', $fabric->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="fabric">Fabric:</label>
                <input type="text" class="form-control" id="fabric" name="fabric" value="<?php echo e($fabric->fabric); ?>" required>
            </div>
            <div class="form-group">
                <label for="create_date">Create Date:</label>
                <input type="text" class="form-control" id="create_date" name="create_date" value="<?php echo e($fabric->create_date); ?>" disabled>
            </div>
            <div class="form-group">
                <label for="update_date">Update Date:</label>
                <input type="date" class="form-control" id="update_date" name="update_date" value="<?php echo e($fabric->update_date); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\New folder\DuAnTotNgiep\resources\views/admin/fabrics/edit.blade.php ENDPATH**/ ?>