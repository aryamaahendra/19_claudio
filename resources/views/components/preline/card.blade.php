<div
    {{ $attributes->merge(['class' => 'flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]']) }}>
    {{ $slot }}
</div>
