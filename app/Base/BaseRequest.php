<?php

namespace App\Base;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseRequest extends FormRequest
{
    public abstract function fulfill(): mixed;
}
