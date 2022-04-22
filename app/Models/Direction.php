<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 */
class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'type_of_address',
        'country',
        'department',
        'city',
        'neighborhood',
        'home_address',
        'kind_of_property'
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

}
