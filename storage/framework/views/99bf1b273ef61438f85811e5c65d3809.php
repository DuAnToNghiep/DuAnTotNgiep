<?php $__env->startSection('title','Add New Fabric'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h2>Add New Fabric</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('fabrics.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="fabric">Fabric:</label>
                <input type="text" class="form-control" id="fabric" name="fabric" required>
            </div>
            <div class="form-group">
                <label for="create_date">Create Date:</label>
                <input type="date" class="form-control" id="create_date" name="create_date" required>
            </div>
            <div class="form-group">
                <label for="update_date">Update Date:</label>
                <input type="date" class="form-control" id="update_date" name="update_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/fabrics/create.blade.php ENDPATH**/ ?>