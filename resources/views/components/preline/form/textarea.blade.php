<textarea
    {{ $attributes->merge([
        'class' => 'py-3 px-4 border block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500
                dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400',
    ]) }}
    rows="3">{{ $slot }}</textarea>
