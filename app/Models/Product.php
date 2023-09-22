<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'unit_measure',
    ];

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductMaterial::class,
            'product_material_pivot',
            'product_id',
            'material_id'
        )->withPivot('material_used');
    }
}
