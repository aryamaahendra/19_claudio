<?php

namespace App\Base;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    protected function flashMessage(bool $error, string $msg): array
    {
        return [
            'flash-messages' => [
                'error' => $error,
                'message' => $msg
            ]
        ];
    }

    protected function fulfillable(Request $reqquest, string $routeName, string $message): RedirectResponse
    {
        try {
            $reqquest->fulfill();
            $flashMessage = $this->flashMessage(false, $message);
        } catch (\Exception $e) {
            $flashMessage = $this->flashMessage(true, $e->getMessage());
        }

        return redirect()->route($routeName)->with($flashMessage);
    }
}
