<?php
// {{-- blade-formatter-disable --}}

use function Livewire\Volt\{state, computed, mount};
use App\Models\ProductMaterial;


state([
    'count' => null, 
    'selected_ids' => collect([]),
    'quantity' => [],
    'product' => null,
]); 

mount(function($product = null) {
    if($product) {
        $this->product = $product;

        $product->load('materials');
        foreach ($product->materials as $item) {
            $this->selected_ids->push(ProductMaterial::find($item->id));
            $this->quantity[$item->id] = $item->pivot->material_used;
        }
    };

    if (old('materials') && count(old('materials')) > 0) {
        foreach (old('materials') as $id) {
            $is = true;
            if ($product) {
                $key = $product->materials->search(
                    fn($item, $key) => $item->id == $id
                );

                if ($key !== false) {
                    $is = false;
                }
            }

            if($is) $this->selected_ids->push(ProductMaterial::find($id));
        }
    }
});

$increment = function() {
    $key = $this->selected_ids->search(fn($item,$key) => $item->id == $this->count['value']);

    if ($key !== false) {
        return;
    }

    $this->selected_ids->push(ProductMaterial::find($this->count['value']));   
};

$remove = function($id) {
    $key = $this->selected_ids->search(fn($item,$key) => $item->id == $id);

    if ($key !== false) {
        unset($this->selected_ids[$key]);
    }
};

$data = fn() => ProductMaterial::all(['id', 'name']);

$selected = computed(fn() => $this->selected_ids);
// {{-- blade-formatter-enable --}}
?>

<div>
    <div class="">
        <div wire:ignore class="mb-6">
            <x-preline.form.label>Bahan Baku</x-preline.form.label>
            <x-preline.form.select wire:change="increment" wire:model="count" x-data="setupChoice"
                name="supplier_id">
                <option selected disabled value="">Bahan Baku ... </option>
                @forelse ($this->data() as $model)
                    <option value="{{ $model->id }}">
                        {{ Str::of($model->name)->title() }}
                    </option>
                @empty
                @endforelse
            </x-preline.form.select>
        </div>
    </div>

    <x-preline.table>
        <x-preline.table.head>
            <tr class="divide-x">
                <x-preline.table.th class="">Nama Bahan Baku</x-preline.table.th>
                <x-preline.table.th class="w-1">Satuan</x-preline.table.th>
                <x-preline.table.th class="w-1">Qty</x-preline.table.th>
                <x-preline.table.th class="w-1"></x-preline.table.th>
            </tr>
        </x-preline.table.head>

        <x-preline.table.body>
            @forelse ($this->selected as $data)
                <tr x-data="restocked" wire:ignore
                    wire:key="product-material-{{ $data->id }}" class="divide-x">
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
