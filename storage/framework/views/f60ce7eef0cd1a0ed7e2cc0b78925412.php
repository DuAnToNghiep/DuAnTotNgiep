<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('title-page','them moi dm'); ?>
<?php $__env->startSection('main-content'); ?>


    <!-- Main content -->
    <!-- resources/views/categories/create.blade.php -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Category</title>
    </head>

    <body>
    <h1>Create Category</h1>

    <form action="<?php echo e(route('categories.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="category_name" required>
        </div>

        <div>
            <label for="Slug">Slug:</label>
            <textarea id="description" name="slug"></textarea>
        </div>

        <button type="submit">Create</button>
    </form>

    <a href="<?php echo e(route('categories.index')); ?>">Quay Lại List Categories</a>
    </body>

    </html>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>