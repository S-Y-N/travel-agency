<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Описує банк.
 */
class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function legalBodies(): HasMany
    {
        return $this->hasMany(LegalBody::class);
    }

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}

?>
