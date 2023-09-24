@forelse ($rows as $data)
    <tr class="divide-x">
        <x-preline.table.td class="pl-6">{{ $data->code }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->name }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->unit_measure }}</x-preline.table.td>
        <x-preline.table.td class="w-1 pr-6">
            @if (Role::admin())
                <div class="space-x-2 flex items-center">
                    <x-preline.link.update :url="route('dshb.produk.edit', ['produk' => $data->id])" />
                    <x-preline.button.confirm-delete :url="route('dshb.produk.destroy', ['produk' => $data->id])" />
                </div>
            @endif
        </x-preline.table.td>
    </tr>
@empty
@endforelse
