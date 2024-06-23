<?php $__env->startSection('title', 'Manage Categories'); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="container mt-4">
        <h2>Manage Categories</h2>
        <a class="btn btn-info mb-3" href="<?php echo e(route('categories.create')); ?>">Add New Category</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->category_name); ?></td>
                    <td><?php echo e($category->slug); ?></td>
                    <td>
                        <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                        <form action="<?php echo e(route('categories.destroy', $category->id)); ?>"  class="d-inline">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/categories/index.blade.php ENDPATH**/ ?>