@extends('components.layouts.dashboard')

@section('content')
    <x-preline.card class="!px-0 !py-6 shadow overflow-hidden">
        <div class="flex justify-between items-center px-6 mb-6">
            <div class="flex gap-2">
            </div>

            <form action="{{ route('mape-proccess') }}" method="POST">
                @csrf

                <x-preline.button.primary type="submit">Re-Proses</x-preline.button.primary>
            </form>
        </div>

        <x-preline.table>
            <x-preline.table.head>
                <tr class="divide-x">
                    <x-preline.table.th rowspan="2" class="!pr-6 border">
                        <div class="flex items-center space-x-1">
                            <div class="">Material</div>
                        </div>
                    </x-preline.table.th>

                    <x-preline.table.th colspan="3" class="border">
                        <div class="flex justify-center items-center space-x-1">
                            <div class="">
                                APE
                            </div>
                        </div>
                    </x-preline.table.th>

                    <x-preline.table.th rowspan="2" class="!pr-6 border">
                        <div class="flex items-center space-x-1">
                            <div class="">MAPE</div>
                        </div>
                    </x-preline.table.th>

                    <x-preline.table.th class="!pl-6">
                        <div class="flex items-center space-x-1">
                            <div class=""></div>
                        </div>
                    </x-preline.table.th>
                </tr>

                <tr class="divide-x">
                    @forelse ($restocks as $restock)
                        <x-preline.table.th class="!pr-6">
                            <div class="flex items-center space-x-1">
                                <div class="">
                                    {{ Carbon\Carbon::create($restock->date)->translatedFormat('M Y') }}
                                </div>
                            </div>
                        </x-preline.table.th>
                    @empty
                    @endforelse

                    <x-preline.table.th class="!pl-6">
                        <div class="flex items-center space-x-1">
                            <div class=""></div>
                        </div>
                    </x-preline.table.th>
                </tr>
            </x-preline.table.head>

            <x-preline.table.body>
                @forelse ($materials as $material)
                    @if (isset($mape[$material->id]))
                        @php
                            $count = 0;
                            $sum = 0;
                        @endphp

                        <tr class="divide-x">
                            <x-preline.table.td
                                class="pl-6">{{ $material->name }}</x-preline.table.td>

                            @forelse ($restocks as $restock)
                                @php
                                    if (isset($mape[$material->id][$restock->id])) {
                                        $count++;
                                        $sum += $mape[$material->id][$restock->id];
                                    }
                                @endphp

                                <x-preline.table.td class="">
                                    {{ $mape[$material->id][$restock->id] ?? '-' }}%
                                </x-preline.table.td>
                            @empty
                            @endforelse

                            <x-preline.table.td class="">
                                {{ number_format($sum / $count, 2) }}%
                            </x-preline.table.td>

                            <x-preline.table.td class="w-1 pr-6">
                            </x-preline.table.td>
                        </tr>
                    @endif
                @empty
                @endforelse
            </x-preline.table.body>
        </x-preline.table>
    </x-preline.card>
@endsection
