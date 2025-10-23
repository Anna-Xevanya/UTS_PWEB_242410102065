

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="text-center">
    <h3>Profil Pengguna</h3>
    <p>Nama pengguna: <strong><?php echo e($username ?? 'Guest'); ?></strong></p>
    <p>Email: <?php echo e(strtolower($username ?? 'guest')); ?>@example.com</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-laravel\resources\views/profile.blade.php ENDPATH**/ ?>