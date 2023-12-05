@php
    $rn = Route::currentRouteName();
@endphp

<x-preline.navbar.menu-item-2 href="{{ route('dshb.index') }}" :active="$rn == 'dshb.index'">
    <x-icons.pie-chart class="w-5 h-5" />
    Dashboard
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.produk.index') }}" :active="$rn == 'dshb.produk.index'">
    <x-icons.packege class="w-5 h-5" />
    Produk
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.restock.index') }}" :active="$rn == 'dshb.restock.index'">
    <x-icons.truck class="w-5 h-5" />
    Re-Stock
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.material-terpakai.index') }}" :active="$rn == 'dshb.material-terpakai.index'">
    <x-icons.assembly class="w-5 h-5" />
    Metrial Terpakai
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.minmax.index') }}" :active="$rn == 'dshb.minmax.index'">
    <x-icons.cpu class="w-5 h-5" />
    Min Max
</x-preline.navbar.menu-item-2>

@if (Role::admin())
    <x-preline.navbar.menu-dropdown-2 label="Master" :active="in_array($rn, ['dshb.bahan-baku.index', 'dshb.supplier.index', 'dshb.user.index'])">
        <x-preline.dropdown.item href="{{ route('dshb.bahan-baku.index') }}" :active="$rn == 'dshb.bahan-baku.index'">
            Bahan Baku
        </x-preline.dropdown.item>

        <x-preline.dropdown.item href="{{ route('dshb.supplier.index') }}" :active="$rn == 'dshb.supplier.index'">
            Supplier
        </x-preline.dropdown.item>

        <x-preline.dropdown.item href="{{ route('dshb.user.index') }}" :active="$rn == 'dshb.user.index'">
            Pengguna
        </x-preline.dropdown.item>
    </x-preline.navbar.menu-dropdown-2>
@endif
