<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Privilege extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
