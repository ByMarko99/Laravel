<?php $__env->startSection('title', 'IKASLE ZERRENDA'); ?>

<?php $__env->startSection('content'); ?>

    <table>

        <tr>
            <th>Izena</th>
            <th>Nivel</th>
            <th>Horas Academicas</th>
            <th>Profesor</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>

        </tr>
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a > <?php echo e($curso->nombre); ?></a>
                </td>
                <td><?php echo e($curso->nivel); ?></td>
                <td><?php echo e($curso->horasAcademicas); ?></td>
                <td><?php echo e($curso->profesor->nombreApellido); ?></td>
                <td><a href="<?php echo e(route('cursos.edit', $curso)); ?>">Editatu</a></td>
                <td><a >Ezabatu</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/cursos/index.blade.php ENDPATH**/ ?>