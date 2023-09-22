<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsedMaterial;
use App\Http\Requests\UpdateUsedMaterial;
use App\Models\UsedMaterial;
use Illuminate\View\View;

class UsedMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('used-material.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('used-material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUsedMaterial $request)
    {
        return $this->fulfillable(
            $request,
            'dshb.material-terpakai.index',
            'Data berhasil diubah'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(UsedMaterial $usedMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsedMaterial $usedMaterial): View
    {
        return view('used-material.update', compact('usedMaterial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsedMaterial $request)
    {
        return $this->fulfillable(
            $request,
            'dshb.material-terpakai.index',
            'Data berhasil diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsedMaterial $usedMaterial)
    {
        //
    }
}
