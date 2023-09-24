@forelse ($rows as $data)
    <tr class="divide-x">
        <x-preline.table.td class="pl-6">{{ $data->name }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->username }}</x-preline.table.td>
        <x-preline.table.td>{{ $data->email }}</x-preline.table.td>
        <x-preline.table.td>
            <x-preline.badge @class([
                'bg-red-500 text-white' => $data->is_admin == 1,
                'bg-green-500 text-white' => $data->is_admin == 0,
            ])>
                {{ $data->is_admin ? 'Admin' : 'Karyawan' }}
            </x-preline.badge>
        </x-preline.table.td>
        <x-preline.table.td class="w-1 pr-6">
            <div class="space-x-2 flex items-center">
                <x-preline.link.update :url="route('dshb.user.edit', ['user' => $data->id])" />
                <x-preline.button.confirm-delete :url="route('dshb.user.destroy', ['user' => $data->id])" />
            </div>
        </x-preline.table.td>
    </tr>
@empty
@endforelse
