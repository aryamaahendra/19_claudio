@extends('components.layouts.dashboard')

@section('content')
    <x-preline.card class="!px-0 !py-6 shadow overflow-hidden">
        <h1 class="px-6 mb-6 font-medium text-xl">List Material Terpakai</h1>

        @livewire('used-material-table')
    </x-preline.card>
@endsection
