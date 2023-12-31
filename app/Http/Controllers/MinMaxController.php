<?php

namespace App\Http\Controllers;

use App\Actions\MinMaxStock;
use App\Helpers\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MinMaxController extends Controller
{
    public function index(): View
    {
        return view('minmax.index');
    }

    public function process(): RedirectResponse
    {
        if (!Role::admin()) abort(401);
        MinMaxStock::process();

        $message = $this->flashMessage(false, 'Data berhasil diprocess');
        return redirect()->back()->with($message);
    }
}
