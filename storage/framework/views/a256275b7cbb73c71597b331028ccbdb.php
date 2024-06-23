
<?php $__env->startSection('title','Add New Image'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="card col-md-9">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Danh sách trả hàng</h4>
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
              <th>Hóa đơn</th>
              <th>Người trả</th>
              <th>Chi tiết sản phẩm</th>
              <th>Ngày trả</th>
              <th>Lý do</th>
              <th>Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php if($returnItems->isNotEmpty()): ?>
            <?php
                $temp = 0
            ?>
                <?php $__currentLoopData = $returnItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $temp++
            ?>
                <tr>
                    <td><?php echo e($temp); ?></td>
                    <td><?php echo e($item->bill_id); ?></td>
                    <td><?php echo e($item->user_id); ?></td>
                    <td><?php echo e($item->product_detail_id); ?></td>
                    <td><?php echo e($item->return_date); ?></td>
                    <td><?php echo e($item->reason); ?></td>
                    <td>
                      <a href="<?php echo e(route('admin.returnItem.edit',$item->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                      <a href="<?php echo e(route('admin.returnItem.delete',$item->id)); ?>" class="btn btn-sm btn-danger" onclick="if (!confirm('Bạn có muốn xóa bản ghi này không?')) { event.preventDefault(); }">Delete</a>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/returnItem/index.blade.php ENDPATH**/ ?>