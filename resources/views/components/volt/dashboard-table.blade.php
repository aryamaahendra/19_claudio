<?php
// {{-- blade-formatter-disable --}}
use App\Base\BaseTable;
use App\Models\ProductMaterial;
use App\Helpers\Column;
use Illuminate\Database\Eloquent\Builder;

new class extends BaseTable {
    public function query(): Builder
    {
        return ProductMaterial::query()->with(['supplier'])
            ->whereRaw('in_stock < maximumStock');
    }

    public function columns(): array
    {
        return [
            Column::make('code', 'Kode'), 
            Column::make('name', 'Nama Bahan Baku'), 
            Column::make('in_stock', 'Jumlah Stock'), 
            Column::make('unit_measure', 'Satuan'),
            Column::make('supplier.name', 'Supplier'),
            Column::make('-1', 'Restocked'),
        ];
    }
};
// {{-- blade-formatter-enable --}}
?>


<div>
    @php
        $rows = $this->data();
    @endphp

    <x-preline.stock-levels />


    <x-preline.table>
        @include('components.preline.table.base-columns')

        <x-preline.table.body>
            @include('dashboard.partials.table-body')
        </x-preline.table.body>
    </x-preline.table>

    @if ($rows->hasPages())
        <div class="px-6 mt-6">
            {{ $rows->onEachSide(1)->links('vendor.livewire.tailwind') }}
        </div>
    @endif
</div>
