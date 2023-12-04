@extends('layouts.plantilla')


@section('title', 'IKASLEEN CURSOS')

@section('content')
<form action="{{ route('alumnos.matrikulatu_store', $alumno) }}" method="POST">
    @csrf
    @method('PUT')
    <table>

        <tr>

            <th>Cursos</th>


        </tr>
        @foreach ($cursos as $curso)
            <tr>


                    <td>
                        <input type="checkbox" name="cursos[]" value="{{$curso->id}}" @if ($alumno->cursos->contains($curso)) checked @endif>
                        <label>{{ $curso->nombre }}</label>
                    </td>


                {{--  @if ($curso->nombre == $alumno->$curso->nombre)
            <td style="text-decoration: line-through;">{{ $curso->nombre }}</td>
            @else
            <td>{{ $curso->nombre }}</td>

            @endif --}}

            </tr>
        @endforeach

    </table>
    <button type="submit" class="button-style" style="background-color: black">Matrikulatu</button>

</form>



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
