<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_id',
        'date',
        'value'
    ];

    public function currencies(): HasMany
    {
        return $this->hasMany(Currency::class);
    }

}
