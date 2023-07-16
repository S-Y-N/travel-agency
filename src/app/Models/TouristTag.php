<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Описує тег, який надається туристу.
 * Має зв'язок багато-до-багатьох з таблицею tourists.
 */
class TouristTag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tourists(): BelongsToMany
    {
        return $this->belongsToMany(Tourist::class);
    }
}

?>
