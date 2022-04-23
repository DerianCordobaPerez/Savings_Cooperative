<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'type_of_document',
        'reference_date',
        'date_of_expiry',
        'country_of_issue'
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

}
