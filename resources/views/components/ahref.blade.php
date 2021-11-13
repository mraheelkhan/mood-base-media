
@php
$classes = "inline-flex text-white bg-gray-400 border-0 py-1 px-6 focus:outline-none hover:bg-gray-500 rounded text-md";
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
