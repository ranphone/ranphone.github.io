<?php $__env->startSection('content'); ?>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>RANPHONE </b>Admin</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login Admin RANPHONE</p>

        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

          <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label class="form-check-label" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-2">
                <button type="submit" class="btn btn-primary">
                    <?php echo e(__('Login')); ?>

                </button>
            </div>
          </div>
        </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ranphone\resources\views/auth/login.blade.php ENDPATH**/ ?>