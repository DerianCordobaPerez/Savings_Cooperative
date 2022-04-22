<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 */
class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'description'
    ];

    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }

}
