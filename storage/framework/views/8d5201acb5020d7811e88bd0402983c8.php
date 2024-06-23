<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie</title>
</head>

<body>
<a class="btn btn-info" href="<?php echo e(route('categories.create')); ?>">Add New Category</a>
<br>
<table border="1">
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>slug </th>
    <th>Action </th>

    </thead>
    <tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->category_name); ?></td>
            <td><?php echo e($category->slug); ?></td>

            <td>

                <a href="<?php echo e(route('categories.edit', $category->id)); ?>">Sửa</a> |
                <a href="<?php echo e(route('categories.destroy', $category->id)); ?>">Xóa</a>

            </td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
</body>




</html>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>