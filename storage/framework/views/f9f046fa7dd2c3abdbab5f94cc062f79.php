<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Feedbacks</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="<?php echo e(route('feedbacks.create')); ?>"> Create New Feedback</a>
                </div>
            </div>
        </div>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Content</th>
                <th width="280px">Action</th>
            </tr>
            <?php $i = 0 ?>
        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($feedback->feed_back_name); ?></td>
                    <td><?php echo e($feedback->feed_back_email); ?></td>
                    <td><?php echo e($feedback->feed_back_title); ?></td>
                    <td><?php echo e($feedback->feedback_content); ?></td>
                    <td>
                        <form action="<?php echo e(route('feedbacks.destroy', $feedback->id)); ?>" method="POST">
                            <a class="btn btn-info" href="<?php echo e(route('feedbacks.show', $feedback->id)); ?>">Show</a>
                            <a class="btn btn-primary" href="<?php echo e(route('feedbacks.edit', $feedback->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <?php echo $feedbacks->links(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\New folder\vidu1\resources\views/admin/feedbacks/index.blade.php ENDPATH**/ ?>