<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3 class="text-center mb-4">Create an account</h3>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <?php echo e($errors->first()); ?>

                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name" name="name" value="<?php echo e(old('name')); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" placeholder="Password confirmation" name="password_confirmation" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary w-100">Create Account</button>
                </div>
                <div class="text-center">
                    <a href="<?php echo e(route('login')); ?>">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\chatapp\resources\views/auth/register.blade.php ENDPATH**/ ?>