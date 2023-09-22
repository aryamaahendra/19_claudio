<?php

namespace App\Http\Requests;

use App\Models\Product;
use App\Models\ProductMaterial;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class UpdateProduct extends CreateProduct
{
    protected function process(array $input): Product
    {
        $product = $this->route('produk');
        $product->load('materials');

        $exist = [];
        foreach ($product->materials as $material) {
            if (in_array($material->id, $input['materials'])) {
                $product->materials()->updateExistingPivot($material->id, [
                    'material_used' => $input['meterial_used'][$material->id],
                ]);

                array_push($exist, $material->id);
            } else {
                $product->materials()->detach($material->id);
            }
        }

        foreach ($input['materials'] as $id) {
            if (in_array($id, $exist)) continue;

            $material = ProductMaterial::findOrFail($id);
            $product->materials()->attach($material->id, [
                'material_used' => $input['meterial_used'][$id]
            ]);
        }

        return $product->refresh();
    }
}
