<!-- resources/views/colors/create.blade.php -->

<?php $__env->startSection('title', 'Add New Color'); ?>
<?php $__env->startSection('main-content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Add New Color</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo e(route('colors.index')); ?>">Colors</a></li>
                <li class="active">Add New Color</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Color Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo e(route('colors.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="color_name" placeholder="Enter color name" required>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" class="form-control" id="status" name="status" placeholder="Enter status" required>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="<?php echo e(route('colors.index')); ?>" class="btn btn-default">Back to Colors</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/colors/create.blade.php ENDPATH**/ ?>