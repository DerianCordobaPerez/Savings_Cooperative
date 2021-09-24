<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property mixed id
 * @property string|mixed role_name
 * @mixin Builder
 */
class Role extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['role_name'];

    /**
     * Regresa la relacion de usuarios con roles
     *
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Regresa la relacion de privilegios con roles
     *
     * @return BelongsToMany
     */
    public function privileges(): BelongsToMany
    {
        return $this->belongsToMany(Privilege::class, 'role_privileges');
    }

}
