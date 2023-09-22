@props(['active' => false])
@php
    $class = 'text-gray-800 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white';
    if ($active) {
        $class = 'text-blue-600 dark:text-white dark:hover:text-white';
    }
    
@endphp

<a
    {{ $attributes->merge(['class' => 'font-medium flex gap-1 items-center text-sm sm:border-b-2 border-b-transparent py-2 sm:py-3.5 ' . $class]) }}>
    {{ $slot }}
</a>
