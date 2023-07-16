<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Описує фізичну особу та її паспортні дані.
 * Має зв'язок багато-до-багатьох з таблицею tourists.
 */
class Human extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tourists(): BelongsToMany
    {
        return $this->belongsToMany(Tourist::class);
    }
}

?>
