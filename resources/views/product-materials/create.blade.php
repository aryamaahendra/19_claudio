@extends('components.layouts.dashboard')

@section('content')
    <form action="{{ route('dshb.bahan-baku.store') }}" method="POST">
        @csrf

        <x-preline.card class="shadow overflow-hidden !w-full !max-w-lg !mx-auto">
            <div class="w-full mb-4">
                <x-preline.form.label>Kode</x-preline.form.label>
                <x-preline.form.input type="text" name="code" placeholder="Code ..."
                    value="{{ old('code') }}" />
                @error('code')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="w-full mb-4">
                <x-preline.form.label>Nama</x-preline.form.label>
                <x-preline.form.input type="text" name="name" placeholder="Nama ..."
                    value="{{ old('name') }}" />
                @error('name')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="w-full mb-4">
                <x-preline.form.label>Suplier</x-preline.form.label>

                <x-preline.form.select x-data="setupChoice" name="supplier_id">
                    <option selected value="">Supplier ... </option>
                    @forelse ($suppliers as $supplier)
                        @php
                            $isSelected = old('supplier_id') == $supplier->id;
                        @endphp

                        <option @selected((bool) $isSelected) value="{{ $supplier->id }}">
                            {{ Str::of($supplier->name)->title() }}
                        </option>
                    @empty
                    @endforelse
                </x-preline.form.select>

                @error('supplier_id')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="w-full mb-4">
                <x-preline.form.label>Satuan</x-preline.form.label>

                <x-preline.form.select name="unit_measure">
                    @forelse (UnitMeasure::all() as $measure)
                        <option @selected(old('unit_measure') == $measure) value="{{ $measure }}">
                            {{ Str::of($measure)->title() }}
                        </option>
                    @empty
                    @endforelse
                </x-preline.form.select>

                @error('unit_measure')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="flex justify-end">
                <x-preline.button.primary type="submit">
                    Simpan
                </x-preline.button.primary>
            </div>

        </x-preline.card>
    </form>
@endsection
