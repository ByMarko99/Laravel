<?php $__env->startSection('title', 'IKASLE ZERRENDA'); ?>

<?php $__env->startSection('content'); ?>

    <table>

        <tr>
            <th>Argazkia</th>

            <th>Izen Abizena</th>
            <th>Adina</th>
            <th>Telefonoa</th>
            <th>Direccion</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>


        </tr>
        <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($alumno->foto): ?>
                    <img src="<?php echo e(url($alumno->foto)); ?>" alt="" style="width: 50px; height: 50px;">
                    <?php else: ?>
                    <img src="<?php echo e(url('storage/alumnos/default.jpg')); ?>" alt="" style="width: 50px; height: 50px;">
                  <?php endif; ?>
                </td>
                <td><a href="<?php echo e(route('alumnos.show', $alumno)); ?>"> <?php echo e($alumno->nombre_apellido); ?></a>
                </td>
                <td><?php echo e($alumno->edad); ?></td>
                <td><?php echo e($alumno->telefono); ?></td>
                <td><?php echo e($alumno->direccion); ?></td>
                <td><a href="<?php echo e(route('alumnos.edit', $alumno)); ?>">Editatu</a></td>
                <td><a href="<?php echo e(route('alumnos.delete', $alumno)); ?>">Ezabatu</a></td>
                <td><a href="<?php echo e(route('alumnos.alumnos_cursos', $alumno)); ?>"  class="button-style">VIEW CURSOS</a></td>
                <td><a href="<?php echo e(route('alumnos.matrikulatu', $alumno)); ?>"  class="button-style">MATRIKULATU</a></td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <?php echo e($alumnos->links()); ?>

    <br>
    <br>
    <br>
    <br>
    <br>

   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/index.blade.php ENDPATH**/ ?>