

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-light">
    <h2 class="mb-4">Selamat datang, <span class="text-purple"><?php echo e($username); ?></span>!</h2>

    
    <div class="mb-5">
        <h4 class="text-purple mb-3">Pengumuman</h4>
        <ul class="list-group">
            <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item bg-dark text-light border-secondary"><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    
    <div class="mb-5">
        <h4 class="text-purple mb-3">Rekomendasi Manhwa Minggu Ini</h4>
        <div class="row">
            <?php $__currentLoopData = $rekomendasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-light border-purple shadow-sm">
                    <img src="<?php echo e(asset($r['gambar'])); ?>" class="card-img-top" alt="<?php echo e($r['judul']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($r['judul']); ?></h5>
                        <p class="card-text"><?php echo e($r['genre']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>