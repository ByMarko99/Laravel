<?php $__env->startSection('title', 'IKASLEEN CURSOS'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('alumnos.matrikulatu_store', $alumno)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <table>

        <tr>

            <th>Cursos</th>


        </tr>
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>


                    <td>
                        <input type="checkbox" name="cursos[]" value="<?php echo e($curso->id); ?>" <?php if($alumno->cursos->contains($curso)): ?> checked <?php endif; ?>>
                        <label><?php echo e($curso->nombre); ?></label>
                    </td>


                

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <button type="submit" class="button-style" style="background-color: black">Matrikulatu</button>

</form>



    <br>
    <br>
    <br>
    <br>
    <br>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/matrikulatu.blade.php ENDPATH**/ ?>