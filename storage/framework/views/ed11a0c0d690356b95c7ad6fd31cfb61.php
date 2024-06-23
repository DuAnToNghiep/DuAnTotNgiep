<!-- resources/views/products/show.blade.php -->


<?php $__env->startSection('title','Add New Image'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container mt-4">
        <h2>Product Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($product->product_name); ?></h5>
                <p class="card-text"><strong>Price:</strong> <?php echo e($product->product_price); ?></p>
                <p class="card-text"><strong>Created At:</strong> <?php echo e($product->created_at); ?></p>
                <p class="card-text"><strong>Updated At:</strong> <?php echo e($product->updated_at); ?></p>
            </div>
        </div>
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary mt-3">Back to Products</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/products/show.blade.php ENDPATH**/ ?>