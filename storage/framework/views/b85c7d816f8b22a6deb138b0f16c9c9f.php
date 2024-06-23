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
                        <th>Danh mục</th>
                        <th>Sản phẩm</th>
                        <th>Nhập giá </th>
                        <th>Giá sản phẩm</th>
                        <th>Note</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($productDetails->isNotEmpty()): ?>
                        <?php
                            $temp = 0
                        ?>
                        <?php $__currentLoopData = $productDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $temp++
                            ?>
                            <tr>
                                <td><?php echo e($temp); ?></td>
                                <td><?php echo e($item->category_id); ?></td>
                                <td><?php echo e($item->product_id); ?></td>
                                <td><?php echo e($item->import_price_product_detail); ?></td>
                                <td><?php echo e($item->price_product_detail); ?></td>
                                <td><?php echo e($item->note); ?></td>
                                <td>
                                    <a href="<?php echo e(route('productDetail.create')); ?>" class="btn btn-sm btn-primary">Add New</a>
                                    <a href="<?php echo e(route('productDetail.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo e($item->id); ?>">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this item?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <form action="<?php echo e(route('productDetail.destroy', $item->id)); ?>" method="POST" style="display: inline;">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/productDetail/index.blade.php ENDPATH**/ ?>