<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Telephone extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'type_of_phone',
        'number',
        'extension'
    ];

    public function partner(): HasMany
    {
        return $this->hasMany(Partner::class);
    }

}
