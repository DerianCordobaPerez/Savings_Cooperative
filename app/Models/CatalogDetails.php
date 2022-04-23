<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CatalogDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'catalog_id',
        'description',
        'alternate_id'
    ];

    public function catalog(): BelongsToMany
    {
        return $this->belongsToMany(Catalog::class);
    }

}
