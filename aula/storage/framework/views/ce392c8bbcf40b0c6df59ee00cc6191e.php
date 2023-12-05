<?php $__env->startSection('title', 'IKASLEEN CURSOS'); ?>

<?php $__env->startSection('content'); ?>

    <table>

        <tr>

            <th>Cursos</th>


        </tr>
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if($alumno->cursos->contains($curso)): ?>
                    <td>
                        <input type="checkbox" checked >
                        <label  style="text-decoration: line-through;" for="curso-<?php echo e($curso->id); ?>"><?php echo e($curso->nombre); ?></label>
                    </td>
                <?php else: ?>
                    <td>
                        <input type="checkbox">
                        <label for="curso-<?php echo e($curso->id); ?>"><?php echo e($curso->nombre); ?></label>
                    </td>
                <?php endif; ?>
                

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/matrikulatu.blade.php ENDPATH**/ ?>