<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRestocked;
use App\Http\Requests\UpdateRestocked;
use App\Models\Restocked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RestockedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('restocked.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('restocked.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRestocked $request)
    {
        return $this->fulfillable(
            $request,
            'dshb.restock.index',
            'Data berhasil diubah'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Restocked $restocked)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restocked $restocked): View
    {
        return view('restocked.update', compact('restocked'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestocked $request)
    {
        return $this->fulfillable(
            $request,
            'dshb.restock.index',
            'Data berhasil ditambah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restocked $restocked)
    {
        try {
            DB::transaction(fn () => $restocked->delete());

            $message = $this->flashMessage(false, 'Data berhasil dihapus');
            return redirect()->route('dshb.restock.destroy')->with($message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
