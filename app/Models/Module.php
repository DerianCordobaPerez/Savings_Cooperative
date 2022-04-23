<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function heading(): BelongsTo
    {
        return $this->belongsTo(Heading::class);
    }

    public function movement(): BelongsTo
    {
        return $this->belongsTo(Movement::class);
    }

    public function parameter(): BelongsTo
    {
        return $this->belongsTo(Parameter::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
