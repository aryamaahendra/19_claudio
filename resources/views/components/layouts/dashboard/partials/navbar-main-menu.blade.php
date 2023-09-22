<x-preline.navbar.menu-item-2 href="{{ '' }}" :active="false">
    <x-icons.pie-chart class="w-5 h-5" />
    Dashboard
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.produk.index') }}" :active="false">
    <x-icons.packege class="w-5 h-5" />
    Produk
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.restock.index') }}" :active="false">
    <x-icons.truck class="w-5 h-5" />
    Re-Stock
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.material-terpakai.index') }}" :active="false">
    <x-icons.assembly class="w-5 h-5" />
    Metrial Terpakai
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-item-2 href="{{ route('dshb.minmax.index') }}" :active="false">
    <x-icons.cpu class="w-5 h-5" />
    Min Max
</x-preline.navbar.menu-item-2>

<x-preline.navbar.menu-dropdown-2 label="Master" :active="false">
    <x-preline.dropdown.item href="{{ route('dshb.bahan-baku.index') }}">
        Bahan Baku
    </x-preline.dropdown.item>

    <x-preline.dropdown.item href="{{ route('dshb.supplier.index') }}">
        Supplier
    </x-preline.dropdown.item>

    <x-preline.dropdown.item href="{{ route('dshb.user.index') }}">
        Pengguna
    </x-preline.dropdown.item>
</x-preline.navbar.menu-dropdown-2>
