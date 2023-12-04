<?php $__env->startSection('title', 'IKASLE ALDATU'); ?>

<?php $__env->startSection('content'); ?>
    <h1>IKASLEA ALDATU</h1>
    <form action="<?php echo e(route('alumnos.update', $alumno)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" value="<?php echo e(old('nombre', $alumno->nombre_apellido)); ?>"><br>
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
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="<?php echo e(old('edad', $alumno->edad)); ?>" ><br>
        <?php $__errorArgs = ['edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="akatsa"><strong><?php echo e($message); ?></strong></p>
     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="<?php echo e(old('telefono', $alumno->telefono)); ?>" ><br>
        <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="akatsa"><strong><?php echo e($message); ?></strong></p>
     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="<?php echo e(old('direccion', $alumno->direccion)); ?>" ><br>
        <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="akatsa"><strong><?php echo e($message); ?></strong></p>
     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit" value="Bidali">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/edit.blade.php ENDPATH**/ ?>