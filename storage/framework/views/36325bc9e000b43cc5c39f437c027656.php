
<?php $__env->startSection('title', 'Edit Color'); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Color</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('colors.update', $color->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="color_name">Color Name</label>
                                <input type="text" class="form-control" id="color_name" name="color_name"
                                       placeholder="Enter color name" value="<?php echo e($color->color_name); ?>">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <textarea class="form-control" id="status" name="status"
                                          placeholder="Enter status"><?php echo e($color->status); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/colors/edit.blade.php ENDPATH**/ ?>