<select
    {{ $attributes->merge([
        'class' =>
            'py-3 px-4 pr-9 bg-white border block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400',
    ]) }}>
    {{ $slot }}
</select>
