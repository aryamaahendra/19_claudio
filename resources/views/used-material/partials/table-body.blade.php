@forelse ($rows as $data)
    <tr class="divide-x">
        <x-preline.table.td class="pl-6">
            {{ Carbon\Carbon::create($data->date)->toFormattedDayDateString() }}
        </x-preline.table.td>
        <x-preline.table.td>{{ $data->code }}</x-preline.table.td>
        <x-preline.table.td class="w-1 pr-6">
            <div class="space-x-2 flex items-center">
                <x-preline.link.update :url="route('dshb.material-terpakai.edit', [
                    'material_terpakai' => $data->id,
                ])" />

                <x-preline.button.confirm-delete :url="route('dshb.material-terpakai.destroy', [
                    'material_terpakai' => $data->id,
                ])" />
            </div>
        </x-preline.table.td>
    </tr>
@empty
@endforelse
