<?php

namespace App\Helpers;

enum UnitMeasureEnum: string
{
    case G = 'g';
    case KG = 'kg';
    case CM = 'cm';
    case M  = 'm';
    case SET  = 'set';
    case PCS  = 'pcs';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
