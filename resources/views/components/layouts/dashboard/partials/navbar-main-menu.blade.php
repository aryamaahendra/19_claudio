@php
    $rn = Route::currentRouteName();
    $s_one = request()->segment(1) ?? '';
    $s_two = request()->segment(2) ?? '';
    $s_three = request()->segment(3) ?? '';
@endphp

<x-preline.navbar.menu-item-2 href="{{ route('dshb.index') }}" :active="$rn == 'dshb.index'">
    <x-icons.pie-chart class="w-5 h-5" />
    Dashboard
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.produk.index') }}" :active="$s_two == 'produk'">
    <x-icons.packege class="w-5 h-5" />
    Produk
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.restock.index') }}" :active="$s_two == 'restock'">
    <x-icons.truck class="w-5 h-5" />
    Re-Stock
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.material-terpakai.index') }}" :active="$s_two == 'material-terpakai'">
    <x-icons.assembly class="w-5 h-5" />
    Metrial Terpakai
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.minmax.index') }}" :active="$rn == 'dshb.minmax.index'">
    <x-icons.cpu class="w-5 h-5" />
    Min Max
</x-preline.navbar.menu-item-2>

@if (Role::admin())
    <x-preline.navbar.menu-dropdown-2 label="Master" :active="in_array($s_two, [
        'bahan-baku',
        'supplier',
        'user',
    ])">
        <x-preline.dropdown.item href="{{ route('dshb.bahan-baku.index') }}" :active="$s_two == 'bahan-baku'">
            Bahan Baku
        </x-preline.dropdown.item>

        <x-preline.dropdown.item href="{{ route('dshb.supplier.index') }}" :active="$s_two == 'supplier'">
            Supplier
        </x-preline.dropdown.item>

        <x-preline.dropdown.item href="{{ route('dshb.user.index') }}" :active="$s_two == 'user'">
            Pengguna
        </x-preline.dropdown.item>
    </x-preline.navbar.menu-dropdown-2>
@endif
