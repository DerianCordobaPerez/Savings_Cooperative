<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Natural extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'paternal_surname',
        'maternal_surname',
        'names',
        'nationality',
        'profession',
        'educational_level',
        'marital_status',
        'date_of_birth',
        'type_of_dwelling',
        'dependency_number',
        'status',
        'economic_sector',
        'main_activity',
        'secondary_activity',
        'occupation'
    ];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

}
