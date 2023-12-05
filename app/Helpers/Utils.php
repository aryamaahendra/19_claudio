<?php

namespace App\Helpers;

class Utils
{
    public static function currency($number)
    {
        return 'Rp ' . number_format($number, 0, ',', '.');
    }
}
