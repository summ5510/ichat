<?php $__env->startSection('content'); ?>
<h3 style="margin-bottom:20px;"><?php echo e(env('APP_NAME','Chat App')); ?></h3>
<div class="alert alert-info server_msg" style="display:none"></div>
<div class="alert alert-danger server_error" style="display:none"></div>
<div class="alert alert-info pending_msg">Connecting to server ...</div>
<div>
    <br>
    <div id="messages">
<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="msg">
<?php if(auth()->user()->id==$message->user->id): ?>
<span class="badge badge-primary"><?php echo e($message->user->name); ?> :</span> <?php echo e($message->body); ?>

<?php else: ?>
<span class="badge badge-dark"><?php echo e($message->user->name); ?> :</span> <?php echo e($message->body); ?>

<?php endif; ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<div style="position:fixed;bottom:20px; width:100%;left:0">
<input type="text" class="form-control" placeholder="Say something and hit the Enter" id="toSend">
</div>
<script>
let me = "<?php echo e(Auth::user()->id); ?>";
</script>
<script src="/js/j.js"></script>
<script src="/js/n.js"></script>
<script src="/js/app.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\chatapp\resources\views/main.blade.php ENDPATH**/ ?>