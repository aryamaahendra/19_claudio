<?php

namespace App\Http\Requests;

use App\Models\ProductMaterial as Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class UpdateProductMaterial extends CreateProductMaterial
{
    public function fulfill(): mixed
    {
        try {
            $model = $this->route('bahan_baku');
            $input = $this->validated();
            DB::transaction(
                fn () => Model::find($model->id)->update($input)
            );
            return $model->refresh();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
