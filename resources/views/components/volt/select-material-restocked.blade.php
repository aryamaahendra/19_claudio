<?php
// {{-- blade-formatter-disable --}}

use function Livewire\Volt\{state, computed, mount};
use App\Models\ProductMaterial;


state([
    'count' => null, 
    'selected_ids' => old('materials') ?? [],
    'quantity' => [],
    'unit_price' => [],
    'total_price' => [],
    'restocked' => null,
]); 

mount(function($restocked = null) {
    if(!$restocked) return;
    $this->restocked = $restocked;

    $restocked->load('materials');
    foreach ($restocked->materials as $item) {
        array_push($this->selected_ids, $item->id);
        $this->quantity[$item->id] = $item->pivot->quantity;
        $this->unit_price[$item->id] = $item->pivot->unit_price;
        $this->total_price[$item->id] = (int)$item->pivot->quantity * (int)$item->pivot->unit_price;
    }
});

$increment = fn () => array_push($this->selected_ids, $this->count['value']);
$remove = function($id) {
    $key = array_search($id, $this->selected_ids);
    if ($key !== false) {
        unset($this->selected_ids[$key]);
    }
};

$data = fn() => ProductMaterial::all(['id', 'name']);

$selected = computed(
    fn() => ProductMaterial::select(
        ['id', 'unit_measure', 'name']
    )->whereIn('id', $this->selected_ids)->get()
);
// {{-- blade-formatter-enable --}}
?>

<div>
    <div class="grid grid-cols-2 gap-4">
        <div wire:ignore class="w-full mb-4">
            @php
                $date = null;
                if ($this->restocked) {
                    $date = Carbon\Carbon::create($this->restocked->date)->format('Y-m-d');
                }
            @endphp
            <x-preline.form.label>Tanggal</x-preline.form.label>
            <x-preline.form.input type="date" name="date"
                value="{{ old('date') ?? ($date ?? null) }}" />
            @error('date')
                <x-preline.form.error-message :message="$message" />
            @enderror
        </div>

        <div wire:ignore class="mb-6">
            <x-preline.form.label>Bahan Baku</x-preline.form.label>
            <x-preline.form.select wire:change="increment" wire:model="count" x-data="setupChoice"
                name="supplier_id">
                <option selected disabled value="">Bahan Baku ... </option>
                @forelse ($this->data() as $supplier)
                    <option value="{{ $supplier->id }}">
                        {{ Str::of($supplier->name)->title() }}
                    </option>
                @empty
                @endforelse
            </x-preline.form.select>
        </div>
    </div>

    <x-preline.table>
        <x-preline.table.head>
            <tr class="divide-x">
                <x-preline.table.th class="">Nama Bahan</x-preline.table.th>
                <x-preline.table.th class="w-1">Satuan</x-preline.table.th>
                <x-preline.table.th class="w-1">Qty</x-preline.table.th>
                <x-preline.table.th class="w-1">Harga</x-preline.table.th>
                <x-preline.table.th class="w-1">Total</x-preline.table.th>
                <x-preline.table.th class="w-1"></x-preline.table.th>
            </tr>
        </x-preline.table.head>

        <x-preline.table.body>
            @forelse ($this->selected as $data)
                <tr x-data="restocked" class="divide-x">
                    <input type="hidden" name="materials[]" value="{{ $data->id }}">

                    <x-preline.table.td class="">
                        {{ $data->name }}
                    </x-preline.table.td>

                    <x-preline.table.td class="capitalize">
                        {{ $data->unit_measure }}
                    </x-preline.table.td>

                    <x-preline.table.td class="">
                        <x-preline.form.input x-on:keyup="change" x-on:change="change"
                            x-ref="quantity" type="text" class="!py-2 !px-3 !w-16"
                            name="quantity[{{ $data->id }}]" placeholder="0"
                            value="{{ old('quantity')[$data->id] ?? ($this->quantity[$data->id] ?? 0) }}" />
                    </x-preline.table.td>

                    <x-preline.table.td class="">
                        <x-preline.form.input x-on:keyup="change" x-on:change="change"
                            x-ref="price" type="text" class="!py-2 !px-3 !w-24"
                            name="unit_price[{{ $data->id }}]" placeholder="0"
                            value="{{ old('unit_price')[$data->id] ?? ($this->unit_price[$data->id] ?? 0) }}" />
                    </x-preline.table.td>

                    <x-preline.table.td x-ref="total">
                        {{ 0 }}
                    </x-preline.table.td>

                    <x-preline.table.td class="">
                        <button wire:click="remove({{ $data->id }})" type="button"
                            class="text-red-500 hover:text-red-700">
                            Delete
                        </button>
                    </x-preline.table.td>
                </tr>
            @empty
            @endforelse
        </x-preline.table.body>
    </x-preline.table>
</div>
