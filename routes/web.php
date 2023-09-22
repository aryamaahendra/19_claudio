<?php

use App\Models\ProductMaterial;
use App\Models\Restocked;
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


Route::get('/count-stock', function () {
    echo 'success';
});
