
<?php $__env->startSection('title','Add New Fabric'); ?>
<?php $__env->startSection('main-content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Colors</title>
</head>

<body>
    <a class="btn btn-info" href="<?php echo e(route('colors.create')); ?>">Add New Colors</a>

    <br>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>status </th>
            <th>Action </th>

        </thead>
        <tbody>
            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($color->id); ?></td>
                    <td><?php echo e($color->color_name); ?></td>
                    <td><?php echo e($color->status); ?></td>

                    <td>

                        <a href="<?php echo e(route('colors.edit', $color->id)); ?>">Sửa</a> |
                        <a href="<?php echo e(route('colors.destroy', $color->id)); ?>">Xóa</a>

                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</body>
<?php $__env->stopSection(); ?>




</html>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/colors/index.blade.php ENDPATH**/ ?>