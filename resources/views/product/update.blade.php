@extends('components.layouts.dashboard')

@section('content')
    <form action="{{ route('dshb.produk.update', ['produk' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <x-preline.card class="shadow !w-full !max-w-lg !mx-auto">
            <x-preline.tabs>
                <x-preline.tabs.button class="active" type="button" id="segment-item-1"
                    data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                    Detail
                </x-preline.tabs.button>
                <x-preline.tabs.button class="" type="button" id="segment-item-2"
                    data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                    Bahan Baku
                </x-preline.tabs.button>
                <x-preline.tabs.button class="!bg-blue-500 !text-white hover:!bg-blue-600 "
                    type="submit">
                    Simpan
                </x-preline.tabs.button>
            </x-preline.tabs>

            <div class="mt-3">
                <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                    <div class="w-full mb-4">
                        <x-preline.form.label>Kode</x-preline.form.label>
                        <x-preline.form.input type="text" name="code" placeholder="Code ..."
                            value="{{ old('code') ?? $product->code }}" />
                        @error('code')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <x-preline.form.label>Nama</x-preline.form.label>
                        <x-preline.form.input type="text" name="name" placeholder="Nama ..."
                            value="{{ old('name') ?? $product->name }}" />
                        @error('name')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <x-preline.form.label>Satuan</x-preline.form.label>

                        <x-preline.form.select name="unit_measure">
                            @forelse (UnitMeasure::all() as $measure)
                                <option @selected(old('unit_measure') ?? $product->unit_measure == $measure) value="{{ $measure }}">
                                    {{ Str::of($measure)->title() }}
                                </option>
                            @empty
                            @endforelse
                        </x-preline.form.select>

                        @error('unit_measure')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>
                </div>

                <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                    @livewire('select-material', compact(['product']))
                </div>
            </div>
        </x-preline.card>
    </form>
@endsection
