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
    case ROL  = 'rol';
    case YARD  = 'yard';
    case LITER  = 'liter';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
