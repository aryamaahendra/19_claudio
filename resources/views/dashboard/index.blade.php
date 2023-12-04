@extends('components.layouts.dashboard')

@section('content')
    <div class="mb-8">
        <h2 class="text-lg font-thin mb-1 text-black/60">
            Welcome Back, {{ auth()->user()->name }}
        </h2>
        <h1 class="text-2xl font-bold">Dashboard
            {{ auth()->user()->is_admin == 1 ? 'Admin' : 'Karyawan' }}</h1>
    </div>

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
        <h1 class="px-6 mb-6 font-medium text-xl">List Bahan Baku</h1>

        @livewire('dashboard-table')
    </x-preline.card>
@endsection
