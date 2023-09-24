<?php

namespace App\Http\Controllers;

use App\Helpers\Role;
use App\Http\Requests\CreateProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        if (!Role::admin()) abort(401);

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProduct $request)
    {
        if (!Role::admin()) abort(401);

        return $this->fulfillable(
            $request,
            'dshb.produk.index',
            'Data berhasil ditambah'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        if (!Role::admin()) abort(401);

        return view('product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduct $request)
    {
        if (!Role::admin()) abort(401);

        return $this->fulfillable(
            $request,
            'dshb.produk.index',
            'Data berhasil diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (!Role::admin()) abort(401);

        try {
            DB::transaction(fn () => $product->delete());

            $message = $this->flashMessage(false, 'Data berhasil dihapus');
            return redirect()->route('dshb.produk.index')->with($message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
