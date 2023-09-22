@props(['message' => null])

<p {{ $attributes->merge(['class' => 'text-xs text-red-600 font-light mt-2']) }}>
    {{ $message ?? $slot }}
</p>
