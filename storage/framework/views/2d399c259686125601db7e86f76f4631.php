<?php $__env->startSection('title','Add New Image'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e($news->news_title); ?></div>

                    <div class="card-body">
                        <p><strong>Nội dung:</strong></p>
                        <p><?php echo e($news->news_content); ?></p>
                        <?php if($news->news_image): ?>
                            <p><strong>Ảnh đại diện:</strong></p>
                            <img src="<?php echo e(asset('storage/' . $news->news_image)); ?>" alt="News Image" style="max-width: 100%;">
                        <?php endif; ?>
                        <p><strong>Ngày tạo:</strong> <?php echo e($news->created_at); ?></p>
                        <p><strong>Ngày cập nhật:</strong> <?php echo e($news->updated_at); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/news/show.blade.php ENDPATH**/ ?>