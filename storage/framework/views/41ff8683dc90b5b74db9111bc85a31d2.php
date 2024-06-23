<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <h2>Thông tin chi tiết Feedback</h2>
        <p><strong>ID:</strong> <?php echo e($feedback->id); ?></p>
        <p><strong>User ID:</strong> <?php echo e($feedback->user_id); ?></p>
        <p><strong>Tên:</strong> <?php echo e($feedback->feed_back_name); ?></p>
        <p><strong>Email:</strong> <?php echo e($feedback->feed_back_email); ?></p>
        <p><strong>Phone:</strong> <?php echo e($feedback->feed_back_phone); ?></p>
        <p><strong>Tiêu đề:</strong> <?php echo e($feedback->feed_back_title); ?></p>
        <p><strong>Nội dung:</strong> <?php echo e($feedback->feedback_content); ?></p>
        <p><strong>Trạng thái:</strong> <?php echo e($feedback->status); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\New folder\vidu1\resources\views/admin/feedbacks/show.blade.php ENDPATH**/ ?>