
<?php $__env->startSection('title', 'List Colors'); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">List Colors</h4>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-info mb-3" href="<?php echo e(route('colors.create')); ?>">Add New Color</a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($color->id); ?></td>
                                    <td><?php echo e($color->color_name); ?></td>
                                    <td><?php echo e($color->status); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('colors.edit', $color->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="<?php echo e(route('colors.destroy', $color->id)); ?>"  style="display: inline-block;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/colors/index.blade.php ENDPATH**/ ?>