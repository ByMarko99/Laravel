


<?php $__env->startSection('title', 'IKASTAROAK INDEX'); ?>

<?php $__env->startSection('content'); ?>

    

    <p>Hau da show:
        <?php echo e($curso); ?> </p>

    <?php if($curso >= 18): ?>
        <P>Sartu zaitezke</P>
    <?php else: ?> 
    <p>Ezin zara sartu</p>
    <?php endif; ?>

    <p>Biderketa taula </p>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <p><?php echo e($curso); ?> x <?php echo e($i); ?> = <?php echo e($curso * $i); ?></p>
    <?php endfor; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\eskola\resources\views/cursos/show.blade.php ENDPATH**/ ?>