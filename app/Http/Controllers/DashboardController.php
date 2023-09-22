<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductMaterial;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $product = Product::count();
        $material = ProductMaterial::count();
        $supplier = Supplier::count();
        return view('dashboard.index', compact('product', 'material', 'supplier'));
    }
}
