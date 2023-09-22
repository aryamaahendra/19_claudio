@props(['label' => 'dropdown', 'active' => false])
@php
    $class = 'text-gray-800 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white';
    if ($active) {
        $class = 'text-blue-600 dark:text-white dark:hover:text-white';
    }
    
@endphp

<div
    class="hs-dropdown [--placement:right] [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
    <button type="button"
        class="flex gap-1 items-center text-sm sm:border-b-2 border-b-transparent py-2 sm:py-3.5 font-medium {{ $class }}">
        <x-icons.apps class="w-5 h-5" />
        {{ $label }}
        <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                stroke="currentColor" stroke-width="2" stroke-linecap="round">
            </path>
        </svg>
    </button>

    <div
        class="hs-dropdown-menu sm:!right-0 !mt-2 transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-44 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
        {{ $slot }}
    </div>
</div>
