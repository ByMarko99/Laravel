<?php $__env->startSection('title', 'IKASLE SORTU'); ?>

<?php $__env->startSection('content'); ?>
    <h1>NUEVO CURSO</h1>
    <form action="<?php echo e(route('cursos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="Nombre y Apellido"><br>
         <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <p class="akatsa"><strong><?php echo e($message); ?></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="nivel">Nivel</label>
        <select name="nivel" id="nivel">
            <option value="Básico">Básico</option>
            <option value="Cambridge">Cambridge</option>
            <option value="Lituano Avanzado">Lituano Avanzado</option>
        </select><br>
        <?php $__errorArgs = ['nivel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="akatsa"><strong><?php echo e($message); ?></strong></p>
     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="horasAcademicas">Horas Academicas</label>
        <input type="text" name="horasAcademicas"  placeholder="Horas Academicas" ><br>
     
        <label for="profesor">Profesor</label>
        <select name="profesor_id" id="profesor">
            <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($profesor->id); ?>"><?php echo e($profesor->nombreApellido); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
        <input type="submit" value="Bidali">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/cursos/create.blade.php ENDPATH**/ ?>