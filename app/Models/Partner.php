<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'identification',
        'user_name',
        'relation',
        'economic_group',
        'tax_exonerated',
        'assured_relationship',
        'branch_of_origin',
        'office_of_origin',
        'date_of_admission',
        'executive'
    ];

    public function request(): BelongsTo
    {
        return $this->belongsTo(Request::class);
    }

    public function natural(): BelongsTo
    {
        return $this->belongsTo(Natural::class);
    }

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }

    public function telephone(): BelongsTo
    {
        return $this->belongsTo(Telephone::class);
    }

    public function reference(): BelongsTo
    {
        return $this->belongsTo(Reference::class);
    }

    public function jobs(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function movement(): BelongsTo
    {
        return $this->belongsTo(Movement::class);
    }
}
