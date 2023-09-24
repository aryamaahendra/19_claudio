<?php

namespace App\Http\Controllers;

use App\Helpers\Role;
use App\Http\Requests\CreateUser;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct()
    {
        if (!Role::admin()) abort(401);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUser $request): RedirectResponse
    {
        return $this->fulfillable(
            $request,
            'dshb.user.index',
            'User berhasil ditambah'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser $request): RedirectResponse
    {
        return $this->fulfillable(
            $request,
            'dshb.user.index',
            'User berhasil diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        try {
            DB::transaction(fn () => $user->delete());
            $message = $this->flashMessage(false, 'User berhasil dihapus');

            return redirect()->route('dshb.user.index')->with($message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
