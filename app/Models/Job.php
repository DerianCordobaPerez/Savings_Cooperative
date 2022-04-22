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
class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'type_of_company',
        'company_name',
        'date_of_admission',
        'direction',
        'telephone',
        'function',
        'type_of_contract',
        'position'
    ];

    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class);
    }

}
