<?php
// {{-- blade-formatter-disable --}}
use App\Base\BaseTable;
use App\Models\ProductMaterial;
use App\Helpers\Column;
use Illuminate\Database\Eloquent\Builder;

new class extends BaseTable {
    public function query(): Builder
    {
        return ProductMaterial::query()->with(['supplier']);
    }

    public function columns(): array
    {
        return [
            Column::make('code', 'Kode'), 
            Column::make('name', 'Nama'), 
            Column::make('in_stock', 'Stock'), 
            Column::make('unit_measure', 'Satuan'),
            Column::make('supplier.name', 'Supplier'),
            Column::make('-1', 'Aksi')
        ];
    }
};
// {{-- blade-formatter-enable --}}
?>


<div>
    @php
        $rows = $this->data();
    @endphp

    <div class="flex justify-between items-center px-6 mb-6">
        <div class="flex gap-2">
            @include('components.preline.table.base-filters')
        </div>

        <div class="">
            <x-preline.link.primary
                href="{{ route('dshb.bahan-baku.create') }}">Tambah</x-preline.link.primary>
        </div>
    </div>

    <x-preline.table>
        @include('components.preline.table.base-columns')

        <x-preline.table.body>
            @include('product-materials.partials.table-body')
        </x-preline.table.body>
    </x-preline.table>

    @if ($rows->hasPages())
        <div class="px-6 mt-6">
            {{ $rows->onEachSide(1)->links('vendor.livewire.tailwind') }}
        </div>
    @endif
</div>
