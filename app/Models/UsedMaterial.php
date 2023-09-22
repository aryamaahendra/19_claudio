<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UsedMaterial extends Model
{
    use HasFactory;

    protected $table = 'used_materials';

    protected $fillable = [
        'code',
        'date',
    ];

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductMaterial::class,
            'used_material_pivot',
            'used_material_id',
            'material_id',
        )->withPivot(['quantity']);
    }
}
