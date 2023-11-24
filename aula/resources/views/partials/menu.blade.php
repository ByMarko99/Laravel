{{-- <nav id="menu">
    <ul>
        <li><a href="{{route ('alumnos.index')}}">Index</a></li>
{{--         <li><a href="{{route ('alumnos.show', 3 /*Placeholder bc takes argument*/)}}">Show</a></li>
         <li><a href="{{route ('alumnos.create')}}">Create</a></li>
       <li><a href="{{route ('cursos.index')}}">Cursos</a></li>
         <li><a href="{{route ('profesores.index')}}">Profesores</a></li>


    </ul>
</nav> --}}

<nav class="dropdownmenu">
    <ul>
      <li><a href="{{route ('alumnos.index')}}">Index</a></li>
      <li><a href="#">Ikasleak</a>
        <ul id="submenu">
          <li><a href="{{route ('alumnos.index')}}">Ikasleen zerrenda</a></li>
          <li><a href="{{route ('alumnos.create')}}">Ikaslea sortu</a></li>
        </ul>
      </li>
      <li><a href="{{route ('cursos.index')}}">Ikastaroak</a>
        <ul id="submenu">
          <li><a href="{{route ('cursos.index')}}">Ikastaroen zerrenda</a></li>
          <li><a href="{{route ('cursos.create')}}">Ikastaroa sortu</a></li>
        </ul>
      </li>
      <li><a href="{{route ('profesores.index')}}">Irakasleak</a>
        <ul id="submenu">
          <li><a href="{{route ('profesores.index')}}">Irakasleen zerrenda</a></li>
          <li><a href="{{route ('profesores.create')}}">Irakaslea sortu</a></li>
        </ul>
      </li>
    </ul>
  </nav>
