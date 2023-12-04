<?php $__env->startSection('title', 'IKASLE SORTU'); ?>

<?php $__env->startSection('content'); ?>
    <h1>NUEVO ALUMNO</h1>
    <form action="<?php echo e(route('alumnos.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="nombre_apellido">Nombre y Apellido</label>
        <input type="text" name="nombre_apellido" value="<?php echo e(old('nombre_apellido')); ?>" placeholder="Nombre y Apellido"><br>
        <?php $__errorArgs = ['nombre_apellido'];
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
        <input type="text" name="edad" value="<?php echo e(old('edad')); ?>" placeholder="Edad" ><br>
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
        <input type="text" name="telefono" value="<?php echo e(old('telefono')); ?>" placeholder="Telefono" ><br>
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
        <input type="text" name="direccion" value="<?php echo e(old('direccion')); ?>" placeholder="Direccion" ><br>
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
     <label for="foto">Argazkia</label>
     <input type="file" name="foto" id="foto" value="<?php echo e(old('foto')); ?>" accept="image/*">
     <?php $__errorArgs = ['foto'];
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

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/alumnos/create.blade.php ENDPATH**/ ?>