@props(['type' => 'info', 'id'])

{{ $id }}
{{-- --{{$attributes}}--
 --}}@php
    switch ($type) {

        case 'info':
            $class = 'bg-blue-100  border-blue-500 text-white-700 ';

            break;
        case 'warning':
            $class = 'bg-orange-100  border-orange-500 text-orange-700 ';

            break;
        case 'danger':
            $class = 'bg-red-100  border-red-500 text-white-700 ';
            break;
        case 'success':
            $class = 'bg-green-100  border-green-500 text-white-700 ';

            break;
        default:
            $class = 'bg-blue-100  border-blue-500 text-white-700 ';

            break;
    }
@endphp

<div class=" border-l-4  p-4 {{ $class }}" role="alert">
    <p class="font-bold">{{ $title }}</p>
    <p>{{ $slot }}</p>
</div>
