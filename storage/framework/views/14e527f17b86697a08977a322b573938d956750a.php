<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i>编辑个人资料
                </h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('users.update',$user->id)); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <?php echo $__env->make('shared._error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input class="form-control" type="text" name="name" id="name-field" value="<?php echo e(old('name', $user->name)); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email-field">邮件地址</label>
                        <input class="form-control" type="text" name="email" id="email-field" value="<?php echo e(old('email',$user->email)); ?>">
                    </div>
                    <div class="form-group">
                        <label for="introduction-field">用户简介</label>
                        <textarea name="introduction" id="introduction-field" class="form-control" rows="3"><?php echo e(old('introduction',$user->introduction)); ?></textarea>
                    </div>
                      <div class="form-group mb-4">
                        <label for="" class="avatar-label">用户头像</label>
                        <input type="file" name="avatar" class="form-control-file">

                        <?php if($user->avatar): ?>
                          <br>
                          <img class="thumbnail img-responsive" src="<?php echo e($user->avatar); ?>" width="200" />
                        <?php endif; ?>
                      </div>
                    <div class="wel wel-sm">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/liwencai/MAMP PRO/snapshots/lara_web/resources/views/users/edit.blade.php ENDPATH**/ ?>