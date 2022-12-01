<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function scenario(): HasMany
    {
        return $this->hasMany(ProductScenario::class);
    }
}
