<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_office_id',
        'office_id',
        'module_id',
        'transaction_id',
        'headings_id',
        'partner_id',
        'account_id',
        'date',
        'value',
        'type',
        'quotation'
    ];

    public function branchOffice(): HasMany
    {
        return $this->hasMany(BranchOffice::class);
    }

    public function office(): HasMany
    {
        return $this->hasMany(Office::class);
    }

    public function module(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function heading(): HasMany
    {
        return $this->hasMany(Heading::class);
    }

    public function partner(): HasMany
    {
        return $this->hasMany(Partner::class);
    }
}
