
<?php $__env->startSection('title','Add New Image'); ?>
<?php $__env->startSection('main-content'); ?>
<main class="col-md-9">
    <div class="card">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Thêm Khuyến mãi</h4>
        </div>

        <div class="card-body">
          <form action="<?php echo e(route('admin.promotion.editStore',$promotions->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="name">Tên khuyến mãi</label>
              <input type="text" class="form-control" id="promotion_name" name="promotion_name" value="<?php echo e($promotions->promotion_name); ?>">
             <?php $__errorArgs = ['promotion_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <small class="text-danger"><?php echo e($message); ?></small>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <label for="promotion_code">Mã code</label>
              <input type="text" class="form-control" id="promotion_code" name="promotion_code"  value="<?php echo e($promotions->promotion_code); ?>">
              <?php $__errorArgs = ['promotion_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <small class="text-danger"><?php echo e($message); ?></small>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="promotion_type">Loại:</label>
                <input type="text" class="form-control" id="promotion_type" name="promotion_type" value="<?php echo e($promotions->promotion_type); ?>" >
                <?php $__errorArgs = ['promotion_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="promotion_value">Giá trị khuyến mãi:</label>
                <input type="text" class="form-control" id="promotion_value" name="promotion_value" value="<?php echo e($promotions->promotion_value); ?>" >
                <?php $__errorArgs = ['promotion_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="start_date">Ngày bắt đầu:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo e($promotions->start_date); ?>">
                <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="end_date">Ngày kết thúc:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo e($promotions->end_date); ?>">
                <?php $__errorArgs = ['end_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo e($promotions->quantity); ?>">
                <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="promotion_conditions">Điều kiện khuyến mãi:</label>
                <input type="text" class="form-control" id="promotion_conditions"  name="promotion_conditions" value="<?php echo e($promotions->promotion_conditions); ?>" >
                <?php $__errorArgs = ['promotion_conditions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                <label for="status">Trạng thái</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo e($promotions->status); ?>">
                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            <button type="submit" class="btn btn-primary" name="btn-edit" value="Chỉnh sửa">Chỉnh sửa</button>
          </form>
        </div>
      </div>
  </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Datn\DuAnTotNgiep\resources\views/admin/promotion/edit.blade.php ENDPATH**/ ?>