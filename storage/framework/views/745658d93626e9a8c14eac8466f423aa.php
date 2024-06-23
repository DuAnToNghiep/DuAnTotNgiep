<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">List of Payments</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <a href="<?php echo e(route('payments.create')); ?>" class="btn btn-primary">Create New Payment</a>
                        </div>

                        <form action="<?php echo e(route('payments.search')); ?>" method="GET" class="form-inline mb-3">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search by bill_id">
                            </div>
                            <button type="submit" class="btn btn-primary ml-2">Search</button>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bill ID</th>
                                <th>Date Bill</th>
                                <th>Payment Method</th>
                                <th>Total Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($payment->id); ?></td>
                                    <td><?php echo e($payment->bill_id); ?></td>
                                    <td><?php echo e($payment->date_bill); ?></td>
                                    <td><?php echo e($payment->payment_method); ?></td>
                                    <td><?php echo e($payment->total_amount); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('payments.show', $payment->id)); ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="<?php echo e(route('payments.edit', $payment->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="<?php echo e(route('payments.destroy', $payment->id)); ?>" method="POST" style="display: inline-block;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($payments->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/payments/index.blade.php ENDPATH**/ ?>