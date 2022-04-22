<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin Builder
 */
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

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function naturals(): BelongsToMany
    {
        return $this->belongsToMany(Natural::class);
    }

    public function directions(): BelongsToMany
    {
        return $this->belongsToMany(Direction::class);
    }

    public function telephones(): BelongsToMany
    {
        return $this->belongsToMany(Telephone::class);
    }

    public function references(): BelongsToMany
    {
        return $this->belongsToMany(Reference::class);
    }

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class);
    }

}
