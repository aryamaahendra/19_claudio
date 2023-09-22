<?php

namespace App\Http\Requests;

use App\Models\ProductMaterial;
use App\Models\UsedMaterial;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUsedMaterial extends CreateUsedMaterial
{
    protected function process(array $input): UsedMaterial
    {
        $usedMaterial = $this->route('material_terpakai');

        UsedMaterial::where('id', $usedMaterial->id)->update([
            'date' => Carbon::create($input['date']),
        ]);

        $usedMaterial->load('materials');
        $exist = [];

        foreach ($usedMaterial->materials as $material) {
            $currStock = (int) $material->in_stock;
            $stockRemain = 0;

            if (in_array($material->id, $input['materials'])) {
                $quantitiyChange = (int) $material->pivot->quantity - (int) $input['quantity'][$material->id];
                $stockRemain = $currStock + $quantitiyChange;

                $usedMaterial->materials()->updateExistingPivot($material->id, [
                    'quantity' => $input['quantity'][$material->id],
                ]);

                array_push($exist, $material->id);
            } else {
                $stockRemain = $currStock + (int) $material->pivot->quantity;
                $usedMaterial->materials()->detach($material->id);
            }

            if ($stockRemain < 0) {
                abort(400, $material->name . ' Stock tidak mencukupi');
            }

            $material->in_stock = $stockRemain;
            $material->save();
        }

        foreach ($input['materials'] as $id) {
            if (in_array($id, $exist)) continue;

            $material = ProductMaterial::findOrFail($id);
            $currStock = (int) $material->in_stock;
            $stockRemain = $currStock - (int) $input['quantity'][$id];

            if ($stockRemain < 0) {
                abort(404, $material->name . ' Stock tidak mencukupi');
            }

            $usedMaterial->materials()->attach($material->id, [
                'quantity' => $input['quantity'][$id],
            ]);

            $material->in_stock = $stockRemain;
            $material->save();
        }

        return $usedMaterial->refresh();
    }
}
