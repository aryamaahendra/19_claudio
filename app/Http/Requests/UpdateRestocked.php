<?php

namespace App\Http\Requests;

use App\Models\ProductMaterial;
use App\Models\Restocked;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRestocked extends CreateRestocked
{
    protected function process(array $input): Restocked
    {
        $restocked = $this->route('restock');

        Restocked::where('id', $restocked->id)->update([
            'date' => Carbon::create($input['date']),
        ]);

        $restocked->load('materials');
        $exist = [];

        foreach ($restocked->materials as $material) {
            $currStock = (int) $material->in_stock;
            $stockRemain = 0;

            if (in_array($material->id, $input['materials'])) {
                $quantitiyChange = (int) $input['quantity'][$material->id] - (int) $material->pivot->quantity;
                $stockRemain = $currStock + $quantitiyChange;

                $restocked->materials()->updateExistingPivot($material->id, [
                    'quantity' => $input['quantity'][$material->id],
                    'unit_price' => $input['unit_price'][$material->id],
                    'total_price' => (int) $input['quantity'][$material->id] * (int) $input['unit_price'][$material->id],
                ]);

                array_push($exist, $material->id);
            } else {
                $stockRemain = $currStock - (int) $material->pivot->quantity;
                $restocked->materials()->detach($material->id);
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
            $restocked->materials()->attach($material->id, [
                'quantity' => $input['quantity'][$id],
                'unit_price' => $input['unit_price'][$id],
                'total_price' => (int) $input['quantity'][$id] * (int) $input['unit_price'][$id],
            ]);

            $material->in_stock = $currStock + (int) $input['quantity'][$id];
            $material->save();
        }

        return $restocked->refresh();
    }
}
