<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('title-page','them moi dm'); ?>
<?php $__env->startSection('main-content'); ?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>

<body>
<h1>Edit Category</h1>

<form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="">Name </label>
            <input type="text" class="form-control" placeholder="Tên chuyên mục" name="category_name"
                   onkeyup="ChangeToSlug();" value="<?php echo e($category->category_name); ?>">
        </div>
        <div class="form-group">
            <label for="">Description </label>
            <textarea id="description" name="slug"><?php echo e($category->slug); ?></textarea>
        </div>
        
    </div>

    </div>
    

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>