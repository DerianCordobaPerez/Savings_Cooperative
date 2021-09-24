<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property mixed id
 * @property string employee_id
 * @property mixed role_id
 * @property string password
 * @property DateTime start_date
 * @property DateTime final_date
 * @mixin Builder
 */
class UserRole extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['employee_id', 'role_id', 'password', 'start_date', 'final_date'];

    /**
     * @return BelongsTo
     */
    public function employee(): BelongsTo {
        return $this->belongsTo(Employee::class);
    }

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @var string[]
     */
    protected $hidden =['password'];
}
