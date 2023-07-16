<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Описує туриста або групу туристів.
 * Має зв'язок багато-до-багатьох з таблицями tourist_phones, people та tourist_tags.
 */
class Tourist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function touristPhones(): BelongsToMany
    {
        return $this->belongsToMany(TouristPhone::class);
    }

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(Human::class);
    }

    public function touristTags(): BelongsToMany
    {
        return $this->belongsToMany(TouristTag::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}

?>
