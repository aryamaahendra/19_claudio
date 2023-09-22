@extends('components.layouts.dashboard')

@section('content')
    <div class="grid grid-cols-3 gap-6 mb-6">
        <div class="bg-white flex items-center justify-between shadow rounded-md p-6">
            <div class="">
                <h3 class="">Product</h3>
                <h4 class="font-bold text-4xl">{{ $product }}</h4>
            </div>
            <div class="text-green-500/70">
                <x-icons.packege class="w-12 h-12" />
            </div>
        </div>

        <div class="bg-white flex items-center justify-between shadow rounded-md p-6">
            <div class="">
                <h3 class="">Bahan Baku</h3>
                <h4 class="font-bold text-4xl">{{ $material }}</h4>
            </div>
            <div class="text-blue-500/70">
                <x-icons.packeges class="w-12 h-12" />
            </div>
        </div>

        <div class="bg-white flex items-center justify-between shadow rounded-md p-6">
            <div class="">
                <h3 class="">Supplier</h3>
                <h4 class="font-bold text-4xl">{{ $supplier }}</h4>
            </div>
            <div class="text-yellow-500/70">
                <x-icons.truck class="w-12 h-12" />
            </div>
        </div>
    </div>

    <x-preline.card class="!px-0 !py-6 shadow overflow-hidden">
        @livewire('dashboard-table')
    </x-preline.card>
@endsection
