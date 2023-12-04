<?php $__env->startSection('title', 'IKASLEEN CURSOS'); ?>

<?php $__env->startSection('content'); ?>

    <table>

        <tr>

            <th>Cursos</th>
            <th>Horas Academicas</th>
            <th>&nbsp;</th>


        </tr>
        <?php $__currentLoopData = $alumno->cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($curso->nombre); ?></td>
            <td><?php echo e($curso->horasAcademicas); ?></td>

            <td><a href="<?php echo e(route('cursos.cursos_alumnos', $curso)); ?>" class="button-style">Alumnos del Curso</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/alumnos_cursos.blade.php ENDPATH**/ ?>