<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class DetailCatalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'catalog_id',
        'description',
        'alternate_id'
    ];

    public function catalogs(): BelongsToMany
    {
        return $this->belongsToMany(Catalog::class);
    }

}
