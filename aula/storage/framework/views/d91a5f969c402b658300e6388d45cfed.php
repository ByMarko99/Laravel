<?php $__env->startSection('title', 'IKASLE ZERRENDA'); ?>

<?php $__env->startSection('content'); ?>
    <h1>IKASLE ezbatu</h1>



    
    <form action="<?php echo e(route('alumnos.destroy', $alumno)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <a style="color: rgb(255, 255, 255); text-decoration: none; background-color: #0c24dc; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
            href="<?php echo e(route('alumnos.index')); ?>">EZ</a>
        <br>
        <br>

        <button
            style="color: rgb(255, 255, 255); text-decoration: none; background-color: #dc0c0c; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
            type="submit">BAI</button>

    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/delete.blade.php ENDPATH**/ ?>