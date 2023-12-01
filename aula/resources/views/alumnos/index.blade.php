@extends('layouts.plantilla')


@section('title', 'IKASLE ZERRENDA')

@section('content')

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


        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>
                    @if($alumno->foto)
                    <img src="{{ url($alumno->foto) }}" alt="" style="width: 50px; height: 50px;">
                    @else
                    <img src="{{ url('storage/alumnos/default.jpg') }}" alt="" style="width: 50px; height: 50px;">
                  @endif
                </td>
                <td><a href="{{ route('alumnos.show', $alumno) }}"> {{ $alumno->nombre_apellido }}</a>
                </td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td><a href="{{ route('alumnos.edit', $alumno) }}">Editatu</a></td>
                <td><a href="{{ route('alumnos.delete', $alumno) }}">Ezabatu</a></td>
                <td><a href="{{ route('alumnos.alumnos_cursos', $alumno) }}"  class="button-style">VIEW CURSOS</a></td>

            </tr>
        @endforeach

    </table>

    {{$alumnos->links()}}
    <br>
    <br>
    <br>
    <br>
    <br>

   {{--  <h1>IKASLE ZERRENDA</h1>
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
