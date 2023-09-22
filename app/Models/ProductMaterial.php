<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMaterial extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_materials';

    protected $fillable = [
        'code',
        'name',
        'unit_measure',
        'supplier_id',
    ];

    function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_material_pivot',
            'material_id',
            'product_id',
        )->withPivot('material_used');
    }
}
