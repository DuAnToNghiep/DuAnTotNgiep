
<?php $__env->startSection('title', 'Thông tin giỏ hàng'); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Danh sách chi tiết giỏ hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Số Lượng</th>
                                    <th>Status</th>
                                    <th>Giá</th>
                                    <th>Ngày Tạo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $cartDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($cartDetail->id); ?></td>
                                        <td><?php echo e($cartDetail->quantity); ?></td>
                                        <td><?php echo e($cartDetail->status); ?></td>
                                        <td><?php echo e($cartDetail->price); ?></td>
                                        <td><?php echo e($cartDetail->created_at); ?></td>
                                        <td>
                                            
                                            
                                            <?php if($cartDetail->status != 'processing'): ?>
                                                <form action="<?php echo e(route('cart_details.destroy', $cartDetail->id)); ?>"  style="display: inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/cart_details/index.blade.php ENDPATH**/ ?>