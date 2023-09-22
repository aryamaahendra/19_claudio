<button
    {{ $attributes->merge(['class' => 'hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium rounded-md hover:hover:text-blue-600 dark:text-gray-400 dark:hover:text-white']) }}>
    {{ $slot }}
</button>
