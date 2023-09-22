@forelse ($rows as $data)
    <tr class="divide-x">
        <x-preline.table.td class="pl-6">{{ $data->code }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->name }}</x-preline.table.td>
        <x-preline.table.td class="w-1">
            @if ((int) $data->in_stock < (int) $data->minimumStock)
                <div class="inline-flex items-center">
                    <span class="w-2 h-2 inline-block bg-red-500 rounded-full mr-2"></span>
                    <span class="text-gray-600 dark:text-gray-400">
                        {{ $data->in_stock }} {{ $data->unit_measure }}
                    </span>
                </div>
            @elseif ((int) $data->in_stock < (int) $data->maximumStock)
                <div class="inline-flex items-center">
                    <span class="w-2 h-2 inline-block bg-yellow-500 rounded-full mr-2"></span>
                    <span class="text-gray-600 dark:text-gray-400">
                        {{ $data->in_stock }} {{ $data->unit_measure }}
                    </span>
                </div>
            @else
                <div class="inline-flex items-center">
                    <span class="w-2 h-2 inline-block bg-green-500 rounded-full mr-2"></span>
                    <span class="text-gray-600 dark:text-gray-400">
                        {{ $data->in_stock }} {{ $data->unit_measure }}
                    </span>
                </div>
            @endif
        </x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->rataRataKebutuhan }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->safetyStock }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->minimumStock }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->maximumStock }}</x-preline.table.td>
        <x-preline.table.td class="w-1">{{ $data->Q }}</x-preline.table.td>
        <x-preline.table.td class="w-1 pr-6">
            @php
                $restocked = (int) $data->maximumStock - (int) $data->in_stock;
                $restocked = $restocked < 0 ? 0 : $restocked;
            @endphp
            <x-preline.badge @class([
                'bg-red-500 text-white' => (int) $restocked > 0,
                'bg-green-500 text-white' => (int) $restocked <= 0,
            ])>
                Restocked: {{ $restocked }} {{ $data->unit_measure }}
            </x-preline.badge>
        </x-preline.table.td>
    </tr>
@empty
@endforelse
