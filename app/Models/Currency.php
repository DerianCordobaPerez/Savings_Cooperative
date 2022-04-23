<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'decimal_number',
        'abbreviation'
    ];

    public function quotation(): BelongsTo
    {
        return $this->belongsTo(Quotation::class);
    }

    public function parameter(): BelongsTo
    {
        return $this->belongsTo(Parameter::class);
    }

}
