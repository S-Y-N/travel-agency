<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Описує номер телефону туриста.
 * Має зв'язок багато-до-багатьох з таблицями messengers та tourists.
 */
class Messenger extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function messengers(): BelongsToMany
    {
        return $this->belongsToMany(Messenger::class);
    }

    public function tourists(): BelongsToMany
    {
        return $this->belongsToMany(Tourist::class);
    }
}

?>
