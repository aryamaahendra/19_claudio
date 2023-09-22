<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductMaterial as CreateRequest;
use App\Http\Requests\UpdateProductMaterial as UpdateRequest;
use App\Models\ProductMaterial;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('product-materials.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $suppliers = Supplier::all(['id', 'name']);
        return view('product-materials.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        return $this->fulfillable(
            $request,
            'dshb.bahan-baku.index',
            'Data berhasil diubah'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductMaterial $productMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductMaterial $productMaterial): View
    {
        $suppliers = Supplier::all(['id', 'name']);
        return view(
            'product-materials.update',
            compact('productMaterial', 'suppliers')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        return $this->fulfillable(
            $request,
            'dshb.bahan-baku.index',
            'Data berhasil ditambah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductMaterial $productMaterial)
    {
        try {
            DB::transaction(fn () => $productMaterial->delete());

            $message = $this->flashMessage(false, 'Data berhasil dihapus');
            return redirect()->route('dshb.bahan-baku.index')->with($message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
