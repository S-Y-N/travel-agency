<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Описує банк.
 */
class Bank extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function legalBodies()
    {
        return $this->hasMany(LegalBody::class);
    }
}

?>
