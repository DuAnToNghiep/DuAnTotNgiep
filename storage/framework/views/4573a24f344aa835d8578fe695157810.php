<!-- resources/views/categories/create.blade.php -->


<?php $__env->startSection('title', 'Create Category'); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('categories.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="category_name">Category Name:</label>
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                       placeholder="Enter category name" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <textarea class="form-control" id="slug" name="slug" placeholder="Enter slug"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">Back to Categories List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/categories/create.blade.php ENDPATH**/ ?>