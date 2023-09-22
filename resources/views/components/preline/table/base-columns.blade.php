@php
    $columns = $this->columns();
    $first = array_key_first($columns);
    $last = array_key_last($columns);
@endphp

<x-preline.table.head>
    <tr class="divide-x">
        @forelse ($columns as $key => $column)
            @if ($column->key == '-1')
                <x-preline.table.th @class(['', '!pl-6' => $key == $first, '!pr-6' => $key == $last])>
                    <div class="flex items-center space-x-1">
                        <div class="">{{ $column->label }}</div>
                    </div>
                </x-preline.table.th>
            @else
                <x-preline.table.th wire:click="sort('{{ $column->key }}')"
                    @class(['cursor-pointer', '!pl-6' => $key == $first, '!pr-6' => $key == $last])>
                    <div class="flex items-center space-x-1">
                        <div class="">{{ $column->label }}</div>

                        @if ($sortBy === $column->key)
                            @if ($sortDirection === 'asc')
                                <x-icons.arrow-down class="h-3 w-3 fill-current" />
                            @else
                                <x-icons.arrow-up class="h-3 w-3 fill-current" />
                            @endif
                        @endif
                    </div>
                </x-preline.table.th>
            @endif
        @empty
        @endforelse
    </tr>
</x-preline.table.head>
