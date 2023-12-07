<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
            {{--             <x-alert/>
 --}}

            {{--  <x-alert title="1 titulo">
                1 forma
            </x-alert>
            <br/>

            <x-alert>
                <x-slot name="title">
                    2 titulo
                </x-slot>
                2 forma
            </x-alert> --}}

            @php
            $tipo = "success";
            @endphp

            <br/>
            <x-alert2>
                <x-slot name="title">
                    2 titulo
                </x-slot>
                2 forma
            </x-alert2>
            <br/>

            <x-alert :type="$tipo" id="alert">
                <x-slot name="title">
                    2 titulo
                </x-slot>
                2 forma
            </x-alert>
        </div>
    </div>
</x-app-layout>
