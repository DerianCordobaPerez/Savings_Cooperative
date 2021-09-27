<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin Builder
 */
class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'type_of_reference',
        'name',
        'name_of_work',
        'mail',
        'telephone',
        'observation'
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

}
