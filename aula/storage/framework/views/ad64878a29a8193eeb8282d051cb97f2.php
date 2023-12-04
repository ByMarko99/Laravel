<?php $__env->startSection('title', 'IKASLEEN CURSOS'); ?>

<?php $__env->startSection('content'); ?>

    <table>

        <tr>

            <th>Argazkia</th>
            <th>Alumnos en curso</th>
            <th>Edad</th>

            <th>&nbsp;</th>

        </tr>
        <?php $__currentLoopData = $curso->alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <div style="display: flex; justify-content: center;">
                    <?php if($alumno->foto): ?>
                    <img src="<?php echo e(url($alumno->foto)); ?>" alt="" style="width: 100px; height: 50px;">
                    <?php else: ?>
                    <img src="<?php echo e(url('storage/alumnos/default.jpg')); ?>" alt="" style="width: 100px; height: 50px; text-align:center;">
                  <?php endif; ?>
                </div>

                </td>
                <td><?php echo e($alumno->nombre_apellido); ?></td>
                <td><?php echo e($alumno->edad); ?></td>
                <td>
                    <a href="<?php echo e(route('alumnos.index')); ?>" class="button-style">Index</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/cursos/cursos_alumnos.blade.php ENDPATH**/ ?>