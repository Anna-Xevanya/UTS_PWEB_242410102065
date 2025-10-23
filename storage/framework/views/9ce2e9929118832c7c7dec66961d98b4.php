

<?php $__env->startSection('title', 'Pengelolaan Manhwa'); ?>

<?php $__env->startSection('content'); ?>
<h3 class="mb-4 text-center text-light"> All Series</h3>

<div class="row">
    <?php $__currentLoopData = $manhwas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manhwa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
            <img src="<?php echo e(asset($manhwa['gambar'])); ?>" class="card-img-top" alt="<?php echo e($manhwa['judul']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($manhwa['judul']); ?></h5>
                <p class="card-text mb-1"><strong>Genre:</strong> <?php echo e($manhwa['genre']); ?></p>
                <p class="card-text"><strong>Rating:</strong> ⭐ <?php echo e($manhwa['rating']); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\tugas-laravel\resources\views/pengelolaan.blade.php ENDPATH**/ ?>