<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset("assets")); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset("assets")); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset("assets")); ?>/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo e(asset("assets")); ?>/css/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo e(asset("assets")); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(asset("assets")); ?>/css/style.css"/>
    <script src="<?php echo e(asset("assets")); ?>/js/angular.min.js"></script>
    <script src="<?php echo e(asset("assets")); ?>/js/app.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <?php echo $__env->make('admin.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $__env->yieldContent('title-page'); ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li><a href="#">Feedbacks</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>
        <?php echo $__env->yieldContent('main-content'); ?>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2018 <a href="https://adminlte.io">TTPM_BKAP</a>.</strong>
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="<?php echo e(asset("assets")); ?>/js/jquery.min.js"></script>
<script src="<?php echo e(asset("assets")); ?>/js/jquery-ui.js"></script>
<script src="<?php echo e(asset("assets")); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset("assets")); ?>/js/adminlte.min.js"></script>
<script src="<?php echo e(asset("assets")); ?>/js/dashboard.js"></script>
<script src="<?php echo e(asset("assets")); ?>/tinymce/tinymce.min.js"></script>
<script src="<?php echo e(asset("assets")); ?>/tinymce/config.js"></script>
<script src="<?php echo e(asset("assets")); ?>/js/function.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\New folder\vidu1\resources\views/admin/master.blade.php ENDPATH**/ ?>