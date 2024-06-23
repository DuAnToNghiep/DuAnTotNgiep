<?php $__env->startSection('title', 'Fabrics List'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h2>Fabrics</h2>
        <a href="<?php echo e(route('fabrics.create')); ?>" class="btn btn-primary mb-3">Add New Fabric</a>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Fabric</th>
                <th>Create Date</th>
                <th>Update Date</th>
                <th>Actions</th>
            </tr>
            <?php $__currentLoopData = $fabrics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabric): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($fabric->id); ?></td>
                    <td><?php echo e($fabric->fabric); ?></td>
                    <td><?php echo e($fabric->create_date); ?></td>
                    <td><?php echo e($fabric->update_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('fabrics.edit', $fabric->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('fabrics.destroy', $fabric->id)); ?>" method="POST" style="display:inline-block;">
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/fabrics/index.blade.php ENDPATH**/ ?>