@extends('components.layouts.dashboard')

@section('content')
    <form action="{{ route('dshb.supplier.update', ['supplier' => $supplier->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <x-preline.card class="shadow overflow-hidden !w-full !max-w-4xl !mx-auto">
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="">
                    <div class="w-full mb-4">
                        <x-preline.form.label>Kode</x-preline.form.label>
                        <x-preline.form.input type="text" name="code" placeholder="Code ..."
                            value="{{ old('code') ?? $supplier->code }}" />
                        @error('code')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <x-preline.form.label>Nama</x-preline.form.label>
                        <x-preline.form.input type="text" name="name" placeholder="Nama ..."
                            value="{{ old('name') ?? $supplier->name }}" />
                        @error('name')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <x-preline.form.label>Email</x-preline.form.label>
                        <x-preline.form.input type="email" name="email" placeholder="Email ..."
                            value="{{ old('email') ?? $supplier->email }}" />
                        @error('email')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="w-full mb-4">
                        <x-preline.form.label>No HP</x-preline.form.label>
                        <x-preline.form.input type="text" name="phone" placeholder="No HP ..."
                            value="{{ old('phone') ?? $supplier->phone }}" />
                        @error('phone')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <x-preline.form.label>Lead Time</x-preline.form.label>
                        <x-preline.form.input type="number" name="lead_time" placeholder="7"
                            value="{{ old('lead_time') ?? $supplier->lead_time }}" />
                        @error('lead_time')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>

                    <div class="w-full mb-4">
                        <x-preline.form.label>Alamat</x-preline.form.label>
                        <x-preline.form.textarea type="text" name="address"
                            placeholder="Alamat ...">{{ old('address') ?? $supplier->address }}</x-preline.form.textarea>
                        @error('address')
                            <x-preline.form.error-message :message="$message" />
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <x-preline.button.primary type="submit">
                    Simpan
                </x-preline.button.primary>
            </div>

        </x-preline.card>
    </form>
@endsection
