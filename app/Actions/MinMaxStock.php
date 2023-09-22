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

            if ($count <= 0) {
                unset($rows[$key]);
                continue;
            };

            $maxValue = DB::table('used_material_pivot')
                ->where('material_id', $row['id'])
                ->max('quantity');

            $sum = DB::table('used_material_pivot')
                ->where('material_id', $row['id'])
                ->sum('quantity');

            // dd($maxValue);
            $maxValue = ceil((int) $maxValue / 30);
            $leadTime = 10;

            $rataRataKebutuhan = (int) $sum / $count;
            $rataRataKebutuhan = $rataRataKebutuhan / 30;

            // dd(($maxValue - $rataRataKebutuhan), $maxValue, $rataRataKebutuhan);
            $safetyStock = ceil(($maxValue - $rataRataKebutuhan) * $leadTime);

            $minimumStock = ceil(($rataRataKebutuhan * $leadTime) + $safetyStock);
            $maximumStock = ceil(2 * (($rataRataKebutuhan * $leadTime) + $safetyStock));

            // $new['material_id'] = (int) $row['id'];
            // $new['total'] = (int) $sum;
            // $new['rataRataKebutuhan'] = $rataRataKebutuhan;
            // $new['safetyStock'] = $safetyStock;
            // $new['minimumStock'] = $minimumStock;
            // $new['maximumStock'] = $maximumStock;
            // $new['q'] = $maximumStock - $minimumStock;

            $row->rataRataKebutuhan = $rataRataKebutuhan;
            $row->safetyStock = $safetyStock;
            $row->minimumStock = $minimumStock;
            $row->maximumStock = $maximumStock;
            $row->Q = $maximumStock - $minimumStock;
            $row->save();

            // $rows[$key] = $new;
        }
    }
}
