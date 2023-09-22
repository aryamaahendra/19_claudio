<?php

namespace App\Http\Controllers;

use App\Base\BaseController;
use App\Http\Requests\CreateSupplier;
use App\Http\Requests\UpdateSupplier;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SuppliersController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSupplier $request): RedirectResponse
    {
        return $this->fulfillable(
            $request,
            'dshb.supplier.index',
            'Data berhasil ditambah'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('supplier.update', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplier $request): RedirectResponse
    {
        return $this->fulfillable(
            $request,
            'dshb.supplier.index',
            'Data berhasil ditambah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier): RedirectResponse
    {
        try {
            DB::transaction(fn () => $supplier->delete());

            $message = $this->flashMessage(false, 'Data berhasil dihapus');
            return redirect()->route('dshb.supplier.index')->with($message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
