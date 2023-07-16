<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Описує тип туру.
 * Має зв'язок багато-до-багатьох з таблицею tours.
 */
class TourType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tours(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class);
    }
}

?>
