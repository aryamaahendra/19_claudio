@extends('components.layouts.landing')

@section('content')
    <div class="flex flex-col items-center text-center mb-14">
        <h1 class="mb-3 font-bold text-3xl text-slate-800">Kendalikan Inventaris Anda</h1>
        <h2 class="max-w-lg text-center text-slate-600">
            Optimalkan Operasional, Kurangi Biaya, dan Tingkatkan Efisiensi dengan Sistem Kontrol
            Inventaris Kami
        </h2>
    </div>

    <x-preline.card class="!px-0 !py-6 shadow overflow-hidden">
        @livewire('landing-material-table')
    </x-preline.card>
@endsection
