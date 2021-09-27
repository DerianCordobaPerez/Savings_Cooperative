<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 */
class Catalog extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function detail(): BelongsTo
    {
        return $this->belongsTo(DetailCatalog::class);
    }

}
