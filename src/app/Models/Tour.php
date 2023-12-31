<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Описує тур, яким можуть користуватись туристи.
 * Має зв'язок багато-до-багатьох з таблицями tour_types та countries.
 */
class Tour extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tourTypes(): BelongsToMany
    {
        return $this->belongsToMany(TourType::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}

?>
