<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>
        <div class="container">
            <h1>Categories</h1>
            <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-primary">Add Category</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($category->id); ?></td>
                        <td><?php echo e($category->category_name); ?></td>
                        <td><?php echo e($category->slug); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.categories.show', $category->id)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/categories/show.blade.php ENDPATH**/ ?>