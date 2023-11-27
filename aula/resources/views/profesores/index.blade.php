@extends('layouts.plantilla')


@section('title', 'PROFESORES ZERRENDA')

@section('content')

    <table>

        <tr>
            <th>Nombre Apellido</th>
            <th>Profesion</th>
            <th>Grado Academico</th>
            <th>Telefono</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>

        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td><a {{-- href="{{ route('alumnos.show', $alumno) }}" --}}> {{ $profesor->nombreApellido }}</a>
                </td>
                <td>{{ $profesor->profesion }}</td>
                <td>{{ $profesor->gradoAcademico }}</td>
                <td>{{ $profesor->telefono }}</td>
                <td><a {{-- href="{{ route('alumnos.edit', $alumno) }}" --}}>Editatu</a></td>
                <form action="{{ route('profesores.destroy', $profesor) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <td><button type="submit">Ezabatu</button></td>
                </form>
            </tr>
        @endforeach

    </table>

{{--     {{$cursos->links()}}
 --}}   {{--  <h1>IKASLE ZERRENDA</h1>
    <ol>
        @foreach ($alumnos as $alumno)
            <li> <a href="{{ route('alumnos.show', $alumno) }}"> {{ $alumno->nombre_apellido }} - {{ $alumno->edad }} </a>
            </li>
            <br>
            <a href="{{ route('alumnos.edit', $alumno) }}"
                style="color: #4A4A4A; text-decoration: none; background-color: #D9D9D9; padding: 10px 20px; border-radius: 5px; font-size: 14px;">Editatu</a>
            <br>
            <br>
            <a href="{{ route('alumnos.delete', $alumno) }}"
                style="color: #d42828; text-decoration: none; background-color: #D9D9D9; padding: 10px 20px; border-radius: 5px; font-size: 14px;">Ezabatu</a>
        @endforeach
    </ol>
    <br> --}}

@endsection
