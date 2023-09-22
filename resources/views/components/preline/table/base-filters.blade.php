<x-preline.form.checkbox wire:model.live="perPage">
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="50">50</option>
</x-preline.form.checkbox>

<x-preline.form.input wire:model.live.debounce="search" placeholder="Cari ..." />
