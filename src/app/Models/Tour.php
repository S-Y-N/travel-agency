<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Описує країну, у якій проходить тур.
 * Має зв'язок багато-до-багатьох з таблицею tours.
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
