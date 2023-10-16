<?php

namespace App\Actions;

use App\Models\ProductMaterial;
use App\Models\Restocked;
use App\Models\UsedMaterial;
use Carbon\Carbon;
use Database\Factories\ProductFactory;
use Illuminate\Support\Facades\DB;

class MinMaxStock
{
    public static function process()
    {
        $rows = ProductMaterial::all('id');

        foreach ($rows as $key => $row) {
            $count = DB::table('used_material_pivot')
                ->where('material_id', $row['id'])->count();

            $maxValue = DB::table('used_material_pivot')
                ->where('material_id', $row['id'])
                ->max('quantity');

            $sum = DB::table('used_material_pivot')
                ->where('material_id', $row['id'])
                ->sum('quantity');

            // dd($maxValue);
            $maxValue = (int) $maxValue;
            $leadTime = 7 / 30;

            $rataRataKebutuhan = (int) $sum / (int) $count;

            // dd(($maxValue - $rataRataKebutuhan), $maxValue, $rataRataKebutuhan);
            $safetyStock = ceil(($maxValue - $rataRataKebutuhan) * $leadTime);

            $minimumStock = ceil(($rataRataKebutuhan * $leadTime) + $safetyStock);
            $maximumStock = ceil(2 * (($rataRataKebutuhan * $leadTime) + $safetyStock));

            $row->rataRataKebutuhan = $rataRataKebutuhan;
            $row->safetyStock = $safetyStock;
            $row->minimumStock = $minimumStock;
            $row->maximumStock = $maximumStock;
            $row->Q = $maximumStock - $minimumStock;
            $row->save();
        }
    }
}
