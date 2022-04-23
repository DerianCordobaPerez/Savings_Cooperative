<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'type_of_address',
        'country',
        'department',
        'city',
        'neighborhood',
        'home_address',
        'kind_of_property'
    ];

    public function partner(): HasMany
    {
        return $this->hasMany(Partner::class);
    }

}
