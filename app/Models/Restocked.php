<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restocked extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'restockeds';

    protected $fillable = [
        'code',
        'date',
    ];

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductMaterial::class,
            'material_restocked',
            'restocked_id',
            'material_id',
        )->withPivot(['quantity', 'unit_price', 'total_price']);
    }
}
