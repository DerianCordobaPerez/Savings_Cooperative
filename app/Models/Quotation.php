<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_id',
        'date',
        'value'
    ];

    public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(Currency::class);
    }

}
