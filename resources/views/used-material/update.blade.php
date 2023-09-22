@extends('components.layouts.dashboard')

@section('content')
    <form
        action="{{ route('dshb.material-terpakai.update', ['material_terpakai' => $usedMaterial->id]) }}"
        method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <x-preline.alert.danger class="!w-full !max-w-4xl mx-auto mb-6">
                {{ $errors->all()[0] }}
            </x-preline.alert.danger>
        @endif

        <x-preline.card class="shadow !w-full !max-w-4xl !mx-auto">
            <div class="mb-6">
                @livewire('select-material-used-material', compact('usedMaterial'))
            </div>

            <div class="flex justify-end">
                <x-preline.button.primary type="submit">
                    Simpan
                </x-preline.button.primary>
            </div>

        </x-preline.card>
    </form>
@endsection
