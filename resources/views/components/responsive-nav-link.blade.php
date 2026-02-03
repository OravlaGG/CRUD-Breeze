@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#D32430] text-start text-base font-medium text-[#582D30] bg-[#FFEFF4] focus:outline-none focus:bg-[#FFEFF4] transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-[#F8D5B5] hover:text-[#FFEFF4] hover:bg-[#582D30] hover:border-[#BBBCAC] focus:outline-none focus:bg-[#582D30] focus:text-[#FFEFF4] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
