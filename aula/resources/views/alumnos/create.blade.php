@extends('layouts.plantilla')


@section('title', 'IKASLE SORTU')

@section('content')
    <form action="{{ route('alumnos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center justify-center min-h-screen bg-gray-200">
            <div class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
                <div class="m-4">
                    <x-input-label for="edad" :value="__('Edad')" />
                    <x-text-input id="edad" name="edad" type="text" class="mt-1 block w-full " :value="old('edad')"  autofocus autocomplete="edad" />
                    <x-input-error class="mt-2" :messages="$errors->get('edad')" />
                </div>

                <div class="m-4">
                    <x-input-label for="telefono" :value="__('Telefono')" />
                    <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full " :value="old('telefono')"  autofocus autocomplete="telefono" />
                    <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
                </div>

                <div class="m-4">
                    <x-input-label for="direccion" :value="__('Direccion')" />
                    <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full " :value="old('direccion')"  autofocus autocomplete="direccion" />
                    <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
                </div>

                <div class="m-4">
                    <x-input-label for="foto" :value="__('Argazkia')" />
                    <input id="foto" name="foto" type="file" class="mt-1 block w-full" accept="image/*" />
                    <x-input-error class="mt-2" :messages="$errors->get('foto')" />
                </div>
                <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" value="Bidali">
            </div>
        </div>
    </form>
@endsection
