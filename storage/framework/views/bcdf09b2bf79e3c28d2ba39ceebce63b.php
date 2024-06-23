
<?php $__env->startSection('title','Add New Image'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="card col-md-9">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Danh sách khuyến mãi</h4>
    </div>
    <?php if(session('status')): ?>
    <div class="alert alert-success"><?php echo e(session('status')); ?></div>
<?php endif; ?>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Mã code</th>
              <th>Ngày bắt đầu</th>
              <th>Ngày kết thúc</th>
              <th>Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php if($promotions->isNotEmpty()): ?>
            <?php
                $temp = 0
            ?>
                <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $temp++
            ?>
                <tr>
                    <td><?php echo e($temp); ?></td>
                    <td><?php echo e($promotion->promotion_name); ?></td>
                    <td><?php echo e($promotion->promotion_code); ?></td>
                    <td><?php echo e($promotion->start_date); ?></td>
                    <td><?php echo e($promotion->end_date); ?></td>
                    <td>
                      <a href="<?php echo e(route('promotion.edit',$promotion->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                      <a href="<?php echo e(route('promotion.delete',$promotion->id)); ?>" class="btn btn-sm btn-danger" onclick="if (!confirm('Bạn có muốn xóa bản ghi này không?')) { event.preventDefault(); }">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <!-- More rows for other users -->
          </tbody>
        </table>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/promotion/index.blade.php ENDPATH**/ ?>