@extends('layouts.plantilla')


@section('title', 'IKASLEEN CURSOS')

@section('content')

    <table>

        <tr>

            <th>Argazkia</th>
            <th>Alumnos en curso</th>
            <th>Edad</th>

            <th>&nbsp;</th>

        </tr>
        @foreach ($curso->alumnos as $alumno)
            <tr>
                <td>
                    <div style="display: flex; justify-content: center;">
                    @if($alumno->foto)
                    <img src="{{ url($alumno->foto) }}" alt="" style="width: 100px; height: 50px;">
                    @else
                    <img src="{{ url('storage/alumnos/default.jpg') }}" alt="" style="width: 100px; height: 50px; text-align:center;">
                  @endif
                </div>

                </td>
                <td>{{ $alumno->nombre_apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>
                    <a href="{{ route('alumnos.index') }}" class="button-style">Index</a>
                </td>
            </tr>
        @endforeach

    </table>

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
