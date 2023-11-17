<?php

namespace App\Http\Requests;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UpdateSupplier extends CreateSupplier
{
    public function fulfill(): mixed
    {
        $input = $this->validated();
        $model = $this->route('supplier');
        try {
            return DB::transaction(
                fn () => Supplier::find($model->id)->update($input)
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
