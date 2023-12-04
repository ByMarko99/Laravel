<?php $__env->startSection('title', 'IKASLE ERAKUTSI'); ?>

<?php $__env->startSection('content'); ?>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
        <ul style="list-style-type: none; padding: 0;">
            <h2 style="margin-bottom: 20px;">IKASLE: <?php echo e($alumno->nombre_apellido); ?></h2>

            <?php if($alumno->foto): ?>
            <img src="<?php echo e(url($alumno->foto)); ?>" alt="" style="width: 200px; height: 200px; margin-top: 20px;">
            <?php else: ?>
            <img src="<?php echo e(url('storage/alumnos/default.jpg')); ?>" alt="" style="width: 200px; height: 200px; margin-top: 20px;">
<?php endif; ?>
            <li style="margin-bottom: 10px;"> Izena: <?php echo e($alumno->nombre_apellido); ?> </li>
            <li style="margin-bottom: 10px;"> Adina: <?php echo e($alumno->edad); ?> </li>
            <li style="margin-bottom: 10px;"> Telefonoa: <?php echo e($alumno->telefono); ?> </li>
            <li style="margin-bottom: 20px;"> Direcciona: <?php echo e($alumno->direccion); ?> </li>
            <a href="<?php echo e(route('alumnos.edit', $alumno)); ?>"
                style="background-color: #04AA6D; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Editatu</a>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/show.blade.php ENDPATH**/ ?>