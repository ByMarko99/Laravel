<?php $__env->startSection('title', 'IKASLE SORTU'); ?>

<?php $__env->startSection('content'); ?>
    <h1>NUEVO PROFESOR</h1>
    <form action="<?php echo e(route('profesores.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombreApellido" placeholder="Nombre y Apellido"><br>
     
        <label for="profesion">Profesion</label>
        <select name="profesion" id="profesor">
            <?php $__currentLoopData = $profesiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($profesion->profesion); ?>"><?php echo e($profesion->profesion); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
      
        <label for="gradoAcademico">Grado Academico</label>
        <input type="text" name="gradoAcademico"  placeholder="Grado Academico" ><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono"  placeholder="Telefono" ><br>
     

      
        <input type="submit" value="Bidali">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/profesores/create.blade.php ENDPATH**/ ?>