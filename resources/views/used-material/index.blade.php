@extends('components.layouts.dashboard')

@section('content')
    <x-preline.card class="!px-0 !py-6 shadow overflow-hidden">
        @livewire('used-material-table')
    </x-preline.card>
@endsection
