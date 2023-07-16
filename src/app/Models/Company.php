<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Описує туристичну агенцію, від обличчя якої відбувається робота.
 */
class Company extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }
}

?>
