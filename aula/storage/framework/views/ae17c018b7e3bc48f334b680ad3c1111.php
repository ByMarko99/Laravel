

<nav class="dropdownmenu">
    <ul>
      <li><a href="<?php echo e(route ('alumnos.index')); ?>">Index</a></li>
      <li><a href="#">Ikasleak</a>
        <ul id="submenu">
          <li><a href="<?php echo e(route ('alumnos.index')); ?>">Ikasleen zerrenda</a></li>
          <li><a href="<?php echo e(route ('alumnos.create')); ?>">Ikaslea sortu</a></li>
        </ul>
      </li>
      <li><a href="<?php echo e(route ('cursos.index')); ?>">Ikastaroak</a>
        <ul id="submenu">
          <li><a href="<?php echo e(route ('cursos.index')); ?>">Ikastaroen zerrenda</a></li>
          <li><a href="<?php echo e(route ('cursos.create')); ?>">Ikastaroa sortu</a></li>
        </ul>
      </li>
      <li><a href="<?php echo e(route ('profesores.index')); ?>">Irakasleak</a>
        <ul id="submenu">
          <li><a href="<?php echo e(route ('profesores.index')); ?>">Irakasleen zerrenda</a></li>
          <li><a href="<?php echo e(route ('profesores.create')); ?>">Irakaslea sortu</a></li>
        </ul>
      </li>
    </ul>
  </nav>
<?php /**PATH C:\xampp\htdocs\laravel\aula\resources\views/partials/menu.blade.php ENDPATH**/ ?>