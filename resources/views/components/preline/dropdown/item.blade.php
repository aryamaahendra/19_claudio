@props(['active' => false])
@php
    $class = 'text-gray-800 dark:text-gray-400 focus:ring-2 focus:ring-blue-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300';

    if ($active) {
        $class = 'text-blue-600 dark:text-white dark:hover:text-white';
    }

@endphp

<a
    {{ $attributes->merge(['class' => 'flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm ' . $class]) }}>
    {{ $slot }}
</a>
