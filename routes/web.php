<?php

use App\Models\ProductMaterial;
use App\Models\Restocked;
use App\Models\UsedMaterial;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'dashboard',
    'as' => 'dshb.'
], function () {
    Route::get('/',  [
        \App\Http\Controllers\DashboardController::class,
        'index'
    ])->name('index');

    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('supplier', \App\Http\Controllers\SuppliersController::class);
    Route::resource('bahan-baku', \App\Http\Controllers\ProductMaterialController::class);
    Route::resource('produk', \App\Http\Controllers\ProductController::class);
    Route::resource('restock', \App\Http\Controllers\RestockedController::class);
    Route::resource('material-terpakai', \App\Http\Controllers\UsedMaterialController::class);

    Route::get('min-max-stock', [
        \App\Http\Controllers\MinMaxController::class,
        'index'
    ])->name('minmax.index');

    Route::post('min-max-stock', [
        \App\Http\Controllers\MinMaxController::class,
        'process'
    ])->name('minmax.process');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/re-calculate', function () {
    $materials = ProductMaterial::all();

    foreach ($materials as $material) {
        $totalStock = DB::table('material_restocked')
            ->where('material_id', $material->id)->sum('quantity');

        $totalUsed = DB::table('used_material_pivot')
            ->where('material_id', $material->id)->sum('quantity');

        $material->in_stock = $totalStock - $totalUsed;
        $material->save();
    }
    echo 'success';
});

Route::post('/mape', function () {
    Cache::forget('mape-testing');

    $rows = Restocked::with('materials')->whereIn('id', [10, 11, 12])->get();
    $mape = [];
    foreach ($rows as $restocked) {
        $prevRestocked = Restocked::where('id', '<', $restocked->id)->orderBy('id', 'desc')->first();
        $currDate = Carbon::create($restocked->date);
        $prevDate = Carbon::create($prevRestocked->date);

        $diffMonth = $currDate->diffInMonths($prevDate);

        foreach ($restocked->materials as $material) {
            if (!isset($mape[$material->id])) $mape[$material->id] = [];

            $forcast = $diffMonth * $material->maximumStock;
            $actual = (int) $material->pivot->quantity;

            $ape = number_format((($actual - $forcast) / $actual) * 100, 2);
            $mape[$material->id][$restocked->id] =  abs((float) $ape);
        }
    }

    Cache::rememberForever('mape-testing', fn () => $mape);
    return redirect()->route('mape-view');
})->name('mape-proccess');

Route::get('/mape', function () {
    $restocks = Restocked::with('materials')->whereIn('id', [10, 11, 12])->get();
    $materials = ProductMaterial::all('id', 'name');
    $mape = Cache::get('mape-testing');

    return view('mape', compact('restocks', 'materials', 'mape'));
})->name('mape-view');
