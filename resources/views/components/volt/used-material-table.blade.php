<?php
// {{-- blade-formatter-disable --}}
use App\Base\BaseTable;
use App\Models\UsedMaterial;
use App\Helpers\Column;
use Illuminate\Database\Eloquent\Builder;

new class extends BaseTable {

    public $sortBy = 'date';

    public function query(): Builder
    {
        return UsedMaterial::query()->with(['materials']);
    }

    public function columns(): array
    {
        return [
            Column::make('date', 'Tanggal Material Terpakai'), 
            Column::make('code', 'Code Material Terpakai'),
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
                href="{{ route('dshb.material-terpakai.create') }}">Tambah</x-preline.link.primary>
        </div>
    </div>

    <x-preline.table>
        @include('components.preline.table.base-columns')

        <x-preline.table.body>
            @include('used-material.partials.table-body')
        </x-preline.table.body>
    </x-preline.table>

    @if ($rows->hasPages())
        <div class="px-6 mt-6">
            {{ $rows->onEachSide(1)->links('vendor.livewire.tailwind') }}
        </div>
    @endif
</div>
