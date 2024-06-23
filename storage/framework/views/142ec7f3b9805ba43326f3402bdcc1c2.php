<!-- resources/views/products/index.blade.php -->


<?php $__env->startSection('title','Add New Image'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col">
                <form action="<?php echo e(route('products.index')); ?>" method="GET" class="form-inline">
                    <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search" value="<?php echo e($search); ?>">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <div class="col text-right">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success">Create New Product</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->product_name); ?></td>
                    <td><?php echo e($product->product_price); ?></td>
                    <td><?php echo e($product->created_at); ?></td>
                    <td><?php echo e($product->updated_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-primary">View</a>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this products?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($products->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/products/index.blade.php ENDPATH**/ ?>