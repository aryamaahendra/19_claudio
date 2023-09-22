<div {{ $attributes->merge(['class' => 'bg-red-500 text-sm text-white rounded-md p-4']) }}
    role="alert">
    <span class="font-bold">Danger!</span> {{ $slot }}
</div>
