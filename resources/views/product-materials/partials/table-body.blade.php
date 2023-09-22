@forelse ($rows as $data)
    <tr class="divide-x">
        <x-preline.table.td class="pl-6">{{ $data->code }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->name }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->in_stock }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->unit_measure }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->supplier->name }}</x-preline.table.td>
        <x-preline.table.td class="w-1 pr-6">
            <div class="space-x-2 flex items-center">
                <x-preline.link.update :url="route('dshb.bahan-baku.edit', ['bahan_baku' => $data->id])" />
                <x-preline.button.confirm-delete :url="route('dshb.bahan-baku.destroy', ['bahan_baku' => $data->id])" />
            </div>
        </x-preline.table.td>
    </tr>
@empty
@endforelse
