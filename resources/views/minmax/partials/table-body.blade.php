@forelse ($rows as $data)
    <tr class="divide-x">
        <x-preline.table.td class="pl-6">{{ $data->code }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->name }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->in_stock }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->rataRataKebutuhan }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->safetyStock }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->minimumStock }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->maximumStock }}</x-preline.table.td>
        <x-preline.table.td class="w-1 pr-6">
            {{ $data->Q }}
        </x-preline.table.td>
    </tr>
@empty
@endforelse
