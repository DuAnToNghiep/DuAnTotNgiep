<?php $__env->startSection('title','Chao mung ban'); ?>
<?php $__env->startSection('main-content'); ?>


        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?php echo e(route('category.create')); ?>" class="btn btn-success">+Thêm mới Menu</a>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>Tên</th>
                                <th>Menu cha</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Tùy chọn</th>
                            </tr>
                            <tr>
                                <td>Trang chủ</td>
                                <td>____</td>
                                <td>10-10-2018</td>
                                <td><span class="label label-success">Hiển thị</span></td>
                                <td>
                                    <a href="edit-menu.html" class="btn btn-success">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>

                                </td>
                            </tr>
                            <tr>
                                <td>Giới Thiệu</td>
                                <td>____</td>
                                <td>10-10-2018</td>
                                <td><span class="label label-success">Hiển thị</span></td>
                                <td>
                                    <a href="" class="btn btn-success">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>

                                </td>
                            </tr>
                            <tr>
                                <td>Đào tạo</td>
                                <td>____</td>
                                <td>10-10-2018</td>
                                <td><span class="label label-success">Hiển thị</span></td>
                                <td>
                                    <a href="" class="btn btn-success">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>

                                </td>
                            </tr>
                            <tr>
                                <td>Chương trình đào tạo</td>
                                <td>Đào tạo</td>
                                <td>10-10-2018</td>
                                <td><span class="label label-success">Hiển thị</span></td>
                                <td>
                                    <a href="" class="btn btn-success">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>

                                </td>
                            </tr>
                            <tr>
                                <td>Thi đua khen thưởng</td>
                                <td>Đào tạo</td>
                                <td>10-10-2018</td>
                                <td><span class="label label-danger">Đang ẩn</span></td>
                                <td>
                                    <a href="" class="btn btn-success">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>

                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.box -->

        </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\New folder\vidu1\resources\views/admin/category/index.blade.php ENDPATH**/ ?>