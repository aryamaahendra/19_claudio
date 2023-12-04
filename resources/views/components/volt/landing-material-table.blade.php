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
            Column::make('name', 'Nama Bahan Baku'), 
            Column::make('in_stock', 'Jumlah Stock'), 
            Column::make('unit_measure', 'Satuan'),
            Column::make('supplier.name', 'Supplier')
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
    </div>

    <x-preline.stock-levels />

    <x-preline.table>
        @include('components.preline.table.base-columns')

        <x-preline.table.body>
            @forelse ($rows as $data)
                <tr class="divide-x">
                    <x-preline.table.td class="pl-6">{{ $data->code }}</x-preline.table.td>
                    <x-preline.table.td>{{ $data->name }}</x-preline.table.td>
                    <x-preline.table.td>
                        @if ((int) $data->in_stock < (int) $data->minimumStock)
                            <div class="inline-flex items-center">
                                <span
                                    class="w-2 h-2 inline-block bg-red-500 rounded-full mr-2"></span>
                                <span
                                    class="text-gray-600 dark:text-gray-400">{{ $data->in_stock }}</span>
                            </div>
                        @elseif ((int) $data->in_stock < (int) $data->maximumStock)
                            <div class="inline-flex items-center">
                                <span
                                    class="w-2 h-2 inline-block bg-yellow-500 rounded-full mr-2"></span>
                                <span
                                    class="text-gray-600 dark:text-gray-400">{{ $data->in_stock }}</span>
                            </div>
                        @else
                            <div class="inline-flex items-center">
                                <span
                                    class="w-2 h-2 inline-block bg-green-500 rounded-full mr-2"></span>
                                <span
                                    class="text-gray-600 dark:text-gray-400">{{ $data->in_stock }}</span>
                            </div>
                        @endif
                    </x-preline.table.td>
                    <x-preline.table.td>{{ $data->unit_measure }}</x-preline.table.td>
                    <x-preline.table.td class="w-1 pr-6">
                        {{ $data->supplier->name }}
                    </x-preline.table.td>
                </tr>
            @empty
            @endforelse
        </x-preline.table.body>
    </x-preline.table>

    @if ($rows->hasPages())
        <div class="px-6 mt-6">
            {{ $rows->onEachSide(1)->links('vendor.livewire.tailwind') }}
        </div>
    @endif
</div>
