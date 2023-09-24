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
            Column::make('rataRataKebutuhan', 'Rata2 Kebutuhan'),
            Column::make('safetyStock', 'Safety Stock'),
            Column::make('minimumStock', 'Min Stock'),
            Column::make('maximumStock', 'Max Stock'),
            Column::make('Q', 'Q'),
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

    <div class="flex justify-between items-center px-6 mb-6">
        <div class="flex gap-2">
            @include('components.preline.table.base-filters')
        </div>
        @if (Role::admin())
            <form action="{{ route('dshb.minmax.process') }}" method="POST">
                @csrf
                <x-preline.button.primary type="submit">Process</x-preline.button.primary>
            </form>
        @endif
    </div>

    <div class="px-6 mb-6">
        <div class="flex items-center">
            <span class="w-2 h-2 inline-block bg-red-500 rounded-full mr-2"></span>
            <span class="text-gray-600 dark:text-gray-400">
                Persediaan berada di critical level.
            </span>
        </div>

        <div class="flex items-center">
            <span class="w-2 h-2 inline-block bg-yellow-500 rounded-full mr-2"></span>
            <span class="text-gray-600 dark:text-gray-400">
                Persediaan berada di Moderate level.
            </span>
        </div>

        <div class="flex items-center">
            <span class="w-2 h-2 inline-block bg-green-500 rounded-full mr-2"></span>
            <span class="text-gray-600 dark:text-gray-400">
                Persediaan berada di Safe level.
            </span>
        </div>
    </div>

    <x-preline.table>
        @include('components.preline.table.base-columns')

        <x-preline.table.body>
            @include('minmax.partials.table-body')
        </x-preline.table.body>
    </x-preline.table>

    @if ($rows->hasPages())
        <div class="px-6 mt-6">
            {{ $rows->onEachSide(1)->links('vendor.livewire.tailwind') }}
        </div>
    @endif
</div>
