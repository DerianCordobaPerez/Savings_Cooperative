<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 * @property mixed role_id
 * @property mixed privilege_id
 * @mixin Builder
 */
class RolePrivilege extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'role_privileges';

    /**
     * @var string[]
     */
    protected $fillable = ['role_id', 'privilege_id'];
}
