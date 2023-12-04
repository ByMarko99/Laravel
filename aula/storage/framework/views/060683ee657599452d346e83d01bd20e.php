<?php $__env->startSection('title', 'PROFESORES ZERRENDA'); ?>

<?php $__env->startSection('content'); ?>

    <h1>PROFESORES ZERRENDA</h1>
<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>

<?php endif; ?>
    <table>

        <tr>
            <th>Nombre Apellido</th>
            <th>Profesion</th>
            <th>Grado Academico</th>
            <th>Telefono</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>

        </tr>
        <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a > <?php echo e($profesor->nombreApellido); ?></a>
                </td>
                <td><?php echo e($profesor->profesion); ?></td>
                <td><?php echo e($profesor->gradoAcademico); ?></td>
                <td><?php echo e($profesor->telefono); ?></td>
                <td><a >Editatu</a></td>
                <form action="<?php echo e(route('profesores.destroy', $profesor)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                <td><button type="submit">Ezabatu</button></td>
                </form>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/profesores/index.blade.php ENDPATH**/ ?>